# Simple CRUD Laravel 9 versi 2

## Route product yang digunakan (view dan controller berbeda dengan versi 1), bisa di cek di `routes/web.php`

```php
Route::resource('product', ProductController::class);
```


# Cara menjalankan project dengan menggunakan docker

## git clone repo ini dan hapus folder .git (jika perlu dihapus .git nya)

```shell
git clone git@github.com:Cryxto/simple-crud-laravel9-1.git && cd simple-crud-laravel9-1 && rm -rf .git
```

## build project (jangan lupa untuk hapus project yg lain jika terjadi container conflict)

```shell
docker-compose up -d --build
```

## Masuk ke shell atau bash container

```shell
docker exec -it pemweb bash
```

## Jika error laravel log gunakan ini didalam container shell atau bash

```shell
chown -R www-data:www-data /var/www
```

## buat file environment laravel

```shell
cp .env.example .env
```

## edit beberapa environment laravel nya di file .env 
```shell
DB_HOST=mysql_pemweb
DB_PORT=3306
DB_DATABASE=simple_crud_product
DB_USERNAME=root
DB_PASSWORD=p455w0rd
```

## install depedencies

```shell
composer install
```

## generate key

```shell
php artisan key:generate
```

## migrate serta seeding database

```shell
php artisan migrate:fresh --seed --seeder=ProductSeeder
```