# Slim REST API - `POST`

## Övning A

Nu ska du strukturera om ditt Slim-projekt för Journal så att den matchar denna boilerplate:

[slim-pdo-boilerplate-2](https://github.com/Vinnovera/cms-php-mysql-2019/tree/master/examples/slim/slim-pdo-boilerplate-2)

Du kan hämta den som en ZIP här:

[slim-pdo-boilerplate-2.zip](https://github.com/Vinnovera/cms-php-mysql-2019/raw/master/examples/slim/slim-pdo-boilerplate-2.zip)

Du ska följa denna filstruktur:
* :open_file_folder: **journal**
    * :open_file_folder: **public**
        * :page_facing_up: `index.php`
        * :page_facing_up: `main.js`
        * :page_facing_up: `style.css`
    * :open_file_folder: **src**
        * :open_file_folder: **classes**
            * :page_facing_up: `Mapper.php`
            * :page_facing_up: `User.php`
            * :page_facing_up: `Entry.php`
        * :open_file_folder: **middlewares**
            * :page_facing_up: `auth.php`
        * :open_file_folder: **routes**
            * :page_facing_up: `login.php`
            * :page_facing_up: `user.php`
            * :page_facing_up: `entries.php`
            * :page_facing_up: `view.php`
        * :open_file_folder: **views**
            * :page_facing_up: `index.phtml`
        * :page_facing_up: `container.php` 
        * :page_facing_up: `settings.php`     
    * :page_facing_up: `.gitignore`
    * :page_facing_up: `composer.json`

Lägg alla dina routes som har med `user` att göra i `src/routes/user.php` och alla som har med entries att göra i `src/routes/entries.php`. Observera att du kan behöva fundera lite på hur du ska kategorisera vissa av dina routes. Om du ska hämta alla **entries** för en viss **user** så rekommenderar jag att du lägger din route i `src/routes/entries.php`, eftersom det är just **entries** du vill visa. 

Flytta också över alla databas-anrop till klasser: `src/classes/User.php` och `src/classes/Entry.php`. Utgå från [slim-pdo-boilerplate-2](https://github.com/Vinnovera/cms-php-mysql-2019/tree/master/examples/slim/slim-pdo-boilerplate-2) för att se hur du kan göra detta. 

OBS! OBS! OBS! När du skapat nya klasser behöver du köra `composer install` igen för att bygga om din autoloading av klasser.

TIPS: Utgå från [slim-pdo-boilerplate-2](https://github.com/Vinnovera/cms-php-mysql-2019/tree/master/examples/slim/slim-pdo-boilerplate-2). Kopiera filerna till ditt projekt och skapa de nya filer du behöver och kopiera över kod från projektet du jobbade med 14/5. 

## Övning B

Nu ska du skapa några nya routes, för att handskas med POST-data. Du kan använda [Postman](https://www.getpostman.com/downloads/) för att anropa dina end points med data. 

* Skapa en `POST` route som registrerar en ny användare. 
* Skapa en `POST` route som sparar ett nytt inlägg för en viss användare. 
* Skapa en `DELETE` route som raderar ett inlägg. 
* Skapa en `GET` route som loggar ut den inloggade användaren. 
* Skapa en `PUT` route som ändrar på en användares användarnamn. 
