# Word JSON Generation Instructions

## Your task
When the user provides a word, create one complete, accurate JSON data file for that word. The user will provide only the word; do not ask them to fill in fields.

## Output location and filename
- Save the file at `data/words/<phrase>.json`.
- Use the exact text supplied by the user as the filename stem, preserving spelling, capitalisation, spaces, punctuation, and word order. Do not lowercase it, slugify it, replace spaces, normalise punctuation, or otherwise alter it.
- Preserve the supplied text exactly in the JSON's `word` value.
- Create the necessary parent directory if it does not already exist.

## Mandatory schema rules
Use `instructions/word/template.json` as the authoritative schema.
- Preserve the exact top-level keys, nested keys, object structure, and value types in the template.
- Do not add, remove, rename, or repurpose any field.
- Do not replace an object with an array or an array with an object.
- Arrays may contain multiple parts of speech and meanings as appropriate, but every entry must follow the existing template structure.
- The `grammar` fields must remain JSON objects. Populate them with relevant grammatical information using only the existing field; do not introduce new schema keys elsewhere. If a grammar object has no applicable information, use an empty object.
- Return valid JSON only in the data file: double-quoted JSON strings and keys, no comments, no trailing commas, and no Markdown fences.

## Research and accuracy
- Fill fields with concise, useful, well-supported information. Do not leave template placeholder strings or empty placeholder objects when information can reasonably be supplied.
- Keep the exact input in `word`; do not silently correct or replace it. If the input is a multiword lexical item, inflected form, spelling variant, or ambiguous form, preserve it and describe it accurately within the existing schema.
- Treat **Word** as the broad lexical-entry type, not as an instruction to create a Word file for every expression. In the phrase-entry workflow, when an expression is also a phrasal verb, create a Word entry only if it has an independently useful lexical sense or use beyond the sense(s) represented in the Phrasal Verb entry. Do not duplicate the same phrasal-verb sense in both files.
- A distinct prepositional-verb use may be assessed as a Word entry when it adds a separate, useful sense to an expression that also has a phrasal-verb use. There is no separate Prepositional Verb file type; represent the distinct use and its accurate grammatical analysis within the existing Word schema. Do not force a prepositional verb into the phrasal-verb category if the linguistic analysis does not support it.
- Give standard British English pronunciation in `pronunciation.uk` using IPA. For a word with materially different pronunciations by part of speech or meaning, use the most appropriate standard pronunciation and explain a meaningful distinction in existing notes if needed. Never invent a transcription.
- Use concise tags.
- Include the relevant common parts of speech in `parts_of_speech`, separating them where the grammar or meaning differs. Do not list a part of speech that the word does not have.
- Populate each `grammar` object only with accurate, relevant grammatical details for that level, such as countability, verb forms, transitivity, comparative/superlative forms, or irregular inflection, represented as ordinary JSON key-value data. Do not force irrelevant details into a field.
- Include the main contemporary meanings useful to an English learner. Keep distinct senses separate; avoid obscure, obsolete, or highly specialised senses unless they are important to understanding the word.
- For every meaning, provide natural, original British English examples that clearly demonstrate that exact sense. Ensure examples are grammatically correct and contextually unambiguous.
- Include synonyms and antonyms only where they fit the specific sense and part of speech. Include natural collocations and common usage patterns only when they are established and relevant.
- Use notes to explain important distinctions, register, common confusion, irregular forms, or usage restrictions. Use `related` for genuinely useful related words or expressions.
- Do not fabricate definitions, grammar, pronunciation, collocations, synonyms, antonyms, or etymological/frequency claims.

## Final validation
Before saving, verify JSON syntax, exact schema conformity, unchanged input spelling, correct part-of-speech classification, British English pronunciation, and the accuracy of each definition and example. Save the file directly to the repository; do not merely print the JSON in chat.