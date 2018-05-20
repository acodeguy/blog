### The Blog
## A blog solution by [A Code Guy](https://acodeguy.com)
## See the [Live Demo](https://blog.acodeguy.com)

## Info
- Runs on Laravel 5.6
- Uses a MySQL database

## Features/Features Requests (REQ#)
1. user authentication
2. add text posts
3. delete posts - by authenticated user only (takes all associated comments with the post)
4. add comments
5. new post validation [4/MAY/2018]
6. user profiles
7. rich-text and images
8. delete comments [ADDED: 4/MAY/2018]
9. update posts
10. post tags
11. update comments [ADDED: 20/MAY/2018]
12. snazzier UI
13. soft-deletion of posts (for possible retrieval later)
14. move sour code button to nav area, condense text [ADDED: 7/MAY/18]
15. post-updated timestamp on post view [ADDED: 20/MAY/18]

## Issues (ISS#)
1. Delete comment button visible for all users, including guests [FIXED: 6/MAY/2018]
2. New Comments pass through without any validation


## Installation

- clone the repo `git clone https://github.com/acodeguy/blog.git`
- rename .env.example to .env: `mv .env.example .env`
- generate a new app key: `php artisan key:generate`
- setup the database `php artisan migrate`
- serve /public/index.php
