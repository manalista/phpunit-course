# PHPUnit Course
This repository is part of private course created by Andreus Timm


## Requirements
- PHP 8.2
- Composer


## Setup Project
```
git clone https://github.com/andreustimm/phpunit-course.git
cd phpunit-course
composer install
cp src/Config/.env.example src/Config/.env
#set up your database config inside .env file
```


## Setup Database
Import files to MySQL

```
source tests/assets/01-setup-db.sql
source tests/assets/02-create.sql
source tests/assets/03-data.sql
```


## Commands
```
vendor/bin/phpunit --bootstrap ./tests/bootstrap.php tests --color
vendor/bin/phpunit tests --color
composer test
```
