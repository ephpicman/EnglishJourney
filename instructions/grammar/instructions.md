# Grammar Entry Instructions

Create accurate, comprehensive grammar entries for C2-level proficiency and high-band IELTS performance. Prioritise grammatical accuracy, clear explanations, natural contemporary British English, meaningful examples, and reliable British English IPA. Each entry must cover one coherent grammar point.

## Exact structure

Use exactly these fields: `type`, `title`, `tags`, `explanation`, `forms`, `usage`, `common_mistakes`, and `notes`. Do not add, rename, or remove fields from this structure. Do not add `related`, `level`, CEFR, course-level, or learner-stage metadata. Preserve the exact field names, nesting, data types, and object structures defined in `instructions/grammar/template.json`.

## Explanation

`explanation` is an ordered array. Every object contains `heading`, `text`, and `notes`. Explain rules accurately and directly. Distinguish form from meaning and use. Explain important contrasts, restrictions, exceptions, and special cases where relevant. Order sections logically and avoid vague generalisations or repeated explanations.

## Forms

Each `forms` object contains `label`, `structure`, `examples`, and `notes`. Describe how the grammar is constructed using clear formulas and consistent terminology. Include only relevant forms; do not add empty or redundant objects. Keep construction separate from meaning and context of use.

## Usage

Each `usage` object contains `description`, `examples`, and `notes`. Explain one distinct meaning, function, or context per item. Clarify relevant differences involving time reference, aspect, modality, emphasis, register, and pragmatic meaning. Do not duplicate items or confuse a form with a function.

## Examples and British IPA

Each example must be a complete, natural English sentence in `text`, with its own `pronunciation.uk` and a `notes` array. Never group multiple sentences in one example object or use one transcription for several sentences. Use natural contemporary British English spelling, grammar, and collocations. Examples should clearly demonstrate the target point, provide useful variation, and support advanced proficiency without unnecessary complexity.

Use your linguistic knowledge for IPA when confident. If uncertain about a British pronunciation, consult Oxford Learner's Dictionaries, Cambridge Dictionary, or another reliable source. Transcribe the complete sentence as naturally spoken in contemporary British English, including weak forms and connected speech where appropriate. Ensure the transcription matches the exact wording. Be consistent, do not guess uncertain pronunciations, and do not substitute American pronunciation. Use example-level `notes` only for concise context, contrasts, or pronunciation observations.

## Common mistakes

Each `common_mistakes` object contains `incorrect`, `correct`, and `explanation`. Include only realistic, relevant errors. Explain why the correction is needed. Do not invent errors to fill the array or label contextually acceptable forms as incorrect without explaining the distinction. Use `[]` when no useful mistakes are established.

## Entry-level notes

Use `notes` only for concise information that applies to the entire grammar point and does not belong more naturally in `explanation`, `forms`, `usage`, or `common_mistakes`. Use `[]` when unnecessary.

## Quality checks

Before finalising, check scope, grammatical accuracy, clarity, advanced-level relevance, natural British English, IPA accuracy, exact template compliance, absence of additional fields, lack of duplication, use of reliable references when uncertain, educational relevance, sufficient coverage, and absence of placeholders. Empty arrays are acceptable when nothing relevant needs to be recorded.

## Final output

Return only a valid JSON object matching the template exactly. Do not add Markdown fences, introductory prose, explanations outside the JSON, or metadata. Do not change field names, add fields, change data types, or alter required object structures. Prioritise correctness and educational value over quantity or length.