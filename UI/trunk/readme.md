# Requirements
composer https://getcomposer.org/download/
node
npm

## Build Setup

``` bash

# install dependencies
composer install
npm install
duplicate .env.example and rename it to .env
php artisan key:generate

# build project
npm run dev

# serve at localhost:8000
php artisan serve

# build for production with minification
npm run build

# run unit tests
phpunit tests/
```

