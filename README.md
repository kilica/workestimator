# Laravel Works App

Laravel Works App is a web application for managing and evaluating works/achievements. It allows users to view works, submit evaluations, and administrators to manage users and content.

## Features

### User Management
- User registration with email verification
- Role-based access control (Admin, Staff, General)
- User status management (Active, Inactive, Deleted)
- User profile management

### Works Management
- Works posting (Admin and Staff only)
- Category and tag classification
- 5-star rating system for difficulty, impact, and progress
- Detailed work information with background, achievements, and improvements
- Related videos display

### Evaluation System
- User evaluations with interest and rating levels
- Multiple evaluation criteria via checkboxes
- Support comments
- Social sharing to X.com

## Technology Stack
- Laravel 11
- MySQL
- Blade Templates (Server-Side Rendering)
- Laravel Breeze for Authentication
- Tailwind CSS

## Installation

1. Clone the repository:
```bash
git clone https://github.com/kilica/workestimator.git
cd workestimator
```

2. Install dependencies:
```bash
composer install
npm install
```

3. Set up environment:
```bash
cp .env.example .env
php artisan key:generate
```

4. Configure database in .env file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_works_app
DB_USERNAME=root
DB_PASSWORD=
```

5. Run migrations and seed the database:
```bash
php artisan migrate
php artisan db:seed
```

6. Set up storage for file uploads:
```bash
php artisan storage:link
mkdir -p storage/app/public/covers
chmod 775 storage/app/public/covers
```

7. Build assets:
```bash
npm run build
```

8. Start the server:
```bash
php artisan serve
```

## Default Users

- Admin: admin@example.com / password
- Staff: staff@example.com / password
- General User: user@example.com / password

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
