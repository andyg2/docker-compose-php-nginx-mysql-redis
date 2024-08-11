# docker-compose-php-nginx-mysql-redis

## How to use
> docker-compose up -d
> open http://localhost:8080 and create database test
> open localhost:88

## Notes.
To avoid conflicts with existing host services:
  Changed the web server port to 88 (./docker-compose.yml:10)
  Removed exposed ports for mysql and redis as they are handled by the links between containers.
  The only host ports required now are 88 (web server) and 8080 (phpmyadmin)
