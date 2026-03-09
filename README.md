# QuickHire Backend

A full-stack job board application built with **Laravel 12**, **React**, **TypeScript**, and **Inertia.js**.

## Tech Stack

- **Backend:** Laravel 12, Laravel Fortify (authentication)
- **Frontend:** React 19, TypeScript, Inertia.js, Tailwind CSS
- **Database:** SQLite (default) / MySQL
- **Build Tool:** Vite

## Requirements

- PHP >= 8.2
- Composer
- Node.js >= 18
- npm

## Setup

### 1. Clone the repository

```bash
git clone <repository-url>
cd quickhire-backend
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Configure environment

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configure the database

The default configuration uses **SQLite**. No additional setup is needed for SQLite.

To use **MySQL** instead, update the following values in `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=quickhire
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 5. Run migrations and seed the database

```bash
php artisan migrate
php artisan db:seed
```

### 6. Install Node dependencies and build assets

```bash
npm install
npm run build
```

### 7. Start the development server

Run the Laravel server and Vite dev server concurrently:

```bash
composer run dev
```

Or start them separately:

```bash
# Terminal 1 — Laravel server
php artisan serve

# Terminal 2 — Vite dev server
npm run dev
```

The application will be available at [http://localhost:8000](http://localhost:8000).

## Available Scripts

### PHP / Artisan

| Command | Description |
|---|---|
| `php artisan serve` | Start the Laravel development server |
| `php artisan migrate` | Run database migrations |
| `php artisan migrate:fresh --seed` | Reset DB and re-seed |
| `php artisan tinker` | Open the Laravel REPL |

### npm

| Command | Description |
|---|---|
| `npm run dev` | Start Vite dev server with HMR |
| `npm run build` | Build assets for production |
| `npm run lint` | Lint and auto-fix TypeScript/React files |
| `npm run format` | Format files with Prettier |
| `npm run types:check` | Run TypeScript type checking |

## Running Tests

```bash
php artisan test
```

## Project Structure

```
app/
  Http/Controllers/   # Request handlers
  Models/             # Eloquent models (User, Job, Application)
database/
  migrations/         # Database schema
  seeders/            # Seed data
resources/
  js/                 # React + TypeScript frontend
    pages/            # Inertia page components
    components/       # Shared UI components
    layouts/          # Page layouts
  css/                # Global styles
routes/
  web.php             # Web routes
  api.php             # API routes
```
