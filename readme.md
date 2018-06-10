### The Blog
## A blog solution by [A Code Guy](https://acodeguy.com)
## See the [Live Demo](https://blog.acodeguy.com)

## Info
- Runs on Laravel 5.6
- Uses a MySQL database

## Features
- user authentication
- add text posts
- delete posts - by authenticated user only (takes all associated comments with the post)
- add comments
- update posts
- new post validation [4/MAY/2018]
- delete comments [ADDED: 4/MAY/2018]
- update comments [ADDED: 20/MAY/2018]
- move source code button to nav area, condense text [ADDED: 7/MAY/18]
- post-updated timestamp on post view [ADDED: 20/MAY/18]

## Features Requests
- user profiles
- rich-text and images
- post tags
- snazzier UI
- soft-deletion of posts (for possible retrieval later)

## Issues (ISS#)
- Delete comment button visible for all users, including guests [FIXED: 6/MAY/2018]
- New comments pass through without any validation [FIXED: 27/MAY/2018]


## Installation
- clone the repo `git clone https://github.com/acodeguy/blog.git`
- rename .env.example to .env: `mv .env.example .env`
- generate a new app key: `php artisan key:generate`
- setup the database `php artisan migrate`
- serve /public/index.php
