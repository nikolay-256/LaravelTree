# Отображение дерева товаров

<a target="_blank" href="https://docs.google.com/document/d/1dZY1ofCrBBeT-kSoyBKOO_rmObbx8b5pZy9nys7TbrE/edit">Ссылка на задачу</a>

Установка:

- composer install

- cp .env.example .env

После, в файле .env необходимо отредактировать доступы к базе для своего пользователя.

Выполнение миграций:
- php artisan migrate

Генерация ключей:
- php artisan key:generate

Запуск теста:
- vendor/bin/phpunit tests/Unit/ItemsOrderTest.php

Запуск:
- php artisan serve
