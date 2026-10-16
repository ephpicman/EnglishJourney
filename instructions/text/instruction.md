# Text JSON Instructions

Use this file with `instructions/text/template.json` to create reading-text JSON documents.

## How to fill the template

- Copy the template into a new JSON file for each reading. Populate the placeholders; do not replace the reusable template with finished reading content.
- `type`: keep as `reading`.
- `title`: a concise, descriptive title for the reading.
- `tags`: a short list of useful topic or language-focus tags.
- `context.topic`: the reading's specific situation or subject.
- `context.purpose`: the learning purpose, especially which relevant items from the current root `context.md` the text reinforces.
- `paragraphs`: an ordered array of paragraphs. Each paragraph contains an ordered `sentences` array and may contain paragraph-level `notes`.
- For each sentence, put the exact sentence in `text`. Put UK IPA in `pronunciation.uk` only when it can be provided reliably; do not invent uncertain transcriptions. Use sentence-level `notes` for concise explanations that materially help learning; otherwise use an empty array.
- Use `related` for relevant repository entries or learning materials only when there is a real connection. Otherwise use an empty array.
- Use top-level `notes` for brief notes about the reading as a whole, not for duplicating the text.
- Keep the same keys and nesting. Do not add extra keys unless the template is deliberately revised first.

## Content rules

- Read the current root `context.md` before drafting. It records what exists in the learning repository, but does not prove that every item is mastered.
- Prioritise natural use of relevant known language. Do not force every known item into one text or introduce large amounts of unfamiliar vocabulary.
- Follow the requested length and subject. If the subject is open, choose a fresh, useful scenario and check existing readings to avoid near-duplicates.
- Paragraph and sentence boundaries must match the actual text. Do not split sentences arbitrarily.
- Keep the JSON valid: use double quotes, escape embedded quotes and backslashes correctly, and never include comments or trailing commas.
