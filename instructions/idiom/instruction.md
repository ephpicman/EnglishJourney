# Idiom JSON Generation Instructions

## Your task
When the user provides an idiom, create one complete, accurate JSON data file for that expression. The user will provide only the phrase; do not ask them to fill in fields.

## Output location and filename
- Save the file at `data/idioms/<phrase>.json`.
- Use the exact phrase supplied by the user as the filename stem, preserving its spelling, capitalisation, spaces, punctuation, and word order. Do not lowercase it, slugify it, replace spaces, normalise punctuation, or otherwise alter it.
- Preserve the supplied expression exactly in the JSON's `phrase` value.
- Create the necessary parent directory if it does not already exist.

## Mandatory schema rules
Use `instructions/idiom/template.json` as the authoritative schema.
- Preserve the exact top-level keys, nested keys, object structure, and value types in the template.
- Do not add, remove, rename, or repurpose any field.
- Do not replace an object with an array or an array with an object.
- Arrays may contain multiple established meanings or patterns when genuinely necessary, but every entry must follow the template's existing structure.
- Return valid JSON only in the data file: double-quoted JSON strings and keys, no comments, no trailing commas, and no Markdown fences.

## Research and accuracy
- Fill every field meaningfully using reliable linguistic knowledge; do not leave template placeholder strings or empty placeholder objects when information can reasonably be supplied.
- Keep the exact input in `phrase`. Do not silently correct, reword, or replace it. If the input is not conventionally an idiom, do not falsely label it as one; use the existing schema for the closest defensible explanation and clarify the distinction in `notes`.
- Give standard British English pronunciation in `pronunciation.uk` using clear IPA. If you cannot establish it confidently, use an empty string rather than inventing one.
- Use concise tags.
- In `meanings`, explain the established figurative meaning(s) clearly and distinguish literal interpretation from idiomatic meaning when that distinction helps learners. Do not invent additional senses.
- In `patterns`, show the idiom's usual grammatical form and any common, established variations. Explain whether parts are fixed or variable where relevant; do not present nonstandard substitutions as accepted variants.
- Provide natural, original British English examples that clearly demonstrate the idiomatic meaning. Examples should make the intended meaning understandable from context.
- Include synonyms and antonyms only if they genuinely match the idiomatic sense. Do not treat a loose thematic association as a synonym or antonym.
- Use notes for register, tone, context, cultural background, grammar, or usage cautions when these are relevant and well established. Populate `related` only with useful, genuinely related expressions.
- Do not make unsupported claims about origin, history, frequency, or regional usage. If an idiom's origin is uncertain, do not present a folk etymology as fact.

## Final validation
Before saving, validate JSON syntax and exact schema conformity, confirm the input phrase is unchanged, and check that meanings, patterns, and examples reflect established usage in British English. Save the file directly to the repository; do not merely print the JSON in chat.