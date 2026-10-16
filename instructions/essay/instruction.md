# IELTS Writing Task 2 Essay Instructions

Use this file and `instructions/essay/template.json` to create a model answer from an issue labelled `request-essay`.

## Task handling

1. Read the complete issue title and body. Extract the exact question, all instructions, any bullet points, and optional preferences. If the prompt is incomplete or ambiguous in a way that affects the answer, ask for clarification in the issue instead of inventing missing instructions.
2. Read the current root `context.md` and relevant repository learning entries when useful. Treat them as a record of available study material, not proof of mastery. Use relevant language naturally; do not force unrelated vocabulary into an IELTS answer.
3. Preserve the supplied prompt exactly in `task.prompt`. Classify the question type accurately; if uncertain, use `Other` and explain in notes rather than guessing.
4. Write a complete, original model answer in fluent, idiomatic British English, aiming for the precision, coherence, task response, lexical control, and grammatical range associated with IELTS Writing Band 9. Do not claim an official score or guarantee that a response would receive Band 9.
5. Address every part of the question directly. Develop a clear position where required, support claims with relevant reasoning or examples, and maintain logical progression. Avoid memorised, generic introductions, unsupported sweeping claims, artificial complexity, and unnecessarily obscure vocabulary.
6. Write at least 250 words in the essay response. Aim for roughly 270–320 words unless the prompt or user preference calls for another length. Count the answer paragraphs only, not notes or the copied question. Set `response.word_count` to the actual count.
7. Use a coherent introduction, developed body paragraphs, and a conclusion when appropriate. Store each paragraph as one string in `response.paragraphs`; do not put headings such as “Introduction” inside the essay unless the prompt requires them.
8. Add concise, useful `writing_notes` explaining the most important choices: task interpretation, argument structure, development, cohesion, or register. Add `key_language` entries only for genuinely useful expressions from the answer, explaining their meaning or function in context. Avoid turning the notes into an exhaustive vocabulary list.
9. Follow the JSON shape in `instructions/essay/template.json`. Keep JSON valid, use double quotes, and do not add comments, trailing commas, or unapproved fields.
10. Save one new file in `data/essays/` with a descriptive lowercase kebab-case filename ending in `.json`. Never overwrite an existing file.
11. Validate the JSON, required fields, word count, and that the answer responds to every task component. Check existing essay JSONs for duplicate prompts before creating a new file.
12. Comment on the issue with the created file link, actual word count, and a brief summary of the answer's approach and key learning notes. Close the issue as completed only after the file is created and validated. If clarification or repair is needed, leave it open.

## Quality standard

The aim is a credible high-band model answer, not a promise of a score. Correctness, naturalness, precise task fulfilment, and developed ideas take priority over ornate vocabulary.
