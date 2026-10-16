# Issue Interaction Instructions

## Requests labelled `request-reading`

When an issue in `ephpicman/EnglishJourney` has the `request-reading` label, treat it as a request to generate one reading text and save it as a JSON file in the repository.

1. Read the issue title and body. Extract the requested length, context/subject, learning focus, and optional preferences. If the required length or context is missing or unclear, ask the user for clarification in the issue instead of guessing.
2. Read the current `context.md` before writing. Use it as the source of recorded vocabulary, collocations, phrasal verbs, and grammar. Do not assume that an item listed there is fully mastered. Prefer reinforcing relevant existing knowledge over introducing many new words.
3. Check existing JSON reading files under `data/readings/` and, where practical, recent reading-request issues to avoid repeating the same scenario, central idea, or text structure. Reuse learned language in a genuinely different context when useful; repetition for reinforcement is desirable, near-duplicate content is not.
4. Follow the JSON structure in `instructions/text/template.json`. Copy its structure into a new JSON file and populate the fields with the requested reading. Do not put the reading content into the reusable template itself.
5. Follow `instructions/text/instruction.md` for field meanings and content-writing rules. Keep the output valid JSON: use double quotes, escape characters as needed, and do not add comments or trailing commas.
6. Save the generated reading as a new file under `data/readings/`, using a short, descriptive, lowercase kebab-case filename ending in `.json`. Do not overwrite an existing reading.
7. Validate that the JSON parses and that its structure matches `instructions/text/template.json`. Ensure the requested approximate word count is met, paragraphs and sentences are represented in the right fields, and the content remains coherent and natural.
8. In the issue, report the created file path with a link and briefly state the chosen topic and how it reinforces the user's recorded knowledge. Do not claim validation or repository changes unless they actually succeeded.
9. Do not create a separate recent-knowledge database, update `context.md` manually, or add extra tracking systems for reading history. The existing context and repository contents are the sources of truth.

## Requests labelled `request-essay`

Follow `instructions/essay/instruction.md` and `instructions/essay/template.json`. Preserve the submitted IELTS Writing Task 2 prompt exactly, write a complete, original model essay in natural British English targeting high-band quality, include concise writing notes and explanations of useful language, validate the JSON and actual word count, and save a new file under `data/essays/`. Check existing essay JSONs to avoid duplicate prompts. Comment with the file link and actual word count; close only after successful creation and validation. Never promise or assert an official Band 9 score.

## Requests labelled `request-letter`

Follow `instructions/letter/instruction.md` and `instructions/letter/template.json`. Preserve the submitted IELTS General Training Writing Task 1 prompt exactly, write a complete model letter in natural British English with an appropriate register, include concise writing notes and explanations of useful language, validate the JSON and actual word count, and save a new file under `data/letters/`. Check existing letter JSONs to avoid duplicate prompts. Comment with the file link, actual word count, and selected tone; close only after successful creation and validation. Never promise or assert an official Band 9 score.

## Requests labelled `request-monologue`

When an issue in `ephpicman/EnglishJourney` has the `request-monologue` label, create one monologue JSON entry.

1. Read the issue title and body. Extract the requested topic and selected context. The context must be one of:
   - `ielts-listening-part-2` — everyday life and social situations.
   - `ielts-listening-part-4` — academic or educational subjects.
   - `professional` — professional communication specifically related to PHP programming, web development, software engineering, or the wider IT field.
2. If the topic or context is missing, invalid, or ambiguous, ask for clarification in the issue rather than guessing. For `professional`, do not generate generic business content unrelated to PHP, web development, software engineering, or IT.
3. Read `context.md` and `instructions/monologue/instruction.md`, then follow `instructions/monologue/template.json` exactly. Check existing JSON files in `data/monologues/` to avoid near-duplicate topics and speeches.
4. Write one coherent, natural spoken monologue by a single speaker, split into sentence-level items. Match vocabulary, detail, and situation to the selected context. For the professional context, use technically credible PHP/web/IT content and do not invent technical claims.
5. Set `type` to `monologue`. Include the selected context value as a tag and add useful topic tags. Fill `context.situation`, `context.purpose`, `context.audience`, `speaker.name`, `sentences`, and relevant notes. Add UK pronunciation aids only when reliable.
6. Save the entry as a new, descriptive lowercase kebab-case JSON filename under `data/monologues/`. Do not overwrite an existing entry. Validate JSON syntax and required structure before committing.
7. Comment on the issue with the created file link and a short description of the monologue. Close the issue only after the file has actually been created and validated. Never claim a change or validation that did not happen.

## General rules

- Process only the request type identified by the matching label. An issue with another label does not trigger these instructions.
- If an essential part of a prompt is missing, ask for clarification instead of inventing it.
- Do not claim a file was created, validated, or committed unless the operation actually succeeded.
- Do not add quizzes or unrelated tracking systems unless explicitly requested.
- Keep learning notes concise and useful; the main deliverable is the requested model answer.
