<?php

declare(strict_types=1);

$root = dirname(__DIR__);
$configPath = $root . '/config.ini';
$registryPath = $root . '/data/materials.json';

date_default_timezone_set('Asia/Tehran');

if (!is_file($configPath)) {
    fwrite(STDERR, "Missing config.ini.\n");
    exit(1);
}

$config = parse_ini_file($configPath, true, INI_SCANNER_TYPED);
if ($config === false) {
    fwrite(STDERR, "Could not parse config.ini.\n");
    exit(1);
}

$materialDirectories = $config['materials'] ?? [];
$reviewCount = (int) ($config['review']['count'] ?? 100);

if ($reviewCount < 1) {
    fwrite(STDERR, "The review count must be greater than zero.\n");
    exit(1);
}

if (!is_file($registryPath)) {
    fwrite(STDERR, "Missing data/materials.json.\n");
    exit(1);
}

$registryContents = file_get_contents($registryPath);
$registry = json_decode($registryContents === false ? '' : $registryContents, true);

if (!is_array($registry)) {
    fwrite(STDERR, "data/materials.json must contain a JSON object.\n");
    exit(1);
}

$markdownFiles = [];

foreach ($materialDirectories as $directory) {
    if (!is_string($directory) || trim($directory) === '') {
        continue;
    }

    $relativeDirectory = trim(str_replace('\\', '/', $directory), '/');
    $absoluteDirectory = $root . '/' . $relativeDirectory;

    // Config may contain directories that will be added in the future.
    if (!is_dir($absoluteDirectory)) {
        continue;
    }

    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($absoluteDirectory, FilesystemIterator::SKIP_DOTS)
    );

    foreach ($iterator as $file) {
        if (!$file->isFile() || strtolower($file->getExtension()) !== 'md') {
            continue;
        }

        $relativePath = substr($file->getPathname(), strlen($root) + 1);
        $markdownFiles[str_replace('\\', '/', $relativePath)] = true;
    }
}

$paths = array_keys($markdownFiles);
sort($paths, SORT_STRING);

$now = date(DATE_ATOM);
$registryChanged = false;

foreach ($paths as $path) {
    if (!array_key_exists($path, $registry)) {
        $registry[$path] = $now;
        $registryChanged = true;
    }
}

if ($registryChanged) {
    $json = json_encode(
        (object) $registry,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR
    ) . PHP_EOL;

    if (file_put_contents($registryPath, $json, LOCK_EX) === false) {
        fwrite(STDERR, "Could not write data/materials.json.\n");
        exit(1);
    }
}

$items = [];
foreach ($paths as $path) {
    $timestamp = $registry[$path] ?? $now;
    $parsedTimestamp = is_string($timestamp) ? strtotime($timestamp) : false;

    $items[] = [
        'path' => $path,
        'timestamp' => $timestamp,
        'sort_timestamp' => $parsedTimestamp === false ? 0 : $parsedTimestamp,
    ];
}

usort($items, static function (array $a, array $b): int {
    $comparison = $a['sort_timestamp'] <=> $b['sort_timestamp'];
    return $comparison !== 0 ? $comparison : strcmp($a['path'], $b['path']);
});

$selected = array_slice($items, 0, $reviewCount);
foreach ($selected as &$item) {
    unset($item['sort_timestamp']);
}
unset($item);

echo json_encode($selected, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR) . PHP_EOL;
