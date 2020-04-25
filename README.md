# Отображение дерева товаров

- composer install

- cp .env.example .env
После, в файле .env необходимо отредактировать доступы к базе для своего пользователя.

Выполнение миграций:
- php artisan migrate

Генерация ключей:
- php artisan key:generate

Запуск теста:
- phpunit tests/Unit/ItemsOrderTest.php

Запуск:
- php artisan serve
