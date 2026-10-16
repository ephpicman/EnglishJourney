# Conversation JSON Instructions

Use this document together with `template.json` when creating a conversation entry for English learning. Copy the template structure into a new data file and populate it; do not put an actual learning entry in the reusable template.

## Purpose

A conversation is a natural exchange between two or more speakers. Use it for everyday dialogues, workplace conversations, service encounters, interviews, and other situations where speakers respond to one another.

## Field reference

- `type` (string, required): Always `"conversation"`.
- `title` (string, required): A concise, descriptive title for the conversation.
- `tags` (array of strings): Short topic or learning labels, such as `"work"`, `"appointments"`, or `"small talk"`.
- `context` (object, required): Background that helps the learner understand the exchange.
  - `situation` (string, required): Where or why the conversation takes place. Keep it concise.
  - `purpose` (string, required): What the speakers are trying to achieve.
  - `speakers` (array, required): The people taking part. Include at least two speakers.
    - `id` (string, required): A stable, unique identifier within this entry, such as `"speaker_1"`. Use the same ID whenever that person speaks.
    - `name` (string, required): The speaker's display name or a consistent role label, such as `"Alex"` or `"Customer"`. Avoid collecting irrelevant personal details.
- `dialogue` (array, required): Spoken turns in their original order. Include at least one turn.
  - `speaker_id` (string, required): Must exactly match an ID in `context.speakers`.
  - `text` (string, required): The spoken words for this turn. Keep turns natural and suitable for the intended level.
  - `pronunciation` (object): Pronunciation support for the turn.
    - `uk` (string): British English pronunciation transcription or a concise pronunciation aid. Leave empty if it has not been checked; do not invent an unreliable transcription.
  - `notes` (array of strings): Brief, useful notes for this turn, such as meaning, usage, connected speech, or a relevant language point. Use an empty array when there are no notes.
- `related` (array of strings): Paths or links to genuinely related entries, if available. Otherwise use an empty array.
- `notes` (array of strings): Entry-level learning notes that apply to the conversation as a whole.

## Authoring and validation rules

1. Write a plausible exchange: later turns should respond to earlier turns, and each speaker should have a clear reason to speak.
2. Include at least two distinct speakers. Every `speaker_id` in `dialogue` must match exactly one declared speaker ID.
3. Keep speaker IDs unique within the entry. Do not use names as IDs; names or role labels can change without changing the identifier.
4. Preserve the order of turns. Use one dialogue item per spoken turn, not one item per sentence when a speaker naturally says several sentences together.
5. Keep the language natural and appropriate to the requested learning level. Avoid forcing target vocabulary into unnatural dialogue.
6. Add pronunciation and notes only when they are useful and sufficiently reliable. Do not treat blank optional fields as errors.
7. Keep all fields in the template, use the correct data types, and produce valid JSON with double quotes, no comments, and no trailing commas.
8. Do not add fields that are not defined by the template unless the schema is deliberately revised first.
