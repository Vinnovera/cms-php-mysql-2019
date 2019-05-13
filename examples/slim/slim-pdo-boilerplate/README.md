# slim-boilerplate-basic

> Boilerplate for [Slim Framework](https://www.slimframework.com/docs/)

## Installation

1. Install **[`Composer`](https://getcomposer.org/doc/00-intro.md)**.
2. Make sure you can run composer by writing `composer --version` in the terminal of your choice. If it's working you should get back a version number. If you get something like `command not found` -> restart computer -> try again -> revisit installation steps in the link above.
3. Copy this all the files from this folder. Since we are running the PHP-server through the terminal it doesn't matter where you clone it to.
4. `cd` into the cloned folder.
5. Run `composer install` (or `php composer.phar install` depending how you installed composer) from the terminal to install all dependencies that the project needs.
6. Change `src/settings.php` to your database credentials from MAMP/WAMP/XAMPP.

## Usage

* From the terminal, run
```
composer run start
```
* Then visit [`http://localhost:8000`](http://localhost:8000)

## Troubleshooting

If you are getting this error:
```
mysql driver not found
```

Find your `php.ini`-file and remove the semicolon in front of this line in the config-file:
```ini
extension=pdo_mysql.so
```

Then restart.
