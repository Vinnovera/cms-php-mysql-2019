# PDO

## Övningar

Vi ska utgå från samma produktdatabas som i den tidigare uppgiften, så om du inte har importerat [products.sql](https://raw.githubusercontent.com/Vinnovera/cms-php-mysql-2019/master/exercises/products.sql) gör det nu. Förslagsvis gör du din connection till MySQL i en fil som heter `connect.php` som du återanvänder. 

Om du kör fast eller vill ha inspiration, titta gärna på exempellösningarna i: [Examples](https://github.com/Vinnovera/cms-php-mysql-2019/tree/master/examples/pdo)

1. Skapa en PHP-sida (`listproducts.php`) där du listar alla laptops och PC-datorer i databasen i en tabell. Du ska lista `model`, `speed`, `ram` och `price`. Skriv även ut vem som är tillverkare (`maker`) och vilken typ av produkt det är (`type`). Alla produkter ska vara i samma tabell och hämtas i samma SQL query.

2. Gör så att tabellen går att sortera på de olika fälten. Skapa en table head med namnet på de olika fälten (`model`, `speed`, `ram`, `price`, `maker`, `type`). Varje table head ska vara en länk som skickar en GET-parameter (t.ex. `<a href="?orderby=price>Price</a>`). Skriv PHP-kod som ändrar så att du sorterar tabellen utifrån det valda fältet (om användaren klickar på Price så skall produkterna sorteras från lägsta till högsta pris, t.ex).

3. Skapa en ny PHP-sida (`addproduct.php`) där du skapar ett formulär i HTML. Du ska skicka formuläret med `POST` till `addproducts.php` (alltså samma sida). Formuläret ska innehålla alla fält du behöver för att kunna lägga till en ny pc eller laptop i databasen. Observera att du måste lägga produkten både i `pc`/`laptop`-tabellen samt i `products`-tabellen! Tänk också på att `pc` och `laptop` skiljer sig åt på ett av fälten (`rd` vs `screen`). Läs av formulärdatan med `$_POST`, och skapa SQL Querys för att spara produkten i databasen med en `INSERT INTO`. Efter att du har sparat, `echo` ut ett meddelande till användaren om att produkten har sparats. 

Tips: 
 * Du kan använda Select eller Radio Buttons för `maker` och `type`. 
 * Du kan göra en `COUNT` på `$_POST` för att se hur många fält som skickats. 
 * Du kan använda samma input-fält för `rd` och `screen`. 
 * `model` är "primary key" och en INT, så du kan inte ha flera produkter med samma model name, och den måste vara INT:able.

4. EXTRA UPPGIFT: Skapa en ny PHP-sida (`updateproduct.php`) där du har ett liknande formulär som det i förra uppgiften. Din sida ska läsa av `$_GET` för att se om det finns någon `model` och `type` i URL:en. Om det finns det ska du hämta produktinformationen från databasen och visa den informationen i formuläret. Du ska göra så att det inte går att ändra på `maker`, `model` eller `type` (du kan ta bort de fälten ur formuläret, eller göra en "disable"). När formuläret postas ska produkten uppdateras med `UPDATE`. Skapa en länk från varje produkt i `listproducts.php`-tabellen till `updateproduct.php` med `model`-numret och `type` i URL:en. 

5. EXTRA UPPGIFT: Gör så att du kan ta bort produkter i (`listproducts.php`). 

Tips: 
 * `model` är "primary key"
 * Glöm inte att ta bort produkten ur alla nödvändiga tabeller!