<h1 align="center">Laravel Blog</h1>

## User

**Admin**

- email: admin@gmail.com
- Password: 123123123

**Penulis**

- email: penulis@gmail.com
- Password: 123123123

**Pembaca**

- email: pembaca@gmail.com
- Password: 123123123

## Install

## Buka di kode editor


## Install composer

```bash
composer install
```

## Copy .Env

```bash
copy .env.example menjadi .env
```

## Buat database di localhost 

```bash
nama database : task_day32
```

## Setting database di .env

```bash
DB_PORT=3306
DB_DATABASE=task_day32
DB_USERNAME=root
DB_PASSWORD=
```

## Generate key

```bash
php artisan key:generate
```

## Jalankan migrate dan seeder

```bash
php artisan migrate --seed
```

## Buat storage link

```bash
php artisan storage:link
```

## Jalankan Serve

```bash
php artisan serve
```


