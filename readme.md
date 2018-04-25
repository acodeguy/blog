### The Blog
## A blog solution by A Code Guy

## Info
- Runs on Laravel 5.6

## Features
- user authentication
- add text posts
- delete posts - by authenticated user only (takes all associated comments with the post)
- add comments

## Installation

- clone the repo `git clone https://github.com/acodeguy/blog.git`
- rename .env.example to .env: `mv .env.example .env`
- generate a new app key: `php artisan key:generate`
- setup the database `php artisan migrate`
- serve public/index.php

## Future Versions

- [] User profiles
- [] rich-text and images
- [] delete comments
- [] update posts
- [] update comments
- [] snazzier UI
- [] soft-deletion of posts (for possible retrieval later)
