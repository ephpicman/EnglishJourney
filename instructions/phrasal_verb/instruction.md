# Phrasal Verb JSON Generation Instructions

## Your task
When the user provides a phrasal verb, create one complete, accurate JSON data file for that expression. The user will provide only the phrase; do not ask them to fill in fields.

## Output location and filename
- Save the file at `data/phrasal_verbs/<phrase>.json`.
- Use the exact phrase supplied by the user as the filename stem, preserving its spelling, capitalisation, spaces, punctuation, and word order. Do not lowercase it, slugify it, replace spaces, normalise punctuation, or otherwise alter it.
- Preserve the supplied expression exactly in the JSON's `phrase` value.
- Create the necessary parent directory if it does not already exist.

## Mandatory schema rules
Use `instructions/phrasal_verb/template.json` as the authoritative schema.
- Preserve the exact top-level keys, nested keys, object structure, and value types in the template.
- Do not add, remove, rename, or repurpose any field.
- Do not replace an object with an array or an array with an object.
- Arrays may contain multiple well-supported meanings or patterns where necessary, but every entry must follow the template's existing structure.
- Return valid JSON only in the data file: double-quoted JSON strings and keys, no comments, no trailing commas, and no Markdown fences.

## Research and accuracy
- Fill every field meaningfully using reliable linguistic knowledge. Do not leave placeholder strings or empty placeholder objects when the information can reasonably be supplied.
- Keep the exact input in `phrase`. Do not silently correct, reword, or replace it. If it is not actually a phrasal verb, do not misclassify it: use the closest defensible linguistic analysis in the existing schema and explain the distinction in `notes`, without changing the schema.
- Give standard British English pronunciation in `pronunciation.uk` using clear IPA. If you cannot establish it confidently, use an empty string rather than inventing one.
- Add concise tags that accurately describe the expression.
- In `meanings`, include the established, useful meanings of the supplied phrasal verb, not every rare or obsolete sense. Keep distinct meanings separate.
- For each meaning, include common grammatical patterns in `patterns`. Make transitivity, separability, and required complements clear in the `structure` and/or `notes` fields. For example, distinguish a separable transitive use from an inseparable use when relevant; do not imply that a pronoun can follow the particle if the construction requires the pronoun before it.
- Provide natural, original British English examples that clearly demonstrate the relevant meaning and pattern. Ensure the examples actually use the target phrasal verb with the stated grammar.
- Include synonyms and antonyms only when they fit that particular sense and grammatical construction. Avoid misleading one-word equivalents.
- Use notes for important register, grammar, separability, transitivity, or regional distinctions. Populate `related` only with genuinely related expressions.
- Do not invent meanings, pronunciation, grammar rules, or claims about frequency.

## Final validation
Before saving, validate the JSON syntax and exact schema, confirm the supplied phrase is unchanged, verify that each meaning and pattern is established, and check that the examples demonstrate correct British English usage. Save the file directly to the repository; do not merely print the JSON in chat.