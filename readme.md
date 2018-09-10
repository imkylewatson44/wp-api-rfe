# Wordpress REST API with React Front End wp-api-rfe

## Getting started

DB: Please see attached in this .zip folder a copy of the DB for importing to sequel pro named (wordpress_2018-09-09.sql)
Wordpress: Import DB, add wp.local to /etc/hosts, and to the MAMP vhosts file
React: See folder named react/headless-wp run npm start to run the react app




## Developing

### Built With
Wordpress Backend
React Frontend

used brew, npm
wordpress used cpt,acfs, and acf-to-rest-api


### Setting up Dev

Here's a brief intro about what a developer must do in order to start developing
the project further:

```shell
git clone git@github.com:imkylewatson44/wp-api-rfe.git
cd wp-api-rfe/
git pull origin master
edit wp-config root/root for the login
make hosts entry us wp.local or chaneg it but must find/replace the .sql DB
visit site /wp-admin
use root/root to see back end
import your DB
Wordpress will be complete now
Checkout the react branch of the project
git pull origin react
run npm start to boot up the react app

```


## Notes
1) Time spent
2.0 mysql issues
4.0 wordpress install, building the custom page template, custom post template and demo post_content
3.5 React, setting up react and debugging as best I could to get the app working, this was my failure but got it as far as I could.

Total time spent was 9.5 hours, I also googled around some good approaches for this for a few hours as well. The tasks is complete except the react front end after my issues witht he GET from wordpress API

2) Problems***
the GET request on line 14 of App.JS
I could not get this working to grab the wordpress posts..I got the App.JS as far as I could without seeing anything on the page.
When i would request the data in postman it would work however when I made that request in app.js nothing would come back. THis is something I would seek hep from a team lead on.
I did push it as far as I could.

3) Would have done differently-
use ACFs not custom tempaltes to handle the user input, I see in react you can use image.acf to get the ACFs and this seems much quicker and a lot easier to deal with
