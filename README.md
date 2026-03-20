
list of things that I have applied: 
# Phase 2 - Role Based Access Control (Laravel 9)

## Requirements
- PHP 8.x
- Composer
- MySQL

## Setup Instructions

### 1. Clone the project
git clone https://github.com/Dhroovs/phase2-project.git
cd phase2-project

### 2. Install dependencies
composer install

### 3. Copy environment file
cp .env.example .env

### 4. Generate app key
php artisan key:generate

### 5. Create database
Create a MySQL database named: phase2db

### 6. Update .env file
DB_DATABASE=phase2db
DB_USERNAME=root
DB_PASSWORD=

### 7. Run migrations and seed
php artisan migrate
php artisan db:seed --class=UserSeeder

### 8. Run the project
php artisan serve

## Login Credentials

### Admin
- Email: admin@admin.com
- Password: admin123

### User
- Email: user@user.com
- Password: user123
