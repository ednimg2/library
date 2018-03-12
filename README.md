# Library!

# Project Description

Library! - Books database. 

# Environment requirements

* PHP 7.2
* MySQL
* Symfony 3.4.*

# Installation
## Download and prepare the project

1. Install [Git](https://git-scm.com/downloads)
1. Clone repository `git clone https://github.com/ednimg2/library.git`
1. cd 'library'
1. Get [Composer](https://getcomposer.org/download/)
1. Run `composer install`

## Prepare database - run commands:
1. Create database with `php bin/console doctrine:database:create --if-not-exists`
1. Create tables with `php bin/console doctrine:schema:update --force`
1. Run `php bin/console doctrine:fixtures:load` to insert all needed fixtures to the database.

## Run project

1. Run `php bin/console server:start`
1. Go to `http://127.0.0.1:8000/`
