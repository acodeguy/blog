### The Blog
## A blog solution by A Code Guy

## Info
- Runs on Laravel 5.6

## Features/Incoming Features
- [x] user authentication
- [x] add text posts
- [x] delete posts - by authenticated user only (takes all associated comments with the post)
- [x] add comments
- [x] new post validation [4/5/2018]
- [] User profiles
- [] rich-text and images
- [] delete comments
- [] update posts
- [] post tags
- [] update comments
- [] snazzier UI
- [] soft-deletion of posts (for possible retrieval later)


## Installation

- clone the repo `git clone https://github.com/acodeguy/blog.git`
- rename .env.example to .env: `mv .env.example .env`
- generate a new app key: `php artisan key:generate`
- setup the database `php artisan migrate`
- serve /public/index.php
