# My Web App

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About

This is a web application built with Laravel. It allows users to manage customers, including creating, updating, viewing, and deleting customer records.

## Features

- Create, update, view, and delete customers
- Search customers by first name or last name

## Installation

1. **Clone the repository**:
    ```bash
    git clone https://github.com/Ignacioscript/pos-system-app
    cd pos-system-app
    ```

2. **Install dependencies**:
    ```bash
    composer install
    npm install
    ```

3. **Set up the environment**:
    - Copy `.env.example` to `.env` and configure your environment variables.

4. **Generate application key**:
    ```bash
    php artisan key:generate
    ```

5. **Run migrations**:
    ```bash
    php artisan migrate
    ```

6. **Run the application**:
    ```bash
    php artisan serve
    npm run dev
    ```
   
## Usage

- Access the application at `http://localhost:8000`.

## Contributing

Thank you for considering contributing to this project! Please follow the [contribution guide](https://laravel.com/docs/contributions).

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT)
