# Some Thoughts for July 5th

We're now one day removed from independence day in the United States, and I'm starting my week by looking over the tangential (there likely is a better name out there somewhere) files and folders that make up a website code base. Working indepently, I've become familiar with what in the indsutry is referred to as "source" files or "src" or short. These files, to the best of knowledge typically consist of the data, the components, and the pages. But there are usually other files that make up a website's codebase, particularly when it's being made at scale with multiple frameworks. Belowing I'll be detailing the several tangential files that I've come across in my research and studies. 

## .svelte-kit and node-modules folders

The `.svelte-kit` and `node-modules` folders will necessarily be a part of any website that utilizes the svelte framework. .svelte-kit contains files that are particular to Svelte and the node-modules folder contains all of the third-party npm module code that svelte uses for its framework and any that you add for your own use. This code is utilized to build your project, but the final project doesn't include these files when it's pushed up.Because these folders will necessarily be included in any project that decides to utilize svelte, it doesn't seem as if we'll be utilizing much or at all for development. 

## .env file

The `.env` file contains environment variables that are sensitive and should not be written directly in the code (i.e. passwords, etc.). The .env files is necessary because it congifures your credentials based on which environment you're using (local machine vs live site, etc.).

## .eslintrc.cjs  

The `eslintrc.cjs`, written in commonJS code, helps with analyzing JavaScript code to quickly find problems and resolve problems. While not necessary, it's useful because it keeps your JavaScript code consistent and bug free. 

## .prettierrc

The `prettierrc` file helps with formatting cod formatting. It's language agnostistic, which means while `.eslintrc` keeps its eye on JavaScript, `prettierrc`	keeps its eye on everything else. 

## netlify.toml 

The `netlify.toml` file specifics how netlify builds and deploys your website. 

## .gitignore 

The `gitignore` file specifies which files are to be ignored by GitHub inside the website's respective repo. 

## jsconfig.json 

The `jsconfig.json` indicates that the directory is the root of a JavaScript project. It can decide which files are to be included/excluded as well as compiled. It can also apprently...extend? 

## package.json & package.lock.json

These two files are connected to the npm. `package.json` contains all the metadata about the project and the functional dependencies. The `package.lock.json` allows other users who clone the project to have the exact same latest version of those packages. 

## tailwind.config.cjs & postcss.config.cjs 

Written in commonJS code,`tailwind.config.cjs` allows you set specific css related properties like screen width/ color, etc. You can think of it as a file for your custom css variables. `postcss.config.cjs` ...

## svelte.config.js

`svelte.config.js` is a file that comes with the svelte framework. You'll need to configure it to your specific project...

## .nvmrc

The `.nvmrc` file locks your application to a specific version of node. It seems like it only needs to be one line of code. 




