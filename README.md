# Online Game Catalog

This project is a simple Laravel application for an online game catalog, featuring full CRUD functionality for games using Blade templates. The project is containerized with Docker for easy setup and deployment.

## Requirements

- Docker and Docker Compose
- Git

## Setup

1. **Clone the repository:**

   ```bash
   git clone git@github.com:K1ngp1nDev/games.git
   cd games
    ```
2. **Create Environment File:**

   ```bash
   cp .env.example .env
   ```
   ```bash
   DB_CONNECTION=mysql
   DB_HOST=db
   DB_PORT=3306
   DB_DATABASE=online_game_catalog
   DB_USERNAME=laravel
   DB_PASSWORD=secret
   ```
3. **Build and Start Docker Containers:**

   ```bash
    docker-compose up -d --build
    ```
4. **Install Composer Dependencies:** 

   ```bash
   docker-compose exec app composer install
   ```
5. **Generate Laravel Application Key:**

   ```bash
   docker-compose exec app php artisan key:generate
   ```
6. **Run Migrations and Seed the Database:**

   ```bash
   docker-compose exec app php artisan migrate --seed
   ```
7. **Create Storage Symlink:**

   ```bash
   docker-compose exec app php artisan storage:link
   ```
8. **Access the Application:**

   The application should now be running on [http://localhost:8080](http://localhost:8080).
