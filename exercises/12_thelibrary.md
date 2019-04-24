# The Library

Under dagens lektion byggde vi en enkel grund för en hemsida för ett bibliotek. Du kan hitta koden för det bygget i filen `base_library.zip` som ligger i samma mapp som denna övning på GitHub: [base_library.zip](base_library.zip), men om du var med på lektionen bör du redan ha detta förberett. 

Nu ska du själv utöka bibliotekshemsidan med ytterligare funktionalitet.

## Övningar

1. Visa vilken sida användaren befinner sig på. Vi använder CSS-biblioteket Spectre på den här hemsidan, och i sidans navigering använder vi oss av [Tabs](https://picturepan2.github.io/spectre/components/tabs.html). Det går att lägga till en klass som heter `active` på `a`-taggen för att visa vilken sida som är aktiv. Kolla på `$page`-variabeln och skriv ut `active`-klassen om användaren är på rätt sida. 

2. Just nu så händer ingenting om användaren försöker gå till en sida som inte finns. Skapa en ny vy som heter `PageNotFoundView` som skriver ut ett meddelande i en `p`-tagg om användaren skriver in en sida som inte finns (t.ex. `?page=hats`). Använd en `default` i `switch`:en i `router.php` för att visa den. 

3. Det är inte så tydligt vad varje fält i tabellen över böcker representerar. Lägg till en table header (`<thead>`) i tabellen och skriv ut en header för varje fält: Title, Author, Genre, Page Count. 
Tänk på att eftersom du använder `render` i `BaseView`så behöver den skrivas om för att också kunna skriva ut en header. Ändra därför så att `render` i både `BaseView` och i `BookView` nu tar emot TVÅ argument. 
Skicka också in dina titlar när du kör `BookView::render` i `router.php`, t.ex: `BookView::render($heads, $data);`. 

4. Biblioteket lånar inte bara ut böcker, det går att låna CD också. Lägg till en ny modell (t.ex. `CDModel`), en ny vy (t.ex. `CDView`) och en ny länk i navigeringen för att visa CD-skivor (t.ex. `page=cd`). CD-skivorna har lite andra egenskaper än böckerna. Istället för `$author` och `$pageCount` så ska CD-skivorna ha `$artist` och `$length`.

5. Det vore praktiskt att se om böckerna och skivorna redan är utlånade eller inte. Lägg till en `$isBorrowed`-egenskap i `BaseLibraryModel`, och lägg även till att du kan sätta `$isBorrowed` i konstruktorn för `BookModel` och `CDModel`. Fixa också så att du kan se om boken är lånad eller inte i tabellen. 
Du kan t.ex. använda ikoner från Spectre för att göra detta. [Spectre Icons](https://picturepan2.github.io/spectre/elements/icons.html): `<i class="icon icon-check"></i>`

6. Extra uppgift: Lägg även till så att biblioteket kan låna ut filmer. Istället för `$author` eller `$artist` ska det finnas två nya fält: `$director` och `$actors`. `$actors` ska vara en array med flera olika skådespelare. 
