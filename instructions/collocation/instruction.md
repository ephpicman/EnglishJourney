# Collocation JSON Generation Instructions

## Your task
When the user provides a collocation phrase, create one complete, accurate JSON data file for that phrase. The user will provide only the phrase; do not ask them to fill in fields.

## Output location and filename
- Save the file at `data/collocations/<phrase>.json`.
- Use the exact phrase supplied by the user as the filename stem, preserving its spelling, capitalisation, spaces, punctuation, and word order. Do not lowercase it, slugify it, replace spaces, normalise punctuation, or otherwise alter it.
- Do not change the phrase itself in the JSON's `phrase` value either.
- Create the necessary parent directory if it does not already exist.

## Mandatory schema rules
Use `instructions/collocation/template.json` as the authoritative schema.
- Preserve the exact top-level keys, nested keys, object structure, and value types in the template.
- Do not add, remove, rename, or repurpose any field.
- Do not replace an object with an array or an array with an object.
- Arrays may contain the appropriate number of evidence-based entries, including multiple patterns or meanings when genuinely needed. Keep every entry consistent with the template's structure.
- Return valid JSON only in the data file: double-quoted JSON strings and keys, no comments, no trailing commas, and no Markdown fences.

## Research and accuracy
- Use your linguistic knowledge to fill every field meaningfully and accurately; do not leave template placeholder strings or empty placeholder objects when information can reasonably be supplied.
- Treat the supplied phrase as the target collocation. Preserve it exactly in `phrase`; describe any grammatical variants in the relevant pattern or example fields rather than rewriting the target phrase.
- Give the standard British English pronunciation in `pronunciation.uk` using a clear IPA transcription. If pronunciation is not meaningfully applicable or cannot be established confidently, use an empty string rather than inventing one.
- Use concise, useful tags.
- In `patterns`, include the common grammatical structure(s) in a clear notation (for example, `verb + noun` or `adjective + preposition + noun`). Add separate entries only for established patterns.
- For each pattern, explain its distinct meaning or use in `meanings`. Use natural, idiomatic British English examples that demonstrate the collocation in context. Examples must be original, grammatically correct, and representative.
- Include synonyms and antonyms only when they are genuinely relevant to the specific meaning and grammatical use. Do not invent exact equivalents; an empty array is preferable to misleading entries.
- Use `notes` for useful register, grammar, usage, or regional distinctions, not generic filler. Use related expressions in `related` only when they are genuinely useful.
- Distinguish a true collocation from a merely possible word combination. Prefer established, natural combinations and avoid claiming that every possible combination is a collocation.
- Do not make unsupported claims about frequency, formality, or regional usage.

## Final validation
Before saving, check that the JSON parses, every key and type matches the template exactly, the phrase is unchanged, the British English usage is natural, and all examples support the stated meaning. Save the file directly to the repository; do not merely print the JSON in chat.