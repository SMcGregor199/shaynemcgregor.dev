# Some Thoughts for July 5th

We're now one day removed from independence day in the United States, and I'm starting my week by looking over the tangential (there likely is a better name out there somewhere) files and folders that make up a website code base. Working indepently, I've become familiar with what in the indsutry is referred to as "source" files or "src" or short. These files, to the best of knowledge typically consist of the data, the components, and the pages. But there are usually other files that make up a website's codebase, particularly when it's being made at scale with multiple frameworks. Belowing I'll be detailing the several tangential files that I've come across in my research and studies. 

## .svelte-kit and node-modules folders

The `.svelte-kit` and `node-modules` folders will necessarily be a part of any website that utilizes the svelte framework. .svelte-kit contains files that are particular to Svelte and the node-modules folder contains all of the third-party npm module code that svelte uses for its framework and any that you add for your own use. This code is utilized to build your project, but the final project doesn't include these files when it's pushed up.Because these folders will necessarily be included in any project that decides to utilize svelte, it doesn't seem as if we'll be utilizing much or at all for development. 

## .env file

The `.env` file contains environment variables that are sensitive and should not be written directly in the code (i.e. passwords, etc.). The .env files is necessary because it congifures your credentials based on which environment you're using (local machine vs live site, etc.).

## .eslintrc.cjs  

The `eslintrc.cjs`, written in commonJS code, helps with analyzing JavaScript code to quickly find problems and resolve problems. While not necessary, it's useful because 