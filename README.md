# Product Tree Display

<a target="_blank" href="https://docs.google.com/document/d/1dZY1ofCrBBeT-kSoyBKOO_rmObbx8b5pZy9nys7TbrE/edit">Task Link</a>

Installation:

- composer install

- cp .env.example .env

After that, in the .env file, you need to edit the database access for your user.

Performing migrations:
- php artisan migrate

Key generation:
- php artisan key:generate

Run test:
- vendor/bin/phpunit tests/Unit/ItemsOrderTest.php

Run web:
- php artisan serve
