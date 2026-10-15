# Grammar Entry Instructions

## Purpose

Create accurate, comprehensive, and well-structured grammar entries for advanced English learning, with the depth and precision required for C2-level proficiency and high-band IELTS performance.

Prioritise grammatical accuracy, clear explanations, natural contemporary British English, meaningful examples, and reliable British English IPA transcriptions. Do not add complexity merely to make an entry appear advanced.

Each entry must teach a specific grammar point thoroughly without combining unrelated topics.

## Entry Structure

Each entry documents one specific, coherent grammar point, such as the present perfect, articles, inversion, or the first conditional. Avoid combining several unrelated grammar points into one entry.

The entry must use exactly the following fields:

- `type`: Always the exact string `grammar`.
- `title`: A concise, recognisable name for the grammar point.
- `tags`: Useful semantic or teaching-topic tags. Use `[]` if none are justified.
- `explanation`: An ordered array of explanatory sections.
- `forms`: An array describing the grammatical forms and structures.
- `usage`: An array describing the meanings, functions, and contexts in which the structure is used.
- `common_mistakes`: An array of realistic learner errors and their corrections.
- `notes`: Entry-level notes that apply to the grammar point as a whole.

Do not add, rename, or remove any fields from this required structure. Do not add a `related` field, a `level` field, or any CEFR, course-level, or learner-stage metadata.

Preserve the exact field names, nesting, data types, and overall structure defined by `instructions/grammar/template.json`. Every object must follow its corresponding template structure.

## Explanation

Use `explanation` as an ordered array of objects. Each object must contain:

- `heading`: A short, informative heading for the subsection.
- `text`: A clear, accurate explanation of the relevant grammatical rule, meaning, or distinction.
- `notes`: Concise supplementary notes, or `[]` when none are needed.

Explain grammatical principles directly and precisely. Distinguish grammatical form from meaning and use.

Where a grammar point involves important contrasts, explain them explicitly. Clarify differences in meaning, emphasis, time reference, register, or grammatical restrictions where relevant.

Include exceptions, limitations, and special cases when they materially affect a learner's understanding or ability to use the structure accurately.

Order the sections logically, moving from foundational principles to important distinctions and more advanced details where appropriate.

Avoid vague generalisations, misleading simplifications, unnecessary terminology, and explanations that merely repeat the examples.

## Forms

Use `forms` to describe how the grammar is constructed. Each object must contain:

- `label`: A clear label, such as affirmative, negative, question, short answer, or a specific grammatical form.
- `structure`: A readable formula or pattern using terms such as subject, auxiliary, base form, past participle, and complement where helpful.
- `examples`: Examples illustrating that exact form.
- `notes`: Concise information about word order, contractions, spelling changes, agreement, or other form-related details, or `[]` when none are needed.

Include only forms relevant to the grammar point. Do not create empty or redundant form objects merely to fill out the template.

Represent structures consistently and make formulas easy to understand. Explain essential notation when it might otherwise be ambiguous.

Include affirmative, negative, interrogative, short-answer, or other patterns only when relevant to the topic. Do not assume every grammar entry requires every form.

Where appropriate, distinguish between grammatical patterns that look similar but differ in construction or restrictions.

Keep this section focused on construction. Explanations of why, when, or with what meaning a form is used belong primarily in `usage`.

## Usage

Use `usage` to explain distinct meanings, functions, or contexts. Each object must contain:

- `description`: A precise explanation of one use or function.
- `examples`: Examples demonstrating that use in context.
- `notes`: Concise information about restrictions, register, contrasts, or common contextual patterns, or `[]` when none are needed.

Give each usage item a distinct educational purpose. Explain what the structure communicates, when it is appropriate, and how its interpretation may change according to context.

Where useful, clarify differences between similar grammatical structures, including distinctions involving time reference, aspect, modality, emphasis, formality, and pragmatic meaning.

Do not create multiple usage items that express essentially the same point. Do not confuse a grammatical form with a grammatical function.

A single form may serve several purposes, and a single purpose may be expressed through several forms. Organise the information according to this distinction rather than forcing a one-to-one relationship between `forms` and `usage`.

## Examples and British English Pronunciation

Every example object must contain:

- `text`: One complete, natural English sentence.
- `pronunciation`: An object containing `uk`.
- `pronunciation.uk`: The British English IPA transcription of that exact sentence.
- `notes`: Concise notes relevant to that particular example, or `[]` when none are needed.

Every example must have its own pronunciation transcription. Never group several sentences in one example object or provide a single transcription for multiple sentences.

