# Some Thoughts for July 19th

I'm back from Mexico, and I just jumped straight back into it. Lately, I've been doing a lot of work in Svelte, particularly around separating the data from the components using what Svelte calls Props. I'll include some thoughts here. 

## How Svelte Handles Data

- In the the lib folder I have a javascript object that stores all the data I'll need for a component. In that file I'm declaring `export` and `const` to make that file exportable. and then at the bottom I'm declaring `export default variable name` to make whatever imports it default to that variable.

- In index.svelte I `import` a custom variable from the file path of the js file, which will automatically pull in the data from the variable I created at the bottom of the js file. 

- I then set that variable in `{ }` inside the component I want to call to the specific variable that'll use it in the component. 

- Interestingly, in the component itself, I need to `export let` the variable that it's expected to take and that I initialized within the element of the that was called in the index.svelte file.  

