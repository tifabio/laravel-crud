# Laravel CRUD

### Steps to install:

```sh
$ cp .env.example .env
$ docker-compose up -d --build
$ docker-compose exec app composer install
$ docker-compose exec app php artisan migrate --seed
```

### Steps to run:
```sh
$ docker-compose up -d
```

## Make crud:
```
php artisan make:crud {table_name}

php artisan make:crud banks
```

Add a route in `web.php`
```
Route::resource('banks', 'BankController');
```
Route name in plural slug case.