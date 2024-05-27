<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

## Commands in Laravel

1 instalacion de laravel con laragon
```bash
composer create-project laravel/laravel:^10.0 example-app
```
2 Instalación de Laravel UI para autenticación:
```bash
    composer require laravel/ui
    php artisan ui bootstrap --auth
    npm install && npm run dev
```
o
```bash
composer require laravel/ui
php artisan ui vue --auth
npm install && npm run dev
```
3 Generación de migraciones para las tablas
```bash
    php artisan make:migration create_clients_table
    php artisan make:migration create_contacts_table
```
4 Ejecucion de las migraciones
```bash
 php artisan migrate       
```

5 Creacion de modelos
```bash
 php artisan make:model Client
php artisan make:model Contact    
```
6 Creacion de controllers
```bash
    php artisan make:controller ClientsController
    php artisan make:controller ContactsController

```
7 Una forma resumida
```bash
    php artisan make:model Contract -m
    php artisan migrate
    php artisan make:controller ContractController --resource

```