# Issue Interaction Instructions

## Requests labelled `request-reading`

When an issue in `ephpicman/EnglishJourney` has the `request-reading` label, treat it as a request to generate one reading text and save it as a JSON file in the repository.

1. Read the issue title and body. Extract the requested length, context/subject, learning focus, and optional preferences. If the required length or context is missing or unclear, ask the user for clarification in the issue instead of guessing.
2. Read the current `context.md` before writing. Use it as the source of recorded vocabulary, collocations, phrasal verbs, and grammar. Do not assume that an item listed there is fully mastered. Prefer reinforcing relevant existing knowledge over introducing many new words.
3. Check existing JSON reading files and, where practical, recent reading-request issues to avoid repeating the same scenario, central idea, or text structure. Reuse learned language in a genuinely different context when useful; repetition for reinforcement is desirable, near-duplicate content is not.
4. Follow the JSON structure in `instructions/text/template.json`. Copy its structure into a new JSON file and populate the fields with the requested reading. Do not put the reading content into the reusable template itself.
5. Follow `instructions/text/instruction.md` for field meanings and content-writing rules. Keep the output valid JSON: use double quotes, escape characters as needed, and do not add comments or trailing commas.
6. Save the generated reading as a new file under `texts/`, using a short, descriptive, lowercase kebab-case filename ending in `.json`. Do not overwrite an existing reading.
7. Validate that the JSON parses and that its structure matches `instructions/text/template.json`. Ensure the requested approximate word count is met, paragraphs and sentences are represented in the right fields, and the content remains coherent and natural.
8. In the issue, report the created file path with a link and briefly state the chosen topic and how it reinforces the user's recorded knowledge. Do not claim validation or repository changes unless they actually succeeded.
9. Do not create a separate recent-knowledge database, update `context.md` manually, or add extra tracking systems for reading history. The existing context and repository contents are the sources of truth.

## General rules

- An issue with another label does not trigger this workflow.
- If the user explicitly asks for a different output format, follow that request rather than silently forcing JSON.
- Do not add quiz questions unless the issue asks for them.
- Keep the reading focused on language reinforcement, not on producing content for its own sake.
