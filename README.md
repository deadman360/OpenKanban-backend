# OpenKanban 🚀

A self-hosted, open-source Kanban platform built for developers who care about data privacy and clean architecture.

## Tech Stack

- **Framework:** Laravel 11
- **Admin/UI:** FilamentPHP 3 + Livewire
- **Database:** PostgreSQL
- **Queue:** Redis
- **Environment:** Docker (Laravel Sail)

## 🛠 How to Run Locally

1. **Clone the repository**
   ```bash
   git clone git@github.com:deadman360/OpenKanban.git
   cd OpenKanban
2 . **Install Dependencies**
```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```
3. **Setup Enviornment**
   ```bash
   cp .env.example .env
   ```
4. **Start Containers**
    ```bash
    ./vendor/bin/sail up -d
    ```
5. *Run Migrations & Seed
   ```bash
   ./vendor/bin/sail artisan migrate --seed
   ```
 
