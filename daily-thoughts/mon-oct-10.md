# Some Thoughts for October 10th 

## Goal: To get 1% better every day

- `/*` next to a file's name in the side bar in sublime text just means that the file is part of the source code as oppose to 
- when install wordpress, you need to first create a database, which I do using SequelPro. When inside Sequel Pro, I can log in using my user name and password to connect to all my databases, then I can add a new database from there. Whatever name I call the database is what I use in the wordpress install to connect wordpress to the database. 
- to rename an admin password in wordpress with sequel pro, you need to click on the query tab and type 
`UPDATE wp_users
SET user_pass= MD5('password')
WHERE ID = 1`
and run the code. this will reset the password to 'password'