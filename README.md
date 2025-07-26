# PHP QR Code Generator (Dockerized)

## Prerequisites

- Docker
- Docker Compose

## Setup Instructions

```bash
git clone https://github.com/your-name/php-qrcode-generator.git
cd php-qrcode-generator

# Build and run containers
docker compose build
docker compose up -d

## 🔗 Access the App

- **QR Code Generator App:** [http://localhost:8080](http://localhost:8080)
- **phpMyAdmin Interface:** [http://localhost/phpmyadmin](http://localhost/8081)

## 🔐 MySQL Database Credentials

| Key       | Value        |
|-----------|--------------|
| Host      | `mysql`      |
| Username  | `root`       |
| Password  | `password`   |

##if composer not install

command - docker exec -it qrcode-generator-app-1 sh
-ls: /var/www/html/vendor
if no directory found install manually
composer install
```
