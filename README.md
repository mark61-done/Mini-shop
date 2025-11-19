# 🛍️ MiniShop - Laravel E-Commerce

A complete Laravel e-commerce application with admin dashboard, customer shop, and shopping cart.

## ✨ Features

- **Admin Dashboard** - Product management (CRUD)
- **Customer Shop** - Product browsing & details  
- **Shopping Cart** - Add/remove items (login required)
- **Authentication** - Laravel Breeze integration
- **Responsive Design** - Tailwind CSS

## 🚀 Quick Start

```bash
# Clone & setup
git clone https://github.com/mark61-done/Mini-shop.git
cd minishop
composer install
npm install && npm run build

# Environment
cp .env.example .env
php artisan key:generate

# Database
php artisan migrate
php artisan serve
# Install php dependencies
composer install
# Install javascript dependencies
npm install
# Set up environment file
cp .env.example .env
php artisan key:generate
# Configure database (edit .env file)
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=minishop
DB_USERNAME=root
DB_PASSWORD=your_password
# Run database migration
php artisan migrate
# Build frontend assets
npm run build
# Start development server
php artisan serve