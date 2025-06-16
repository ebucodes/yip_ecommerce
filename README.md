# YIP eCommerce Application

## Quick Setup

1. **Clone & Install**
   ```bash
   git clone <repository-url>
   cd yip_ecommerce
   composer install
   npm install
   ```

2. **Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Database**
   ```bash
   # Configure database in .env
   php artisan migrate:fresh --seed
   ```

4. **Run**
   ```bash
   php artisan serve
   npm run dev
   ```

## Default Users
- **Admin**: admin@example.com
- **Buyer**: buyer@example.com  
- **Seller**: seller@example.com
- **Password**: P@$$w0rd

## URLs
- Website: http://localhost:8000
- Admin Panel: http://localhost:8000/account

## Tech Stack
Laravel 11, Smarty Templates, MySQL