### Example quality

Examples must:

- Demonstrate the intended grammar point clearly.
- Use natural, contemporary British English spelling, grammar, and collocations.
- Be grammatically correct and appropriate to the intended meaning.
- Avoid unnecessary complexity, ambiguity, and unnatural constructions.
- Include meaningful variation where useful, such as affirmative, negative, and interrogative sentences.
- Demonstrate important contrasts and restrictions where appropriate.
- Support advanced proficiency and high-band IELTS performance without introducing irrelevant difficulty.
- Avoid presenting rare, disputed, or highly context-dependent constructions as ordinary rules.

Use context when necessary to make the intended interpretation clear. Do not rely on isolated sentences when the grammatical distinction cannot be demonstrated accurately without context.

### British English IPA policy

Use accurate, consistent, contemporary British English IPA.

1. Use your linguistic knowledge to produce the transcription when you are confident it is accurate.
2. When uncertain about a word's British pronunciation, consult a reliable pronunciation reference, preferably Oxford Learner's Dictionaries, Cambridge Dictionary, or another authoritative source.
3. Transcribe the complete sentence, not merely the target word or grammatical structure.
4. Reflect natural spoken British English, including weak forms, connected speech, and other relevant pronunciation features where appropriate.
5. Ensure that the transcription corresponds to the exact wording of the example.
6. Maintain consistent transcription conventions throughout the entry.
7. Do not invent pronunciations, guess when uncertain, or substitute American pronunciation for British pronunciation.
8. If a word has multiple British pronunciations, select the pronunciation appropriate to the intended meaning and context. Be consistent with the chosen reference and transcription conventions.

Use example-level `notes` for brief observations about a useful contrast, an important contextual detail, or a relevant pronunciation feature. Do not place the sentence or its IPA transcription only in `notes`.

## Common Mistakes

Each `common_mistakes` object must contain:

- `incorrect`: The incorrect form or sentence.
- `correct`: The corrected form or sentence.
- `explanation`: A concise explanation of the error and the reason for the correction.

Include realistic, relevant errors that learners may make when using the target structure. Prioritise errors that reveal an important grammatical distinction or a persistent misunderstanding.

Do not invent errors merely to populate the array. Do not label a construction incorrect when it is acceptable in a particular context, dialect, or register without explaining the relevant distinction.

Where useful, address errors involving word order, auxiliary verbs, tense and aspect, agreement, articles, prepositions, negation, question formation, or confusion between similar structures.

Use an empty array when no useful mistakes are established.

## Notes

Use the entry-level `notes` array only for concise information that applies to the grammar point as a whole and does not belong more naturally in `explanation`, `forms`, `usage`, or `common_mistakes`.

Do not use entry-level notes as a miscellaneous section for material that has not been organised properly.

Use `[]` when no additional entry-level notes are necessary.

## Quality Requirements

Before finalising an entry, verify the following:

1. **Scope:** The entry covers one coherent grammar point.
2. **Accuracy:** The grammatical rules, distinctions, exceptions, and examples are accurate.
3. **Clarity:** Explanations are precise, logically ordered, and understandable without being oversimplified.
4. **Advanced proficiency:** The content provides the depth needed for C2-level English proficiency and high-band IELTS performance where relevant.
5. **Natural English:** Every example uses natural contemporary British English.
6. **IPA accuracy:** Every example has its own accurate British English IPA transcription matching the exact sentence.
7. **Structure:** All fields, nesting, and data types match the grammar template exactly.
8. **No additional fields:** Do not introduce `related`, `level`, or any other field not included in the required structure.
9. **No duplication:** Avoid repeating the same explanation across `explanation`, `forms`, `usage`, and `notes`.
10. **Evidence:** Consult reliable grammatical or pronunciation references whenever uncertainty could affect accuracy.
11. **Relevance:** Every form, usage item, mistake, tag, and note must serve a clear educational purpose.
12. **Completeness:** Cover the important rules and distinctions necessary to understand and use the target grammar point accurately.
13. **No placeholders:** Do not leave placeholder text, empty strings, or unfinished content in a completed entry.
14. **Appropriate empty arrays:** Empty arrays are acceptable when there is genuinely nothing relevant to record.

## Final Output

Return a valid JSON object that follows the grammar template exactly.

Do not add Markdown fences, introductory prose, explanations outside the JSON, or extra metadata when producing a grammar entry.

Do not change field names, introduce additional fields, change data types, or alter the required object structures.

Prioritise correctness and educational value over the number of examples or the length of the entry. Every included element must be accurate, relevant, and useful.
