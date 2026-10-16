<?php

declare(strict_types=1);

$root = dirname(__DIR__);
$registryPath = $root . '/data/materials.json';
$eventPath = $argv[1] ?? getenv('GITHUB_EVENT_PATH') ?: '';

date_default_timezone_set('Asia/Tehran');

function fail(string $message): never
{
    fwrite(STDERR, $message . PHP_EOL);
    exit(1);
}

if ($eventPath === '' || !is_file($eventPath)) {
    fail('GitHub issue event payload was not found.');
}

$eventContents = file_get_contents($eventPath);
$event = json_decode($eventContents === false ? '' : $eventContents, true);

if (!is_array($event)) {
    fail('Could not decode the GitHub issue event payload.');
}

if (($event['action'] ?? null) !== 'closed') {
    fail('Ignoring event: the issue was not just closed.');
}

$issue = $event['issue'] ?? null;
if (!is_array($issue)) {
    fail('The event does not contain an issue.');
}

$hasDailyReviewLabel = false;
foreach (($issue['labels'] ?? []) as $label) {
    if (is_array($label) && ($label['name'] ?? null) === 'daily-review') {
        $hasDailyReviewLabel = true;
        break;
    }
}

if (!$hasDailyReviewLabel) {
    fail('Ignoring issue: it does not have the daily-review label.');
}

$body = $issue['body'] ?? '';
if (!is_string($body)) {
    fail('The issue body is missing or invalid.');
}

preg_match_all('/<!--\s*review-path:\s*(.*?)\s*-->/', $body, $matches);
$paths = array_values(array_unique(array_map('trim', $matches[1] ?? [])));

if ($paths === []) {
    fail('No review-path identifiers were found in the issue body.');
}

if (!is_file($registryPath)) {
    fail('Missing data/materials.json.');
}

$registryContents = file_get_contents($registryPath);
$registry = json_decode($registryContents === false ? '' : $registryContents, true);

if (!is_array($registry)) {
    fail('data/materials.json must contain a JSON object.');
}

// Refuse to update anything unless every requested path is already registered.
foreach ($paths as $path) {
    if ($path === '' || str_starts_with($path, '/') || str_contains($path, '\\') || str_contains($path, '..')) {
        fail('Invalid review path found in issue body.');
    }

    if (!array_key_exists($path, $registry)) {
        fail('Review path is not registered in data/materials.json: ' . $path);
    }
}

$now = date(DATE_ATOM);
foreach ($paths as $path) {
    $registry[$path] = $now;
}

$json = json_encode(
    (object) $registry,
    JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR
) . PHP_EOL;

if (file_put_contents($registryPath, $json, LOCK_EX) === false) {
    fail('Could not write data/materials.json.');
}

echo 'Updated review timestamps for ' . count($paths) . ' material(s) at ' . $now . '.' . PHP_EOL;
