# IELTS General Training Writing Task 1 Letter Instructions

Use this file and `instructions/letter/template.json` to create a model letter from an issue labelled `request-letter`.

## Task handling

1. Read the complete issue title and body. Extract the exact prompt, situation, every bullet point, and optional preferences. If an essential part is missing or unclear, ask for clarification in the issue rather than inventing it.
2. Read the current root `context.md` and relevant repository learning entries when useful. This is a record of study material, not proof of mastery. Use relevant language naturally and do not force unrelated expressions into the letter.
3. Preserve the supplied prompt exactly in `task.prompt`. Identify the required tone from the relationship and purpose: formal, semi-formal, or informal. Use the user's selected tone as guidance, but flag it in notes if it conflicts with the situation.
4. Write a complete, original letter in natural, idiomatic British English, aiming for the control and task fulfilment associated with IELTS Writing Band 9. Do not claim an official score or guarantee a Band 9 result.
5. Address every bullet point clearly and sufficiently. Make the purpose clear early, develop each point with appropriate detail, and maintain consistent tone throughout. Avoid generic filler and memorised phrases that do not fit the context.
6. Write at least 150 words in the letter body. Aim for roughly 170–210 words unless the prompt or user preference calls for another length. Count the salutation and sign-off only if your counting convention includes them; state and apply one consistent convention, and set `response.word_count` to the actual count of the letter text.
7. Use a suitable salutation and sign-off for the chosen tone. Store them separately in `response.salutation` and `response.sign_off`. Store each body paragraph as a string in `response.paragraphs`; do not insert explanatory headings into the letter.
8. Add concise `writing_notes` explaining tone, organisation, and how the response covers the bullet points. Add `key_language` only for useful expressions actually used in the letter, with a short explanation of meaning or function.
9. Follow `instructions/letter/template.json` exactly. Keep JSON valid, use double quotes, and do not add comments, trailing commas, or unapproved fields.
10. Save one new file in `data/letters/` using a descriptive lowercase kebab-case filename ending in `.json`. Never overwrite an existing file.
11. Validate the JSON, required fields, minimum word count, tone, and coverage of every bullet point. Check existing letter JSONs for duplicate prompts before creating a new file.
12. Comment on the issue with the created file link, actual word count, selected tone, and a brief summary of the writing notes. Close the issue as completed only after the file is created and validated. If clarification or repair is needed, leave it open.

## Quality standard

The aim is a credible high-band model letter, not a guaranteed score. The relationship, purpose, register, and task coverage matter more than fancy vocabulary.
