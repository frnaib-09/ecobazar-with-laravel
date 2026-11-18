# EcoBazar — Grocery E-commerce (Laravel)

An organic grocery store built with **Laravel 12**: a customer-facing storefront and a separate admin panel for managing the catalogue and users.

## Features

**Storefront**
- Home, shop, product detail, blog, about and contact pages
- User registration and login (Laravel auth)

**Admin panel** (`routes/admin.php`)
- Dashboard
- Category management (list, create)
- Product management (list, create)
- User list
- Admin profile view and update

## Tech stack

Laravel 12 · PHP 8.2 · MySQL · Blade templates · Bootstrap

## Run it locally

```bash
git clone https://github.com/frnaib-09/ecobazar-with-laravel.git
cd ecobazar-with-laravel
composer install
cp .env.example .env
php artisan key:generate
# set DB_DATABASE / DB_USERNAME / DB_PASSWORD in .env
php artisan migrate
npm install && npm run build
php artisan serve
```

---

Built by [Foyjur Rafee](https://github.com/frnaib-09) · Available for Laravel and full-stack projects — foyjurrafee99@gmail.com
