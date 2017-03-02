# Requirements
+ PHP >= 5.6.4
+ composer https://getcomposer.org/download/
+ node
+ npm

## Build Setup

``` bash

## Install Dependencies
+ composer self-update
+ composer install
+ npm install

```

## Create .env File
+ duplicate .env.example and rename it to .env

``` bash
+ php artisan key:generate

```

## Database Setup
+ create mysql local database

## Update .env With Database Credentials

``` bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hc_content_manager
DB_USERNAME=root
DB_PASSWORD=

```

* yours may vary depending on your mysql setup

## migrate and seed database
``` bash
php artisan migrate:install
php artisan migrate
php artisan db:seed
```

## Build Steps

``` bash
# build project
npm run dev

# serve at localhost:8000
php artisan serve

# build for production with minification
npm run build

# run unit tests
phpunit tests/

```
