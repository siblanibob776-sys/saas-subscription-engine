# SaaS Subscription Engine (Laravel)

A production-style Laravel starter template for building subscription-based SaaS applications.

---

## 🚀 Features

- Laravel Breeze Authentication
- Plans System (Free / Pro / Business)
- Laravel Cashier (Stripe-ready billing structure)
- `/plans` dynamic pricing page
- Subscription lifecycle (Subscribe / Cancel / Resume – WIP)
- Clean, scalable folder architecture

---

## 🧰 Tech Stack

- Laravel 11/12 + PHP 8+
- Blade + Tailwind CSS
- SQLite (development) / MySQL (production-ready)
- Laravel Cashier (Stripe integration structure)

---

## ⚙️ Installation

```bash
git clone <your-repo-url>
cd saas-subscription-engine
composer install
cp .env.example .env
php artisan key:generate
type nul > database/database.sqlite
php artisan migrate:fresh --seed
npm install
npm run build
php -S 127.0.0.1:8000 -t public
