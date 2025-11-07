# Laravel 11 Job Board — Scaffold (built by ChatGPT)

This is a **scaffolded** Laravel 11 project implementing a simple job-board-like app (jobs listing, create, edit, delete, basic auth placeholders).
It is a hand-crafted codebase intended to follow the structure used in many Laracasts tutorial final apps.

**Important:** This scaffold does NOT include vendor/ (Composer) packages. To run it you must have PHP, Composer and Laravel 11 dependencies installed locally.

## Quick start (local)

1. Install Composer dependencies:
```bash
cd laravel11-jobboard-scaffold
composer install
```

2. Copy `.env.example` to `.env` and set `APP_KEY`:
```bash
cp .env.example .env
php artisan key:generate
```

3. Use SQLite (already configured in `.env.example`), create database file:
```bash
touch database/database.sqlite
php artisan migrate --seed
php artisan serve
```

4. Open http://127.0.0.1:8000

## What is included
- `app/Models/Job.php` — Eloquent model
- `app/Http/Controllers/JobController.php` — Resource controller
- `database/migrations/` — jobs table migration and users migration (simplified)
- `database/seeders/DatabaseSeeder.php` — seeds sample jobs and a test user
- `routes/web.php` — web routes
- `resources/views/` — Blade templates (index, show, create/edit, layout)
- `tests/Feature/JobCrudTest.php` — simple PHPUnit test scaffold
- `composer.json` — minimal composer file (requires laravel/framework ^11.0)

This scaffold is provided as a starting point. If you want, I can:
- add Breeze authentication scaffolding,
- expand tests,
- convert views to Tailwind UI,
- or create an episode-by-episode commit history.

Enjoy! — ChatGPT (GPT-5 Thinking mini)
