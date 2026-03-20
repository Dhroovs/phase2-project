# Phase 2 - Role Based Access Control (Laravel 9)

## Requirements
- PHP 8.x
- Composer
- MySQL / XAMPP

## Setup Instructions

### 1. Clone the project
```
git clone https://github.com/Dhroovs/phase2-project.git
cd phase2-project
```

### 2. Install dependencies
```
composer install
```

### 3. Copy environment file
```
cp .env.example .env
```

### 4. Generate app key
```
php artisan key:generate
```

### 5. Create database
Create a MySQL database named: `phase2db`

### 6. Update .env file
```
DB_DATABASE=phase2db
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Run migrations and seed
```
php artisan migrate
php artisan db:seed --class=UserSeeder
```

### 8. Run the project
```
php artisan serve
```

## Login Credentials

| Role  | Email | Password |
|-------|-------|----------|
| Admin | admin@admin.com | admin123 |
| User  | user@user.com | user123 |

## Features
- Single login for both Admin and User
- Admin Dashboard with full CRUD on records
- Record status: Pending / Approved / Rejected
- User Dashboard - view only
- Access Denied (403) page for unauthorized access
