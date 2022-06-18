<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## INSTALLATION APP
<p>This project using laravel version 9 and php 8</p>

### 1. Install PHP and Composer
- Download PHP at https://www.php.net/downloads.php recommended version 8.0.0 or newer
- Download composer at https://getcomposer.org/
- Check success install PHP and composer
```sh
php --version
```
```sh
composer --version
```
### 2. Clone Repository Project App
- Clone with `ssh`
    ```sh
    git@github.com:luthfyhakim/pengaduan-masyarakat.git
    ```
- Clone with `https`
    ```sh
    https://github.com/luthfyhakim/pengaduan-masyarakat.git
    ```
### 3. Install Dependency
```sh
composer install
```
### 4. Configure .env
Pada file .env.example rename menjadi .env kemudian jalankan perintah: 
```sh
php artisan key:generate
```

### 5. Running App
defaut host port running dev http://localhost:8000
```sh
php artisan serve
```
### 6. Create Table and Database
- Database phpmyadmin : pengaduan_masyarakat
- Table : 
    ```sh
    php artisan make:model Masyarakat -m 
    ```
    ```sh
    php artisan make:model Petugas -m 
    ```
    ```sh
    php artisan make:model Tanggapan -m 
    ```
    ```sh
    php artisan make:model Pengaduan -m 
    ```

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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
