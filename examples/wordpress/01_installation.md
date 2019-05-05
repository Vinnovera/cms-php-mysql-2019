# Wordpress installation

## Lästips

* [Installing Wordpress](https://codex.wordpress.org/Installing_WordPress)

## Instruktioner 

1. Ladda hem Wordpress (en ZIP-fil) från Wordpress.org: [Download Wordpress](https://wordpress.org/download/)

2. Skapa en ny mapp i `htdocs` (för MAMP) och döp den till nåt i stil med `wp`, `wordpress` eller `portfolio`. Unzippa innehållet i Wordpress-filen i den mappen.

3. Skapa en ny databas i phpMyAdmin och döp den till något som matchar namnet på din mapp. 

4. Gå till `http://localhost:8888/<mappnamn>`. Här kan du starta Wordpress "5 minute installation".

5. Fyll i dina databasuppgifter. Om du har en vanlig MAMP-installation borde det vara följande:
 * `<databasnamn>`
 * `root`
 * `root`
 * `localhost:8889`
 * `wp_`

6. Fyll i information för att namnge din Wordpress-sajt, t.ex:
 * `<sajtnamn>`
 * `<användarnamn>`
 * `<lösenord>`
 * `<mailadress>`

7. Gå till `http://localhost:8888/<mappnamn>/wp-admin` och logga in för att komma till Wordpress administrationsvy. 

Klart!
