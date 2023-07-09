### Madu

MADU (Managing Applications for Development and Usability) is a cutting-edge application designed specifically for small and medium-sized businesses (SMBs) to streamline and enhance their information systems development processes. By leveraging the power of technology, MADU empowers SMBs to manage and optimize their IT infrastructure effectively, allowing them to focus on core business operations and achieve sustainable growth.

### App Setup

*Please make sure you have php 7.4 and composer installed.

```bash
composer update
```

or

```bash
composer install
```

Copy .env.example and rename it as .env

```bash
cp .env.example .env
```

Configure .env file (Change db_host, port, db name, db username and password)

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT= PORTNUMBER (3306/8889)
DB_DATABASE=DBNAME
DB_USERNAME=DBUNAME
DB_PASSWORD=DBPASS
```

Generate key

```bash
php artisan key:generate
```

Migrate database

```bash
php artisan migrate
```

Seed table

```bash
php artisan db:seed
```

Run application

```bash
php artisan serve
```
