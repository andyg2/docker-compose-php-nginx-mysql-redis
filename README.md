# docker-compose-php-nginx-mysql-redis

## How to use
> docker-compose up -d
> open http://localhost:8080 and create database test
> open localhost:88

## Notes.
To avoid conflicts with existing host services:
  changed the web server port to 88 (./docker-compose.yml:11)
  Changed the Mqsql port to 3303 (./docker-compose.yml:30)
