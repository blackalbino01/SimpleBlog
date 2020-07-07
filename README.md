1. Clone GitHub repo for this project locally
git clone https://github.com/blackalbino01/SimpleBlog

2. cd into your project
cd SimpleBlog

3.Install Composer Dependencies
composer install

4.Install NPM Dependencies
npm install

5.Create a copy of your .env file
cp .env.example .env

6. Generate an app encryption key
php artisan key:generate

7.running development server
php artisan serve
