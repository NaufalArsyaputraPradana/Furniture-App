# 🪑 Furniture App - Jepara Carving Furniture Store

![Laravel](https://img.shields.io/badge/Laravel-11.x-red.svg)
![PHP](https://img.shields.io/badge/PHP-8.1+-blue.svg)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.x-38B2AC.svg)
![License](https://img.shields.io/badge/License-MIT-green.svg)

A modern, elegant furniture e-commerce application showcasing traditional Jepara wood carving craftsmanship. Built with Laravel and featuring a beautiful, responsive design.

## ✨ Features

### 🏪 **Store Front**
- **Elegant Homepage** - Showcasing Jepara carving heritage with beautiful animations
- **Product Catalog** - Browse furniture with advanced filtering and search
- **Product Details** - Detailed product pages with image galleries
- **Responsive Design** - Optimized for all devices
- **WhatsApp Integration** - Direct contact for inquiries

### � **Admin Panel**
- **Product Management** - Create, edit, and manage furniture products
- **Category Management** - Organize products into categories
- **Image Management** - Upload and manage product images
- **Settings Management** - Configure store settings and branding
- **Admin Authentication** - Secure admin access with middleware

### 🎨 **Design & UX**
- **Traditional Theme** - Inspired by Jepara carving artistry
- **Smooth Animations** - Engaging user experience with smooth transitions
- **Modern UI** - Clean, professional interface built with Tailwind CSS
- **SEO Optimized** - Search engine friendly structure

## 🚀 Technologies

- **Backend**: Laravel 11, MySQL
- **Frontend**: Blade Templates, Tailwind CSS, Alpine.js
- **Database**: MySQL dengan Eloquent ORM
- **Development**: Laragon, Vite

## Instalasi

1. Clone repository:
```bash
git clone https://github.com/NaufalArsyaputraPradana/Furniture-App.git
cd Furniture-App
```

2. Install dependencies:
```bash
composer install
npm install
```

3. Setup environment:
```bash
cp .env.example .env
php artisan key:generate
```

4. Konfigurasi database di `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=furniture
DB_USERNAME=root
DB_PASSWORD=
```

5. Jalankan migrasi dan seeder:
```bash
php artisan migrate:fresh --seed
```

6. Build assets:
```bash
npm run build
```

7. Jalankan aplikasi:
```bash
php artisan serve
```

## Default Admin User

- Email: `admin@furniture.test`
- Password: `password`

## License

MIT License

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# Furniture-App
