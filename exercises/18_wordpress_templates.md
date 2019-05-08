# Wordpress Page Templates

## Länktips
 * [Anatomy of a Wordpress Theme](https://yoast.com/wordpress-theme-anatomy/)
 * [Page Template Files](https://developer.wordpress.org/themes/template-files-section/page-template-files/)
 * [Wordpress Function Reference](https://codex.wordpress.org/Function_Reference/#Functions_by_category)

## Övning: Portfolio del 2

Vi ska över tid bygga en portfolio-sida i Wordpress. Idag ska vi skapa templates för våra sidor. 

När du skapar en ny template, utgå från motsvarande template i det tema du bygger till child theme på. Om du t.ex. ska skapa en egen 404-sida, kopiera 404.php från temat du utgår ifrån in i din egen mapp. Ändra sedan på kopian. 

Om det inte finns en exakt matchande sida (t.ex. om du vill skapa en specifik template för din "about"-sida), utgå från närmast matchande. I exemplet med en "about"-sida, kopiera `page.php` och döp din kopia till `page-about.php`, och gör sedan dina ändringar där. 

Det finns ett särskilt fall för startsidan. I vanliga fall är det `home.php` som är template, eftersom vi har satt att vi ska ha en static front page så kommer den istället använda `page.php` som template. Skapar vi däremot `front-page.php` kommer den ha företräde och användas på startsidan. 

## Övningar

1. Skapa en egen 404-template. `404.php` (utgå från `404.php` i ditt parent theme)
2. Skapa en egen template för din startsida. `front-page.php` (utgå från `page.php` i ditt parent theme)
3. Skapa en template för din nyhetssida. `home.php` (utgå från `index.php` i ditt parent theme)
4. Skapa en template för din about-sida. `page-about.php` (utgå från `page.php` i ditt parent theme, glöm inte att `about` ska vara samma som din about-sidas "slug", alltså adressnamnet). 
5. Justera header, footer och eventuellt sidebar som du känner för! (kopiera `header.php`, `footer.php` och eventuellt `sidebar.php` från ditt parent theme och gör förändringar i dem).
