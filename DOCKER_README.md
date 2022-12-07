Install tools below on your local PC before starting.
- [Docker](https://www.docker.com/)
- [Nodejs](https://nodejs.org/en/download/)

## 1. How to setup developing environment

#### 1-1. Start up Docker
Copy file `docker-compose.yml.example` to `docker-compose.yml`
Run:
```
$ docker-compose up -d --build
```
When needed to rebuild, run:
```
$ docker-compose down -v
$ docker-compose up -d --build
```

#### 1-2. Access container

Connect to the container.  
Need to create vendor directory and node_modules directory.
```
$ docker exec -it fpt_backend bash

[//]: # ($ composer install)

[//]: # ($ composer dump-autoload)

[//]: # ($ php artisan key:generate)

[//]: # ($ exit)

[//]: # ($ yarn)

[//]: # ($ yarn hot)
```
([Composer](https://github.com/composer/composer) and [npm](https://www.npmjs.com/) are pre-installed in the container.)

#### 1-3. Connect to localhost
Variables are defined in `.env` file,
Example:
```
####### DOCKER ######
HTTP_PORT=8009
####### DOCKER ######
```
Open browser and access to `http://localhost:<HTTP_PORT>` exam: `http://localhost:8001`
#### 1-4. Connect to MySQL tool.
```
Host: in .env file
Port: 3306
username: in .env file
password: in .env file
```
#### 1-5. Docker commands for frequent use.

Start up containers.
```
$ docker-compose up -d
```

Stop and delete containers.
```
$ docker-compose down -v
```
