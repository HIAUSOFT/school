# School Website (Laravel starter)

This repository branch contains a Laravel-based school website starter with Docker and a MySQL dump.

Quick start (recommended):

1. Copy .env.example to .env and edit DB credentials if needed.
2. Build and run with Docker:
   docker-compose up -d --build
3. Install composer dependencies inside the app container (the Dockerfile installs composer; if not present run locally):
   docker compose exec app bash
   composer install
   php artisan key:generate
   php artisan migrate --seed

MySQL dump is available at database/mysql_dump.sql

Default admin credentials in seeders:
- Email: admin@example.test
- Password: password

Security: This is a starter/demo template. Don't use in production without security review.
