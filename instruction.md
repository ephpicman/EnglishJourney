# GitHub Issue Processing Instructions

## Trigger

When inspecting issues in the `ephpicman/EnglishJourney` repository, process an issue as an entry-generation request only if its labels include the exact label:

`request-adding-entries`

Do not rely on conversation history to identify the request type. Read the issue's current labels and body. If the required label is absent, do not apply this workflow unless the user explicitly instructs you to.

## Extract the requested phrases

1. Read the issue body and extract the phrases listed in its **Phrases** field/section. In GitHub issue forms, this is the textarea supplied by the requester.
2. Treat each non-empty line in that field as a separate input phrase. Ignore surrounding blank lines and the form's instructional placeholder text.
3. Preserve each phrase exactly as submitted, including spelling, capitalisation, spaces, punctuation, and word order. Do not silently correct, normalise, or rewrite it.
4. Use optional context from the issue only to resolve the intended meaning. Do not treat explanatory text outside the phrases field as an additional phrase.
5. If the phrases cannot be reliably distinguished from instructions or context, ask for clarification rather than guessing.

## Classify every phrase independently

For each extracted phrase, determine which of these entry types are genuinely applicable:

- **Idiom** — `instructions/idiom/instruction.md`
- **Collocation** — `instructions/collocation/instruction.md`
- **Word** — `instructions/word/instruction.md`
- **Phrasal verb** — `instructions/phrasal_verb/instruction.md`

Do not ask the requester to choose a type. Make the linguistic classification yourself based on established usage, not just the number of words.

A phrase may belong to more than one type. Evaluate all four types independently. If a phrase genuinely qualifies as multiple types, create a separate JSON file for every applicable type, in that type's designated directory, using that type's own instruction and template. For example, a phrasal verb may also function in an established idiomatic sense; if both classifications are justified, create both files. Do not force a phrase into a category that is not linguistically supported, and do not omit a valid category merely because another category already applies.

If a phrase does not defensibly fit any of these four types, do not misclassify it. Explain the issue and ask the user how they want it handled.

## Read the relevant instructions and templates

Before creating any data file for a type:

1. Read that type's current `instruction.md`.
2. Read that type's current `template.json`.
3. Follow the type-specific instructions and preserve the template's exact schema.
4. Do not rely on remembered instructions or copy a schema from another type.

## Create and save the JSON files

Follow the selected type's instruction for its exact output path, filename, content, research, and validation. The expected data directories are:

- Idioms: `data/idioms/<phrase>.json`
- Collocations: `data/collocations/<phrase>.json`
- Words: `data/words/<phrase>.json`
- Phrasal verbs: `data/phrasal_verbs/<phrase>.json`

The type-specific instruction is authoritative if any detail differs from this overview. Create every applicable file directly in the repository; do not merely print JSON in the issue or chat. Never overwrite an existing file without first checking its contents and resolving the conflict safely.

## Validate and report

Before finishing:

- Confirm every non-empty requested phrase was considered.
- Confirm all defensible types were evaluated independently and every applicable type has its own file.
- Validate each JSON file and verify its exact schema against the matching template.
- Report the phrases processed, classifications made, and repository paths created. Mention any phrase that needs clarification or could not be processed.
