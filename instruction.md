# GitHub Issue Processing Instructions

## Trigger

When inspecting issues in the `ephpicman/EnglishJourney` repository, determine the workflow from the issue's current labels:

- If the labels include the exact label `request-adding-entries`, use the phrase-entry workflow described below.
- If the labels include the exact label `request-grammar-entry`, use the grammar-entry workflow described below.
- Do not rely on conversation history to identify the request type. Read the issue's current labels and body.
- If neither required label is present, do not apply either workflow unless the user explicitly instructs you to.
- If an issue has both labels, do not guess which workflow takes priority. Ask the user to clarify.

## Grammar-entry requests

Process an issue as a grammar-entry request only when its current labels include the exact label `request-grammar-entry`.

### Read the request and required instructions

1. Read the issue title and full body.
2. Extract the requested grammar topic from the **Grammar Topic** section.
3. Read **Additional Instructions** and **Scope Notes**, if provided. Treat these as constraints and context for the entry, not as separate grammar topics unless the requester clearly asks for multiple entries.
4. If the topic is missing or the requested scope is materially ambiguous, ask for clarification instead of guessing.
5. Read the current `instructions/grammar/instruction.md` and `instructions/grammar/template.json` before creating the entry. Both are authoritative for the grammar entry's content, schema, examples, IPA, and quality requirements. Do not rely on remembered instructions or copy a schema from another entry type.

### Classify the grammar topic

Assign each requested grammar entry to exactly one primary category, based on its central learning objective. Use the following category names and directory aliases:

1. **Verb Tenses and Aspect** — `tenses-aspect`
2. **Modal Verbs and Modality** — `modality`
3. **Conditionals and Hypothetical Meaning** — `conditionals`
4. **Passive Voice and Causative Structures** — `passive-causative`
5. **Reported Speech and Reporting Structures** — `reported-speech`
6. **Clause Structure and Complex Sentences** — `clause-structure`
7. **Verb Patterns and Non-finite Forms** — `verb-patterns`
8. **Word Order, Inversion and Emphasis** — `word-order-emphasis`
9. **Noun Phrases and Determiners** — `nouns-determiners`
10. **Adjectives, Adverbs and Comparison** — `adjectives-adverbs`
11. **Prepositions and Prepositional Structures** — `prepositions`
12. **Questions, Negation and Responses** — `questions-negation`
13. **Coordination, Subordination and Linking** — `linking-structures`
14. **Agreement, Reference and Cohesion** — `agreement-cohesion`
15. **Advanced Grammatical Choices and Register** — `register-choices`

Apply these classification principles:

- Choose the category that best matches the entry's main teaching objective, not every category that might be tangentially relevant.
- Use exactly one primary category and save exactly one entry file for a single-topic request.
- Use category 15 only when register, stance, pragmatic effect, or the choice between grammatical alternatives is the central learning objective—not merely because the entry is advanced.
- Do not duplicate an entry across categories. If the issue clearly requests multiple distinct grammar topics, create a separate entry for each only when the request makes that scope explicit; classify each independently.
- If no category is a defensible fit, explain the issue and ask the user before creating a file.

### Create and save the grammar JSON

1. Create one valid JSON object for each clearly requested grammar topic, following `instructions/grammar/template.json` exactly and all content requirements in `instructions/grammar/instruction.md`.
2. Save the source JSON file under the matching category directory using this path pattern: `data/grammar/<category-alias>/<topic-slug>.json`. The `data/grammar/` tree contains source JSON; the root-level `grammar/` directory contains only flat, individually generated Markdown pages (no category subdirectories), and the generated grammar index is `grammar.md` in the repository root. Use the exact category aliases listed above and a concise, readable lowercase kebab-case topic slug. Check the repository first to avoid filename collisions.
3. Do not add fields beyond the grammar template, and do not overwrite an existing file without first checking its contents and resolving the conflict safely.
4. Create the JSON file in the repository; do not merely print the JSON in the issue or chat.
5. Validate the JSON syntax and verify the exact schema against the current grammar template before proceeding.

### Validate and report grammar requests

Before finishing:

- Confirm the topic and any additional instructions or scope notes were addressed.
- Confirm exactly one primary category was selected for each entry.
- Confirm the source JSON file is saved in the matching `data/grammar/<category-alias>/` directory. Do not save grammar JSON files under `grammar/`, which is generated-output-only.
- Validate JSON syntax, exact fields, nesting, and data types.
- Report the grammar topic, selected category, and repository path created. Mention any ambiguity or blocker that needs the user's input.

