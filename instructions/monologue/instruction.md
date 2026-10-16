# Monologue JSON Instructions

Use this document together with `template.json` when creating a monologue entry for English learning. Copy the template structure into a new data file and populate it; do not put an actual learning entry in the reusable template.

## Purpose

A monologue is one continuous piece of speech by a single speaker. Use it for announcements, short talks, explanations, presentations, personal accounts, and other one-speaker listening practice. Do not use this format for exchanges in which multiple speakers take turns.

## Field reference

- `type` (string, required): Always `"monologue"`.
- `title` (string, required): A concise, descriptive title for the speech.
- `tags` (array of strings): Short topic or learning labels, such as `"work"`, `"education"`, or `"daily life"`.
- `context` (object, required): Background for the speech.
  - `situation` (string, required): Where or why the speaker is speaking.
  - `purpose` (string, required): What the speaker wants to communicate or achieve.
  - `audience` (string): The intended listener or group of listeners. Use an empty string if it is not relevant or known.
- `speaker` (object, required): Identifies the speaker.
  - `name` (string, required): The speaker's name or a clear role label, such as `"Host"`, `"Guide"`, or `"Presenter"`. Use a role label when a personal name adds no value.
- `sentences` (array, required): The speech in its original order, split into sentence-level units. Include at least one sentence.
  - `text` (string, required): One complete spoken sentence. Keep punctuation and wording accurate.
  - `pronunciation` (object): Pronunciation support for the sentence.
    - `uk` (string): British English pronunciation transcription or a concise pronunciation aid. Leave empty if it has not been checked; do not invent an unreliable transcription.
  - `notes` (array of strings): Brief notes about meaning, vocabulary, grammar, or pronunciation for this sentence. Use an empty array when there are no notes.
- `related` (array of strings): Paths or links to genuinely related entries, if available. Otherwise use an empty array.
- `notes` (array of strings): Entry-level learning notes that apply to the whole speech.

## Authoring and validation rules

1. Write one coherent speech with a clear purpose and logical progression. Do not format it as a dialogue.
2. Split the speech into sentence-level items, preserving the original order. Each item should normally contain one sentence; avoid splitting a sentence across multiple items.
3. Keep the speech natural and appropriate to the requested learning level. Use realistic spoken language rather than unnecessarily formal written prose unless the situation calls for it.
4. Add pronunciation and notes only when they are useful and sufficiently reliable. Do not treat blank optional fields as errors.
5. Keep all fields in the template, use the correct data types, and produce valid JSON with double quotes, no comments, and no trailing commas.
6. Do not add fields that are not defined by the template unless the schema is deliberately revised first.
