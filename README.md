<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel CRUD

This project is a simple implementation of **CRUD (Create, Read, Update, Delete)** features using the **Laravel** framework. It was built as a learning tool and skill development project for building modern web applications, enhanced with **Alpine.js** and **Tailwind CSS** on the frontend.

## 🔧 Technologies Used

- [Laravel](https://laravel.com/) — PHP framework for backend and database management.
- [Laravel Breeze](https://laravel.com/docs/starter-kits#laravel-breeze) — Lightweight starter kit for authentication.
- [MySQL](https://www.mysql.com/) — Relational database management system.
- [Tailwind CSS](https://tailwindcss.com/) — Utility-first CSS framework for modern and responsive design.
- [Alpine.js](https://alpinejs.dev/) — Lightweight JavaScript framework for frontend interactivity.

## 🚀 Features

- User authentication (login, register, logout) using Laravel Breeze.
- Create data
- Read/display data
- Update data
- Delete data
- Responsive user interface using Tailwind CSS.
- Lightweight UI interactivity with Alpine.js.


## 📦 Installation

1. **Clone this repository:**
   ```bash
   git clone https://github.com/albertdevada/laravel-crud.git
   cd laravel-crud
    ```
2. **Install Laravel dependencies:**
   ```bash
   composer install
    ```
3. **Copy ``.env`` file and generate app key:**
   ```bash
   cp .env.example .env
   php artisan key:generate
    ```
4. **Configure your database in ``.env``, then run migrations:**
   ```bash
   php artisan migrate
    ```
5. **Install frontend dependencies and build assets:**
   ```bash
   npm install && npm run dev
    ```
5. **Start local development server:**
   ```bash
   php artisan serve
    ```

## 🎯 Learning Goals
- Understand the basic CRUD workflow in Laravel.
- Learn how to implement authentication using Laravel Breeze.
- Integrate Tailwind CSS and Alpine.js in a Laravel project.
- Enhance skills in building clean, functional, and responsive web applications.

## 🙌 Contribution
This project is open for contributions! Feel free to fork and submit a pull request if you'd like to add new features or fix any issues.

Built with passion for learning and growing. Enjoy! 🚀
## License

The Laravel framework is open-sourced software licensed under the ``LICENSE.txt``.

---

<p align="center">
  <b>© Create by Albert Devada. Built with 💻 and ☕. All rights reserved.</b>
</p>