## Phrase-entry requests

Process an issue as a phrase-entry request only if its labels include the exact label:

`request-adding-entries`

### Extract the requested phrases

1. Read the issue body and extract the phrases listed in its **Phrases** field/section. In GitHub issue forms, this is the textarea supplied by the requester.
2. Treat each non-empty line in that field as a separate input phrase. Ignore surrounding blank lines and the form's instructional placeholder text.
3. Preserve each phrase exactly as submitted, including spelling, capitalisation, spaces, punctuation, and word order. Do not silently correct, normalise, or rewrite it.
4. Use optional context from the issue only to resolve the intended meaning. Do not treat explanatory text outside the phrases field as an additional phrase.
5. If the phrases cannot be reliably distinguished from instructions or context, ask for clarification rather than guessing.

### Classify every phrase independently

For each extracted phrase, determine which of these entry types are genuinely applicable:

- **Idiom** — `instructions/idiom/instruction.md`
- **Collocation** — `instructions/collocation/instruction.md`
- **Word** — `instructions/word/instruction.md`
- **Phrasal verb** — `instructions/phrasal_verb/instruction.md`

Do not ask the requester to choose a type. Make the linguistic classification yourself based on established usage, not just the number of words.

A phrase may belong to more than one type. Evaluate all four types independently. If a phrase genuinely qualifies as multiple types, create a separate JSON file for every applicable type, in that type's designated directory, using that type's own instruction and template. For example, a phrasal verb may also function in an established idiomatic sense; if both classifications are justified, create both files. Do not force a phrase into a category that is not linguistically supported, and do not omit a valid category merely because another category already applies.

If a phrase does not defensibly fit any of these four types, do not misclassify it. Explain the issue and ask the user how they want it handled.

### Read the relevant instructions and templates

Before creating any data file for a type:

1. Read that type's current `instruction.md`.
2. Read that type's current `template.json`.
3. Follow the type-specific instructions and preserve the template's exact schema.
4. Do not rely on remembered instructions or copy a schema from another type.

### Create and save the JSON files

Follow the selected type's instruction for its exact output path, filename, content, research, and validation. The expected data directories are:

- Idioms: `data/idioms/<phrase>.json`
- Collocations: `data/collocations/<phrase>.json`
- Words: `data/words/<phrase>.json`
- Phrasal verbs: `data/phrasal_verbs/<phrase>.json`

The type-specific instruction is authoritative if any detail differs from this overview. Create every applicable file directly in the repository; do not merely print JSON in the issue or chat. Never overwrite an existing file without first checking its contents and resolving the conflict safely.

## Validate and report phrase requests

Before finishing:

- Confirm every non-empty requested phrase was considered.
- Confirm all defensible types were evaluated independently and every applicable type has its own file.
- Validate each JSON file and verify its exact schema against the matching template.
- Report the phrases processed, classifications made, and repository paths created. Mention any phrase that needs clarification or could not be processed.

## Branch, pull request, merge, and cleanup workflow

For every issue processed through either workflow above, make all changes on a dedicated branch and merge them into the repository's default branch. Do not commit entry files directly to the default branch.

1. Read the issue number from GitHub and create a new branch named exactly `issue-{issue number}` (for example, issue #12 uses branch `issue-12`), starting from the latest default branch.
2. Check whether that branch already exists. If it exists, inspect it and its status before proceeding; never overwrite or repurpose an existing branch blindly. If it contains unmerged work or its purpose is unclear, stop and ask the user how to proceed.
3. Create and validate all JSON files for the issue on that branch. Ensure every file change for the issue is committed to the branch.
4. Open a pull request from `issue-{issue number}` into the repository's default branch. Describe the issue processed and summarise the entries/files added.
5. Merge the pull request only after checking the proposed changes and confirming the JSON files and paths are correct. Use an available merge option that automatically deletes the head branch after merging whenever such an option is offered.
6. If the merge operation does not offer automatic branch deletion, attempt to delete `issue-{issue number}` after the pull request has successfully merged, using an available GitHub branch/ref deletion action. Never delete the branch before a confirmed successful merge.
7. If branch deletion is unavailable or fails, do not claim it was deleted. Report that cleanup remains outstanding and provide the branch name.
8. Verify the pull request is merged and, where possible, verify that the issue branch has been deleted. In the final report, include the branch name, pull request link, merge status, and branch-cleanup status.

Do not close an issue merely because its entry files were created; close it only when appropriate after the work is successfully merged, and follow any repository-specific policy.
