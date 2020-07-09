# Yonkou Quotes API

## Description

C'est une API qui regroupe un ensemble de citations.


## Installation

En mode dev

```bash
git clone https://github.com/desmond8500/Quotes_API.git
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan storage:link
php artisan migrate
```

## API 

Récupérer une citatinon : [http://quotesapi.yonkou.info/api/quote](http://quotesapi.yonkou.info/api/quote)

## Tools 

* [Laravel](https://laravel.com)
* [Select2](https://select2.org)
