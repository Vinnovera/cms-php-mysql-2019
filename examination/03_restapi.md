# Gruppuppgift - API
> Skapa ett API med Slim & PDO
> 
> **Valfria grupper av 3 personer**
> 
> Betyg: **IG/G/VG**


## Uppgift

Ni som grupp ska skapa ett API med hjälp av PHP-ramverket [Slim](https://www.slimframework.com/) och databasen MySQL. Till detta API ska ni bygga ett enklare grafiskt gränssnitt med Javascript. Detta blir som ert eget CMS.

## Struktur av mappar och filer

* Ert projekt ska ha samma struktur som [slim-pdo-boilerplate-2](https://github.com/Vinnovera/cms-php-mysql-2019/tree/master/examples/slim/slim-pdo-boilerplate-2). 
* Er kod ska finnas på __GitHub__ och ha en `README` med följande information:
    - gruppens namn som ni bestämmer själva
    - gruppens medlemmars namn
    - länk till själva GitHub-repositoriet.

## Struktur av databasen

* `createdBy` ska vara ID på användaren som har skapat inlägget eller kommentaren.
* `entryID` på `comments` ska vara inlägget som kommentaren är kopplad till.

**`entries`**

| entryID      | title        | content       | createdBy  |   createdAt    |
| -------------| -------------| --------------| -----------|----------------|
| INT (AI)(PK) | VARCHAR(100) | VARCHAR(1000) |  INT       |   DATETIME     |

**`users`**

| userID       | username     | password     |
| -------------| -------------| -------------|
| INT (AI)(PK) | VARCHAR(50)  | VARCHAR(200) |

**`comments`**

| commentID    | entryID  | content      | createdBy      | createdAt  |
| -------------| ---------| -------------| ---------------| -----------|
| INT (AI)(PK) | INT      | VARCHAR(250) | INT            | DATETIME   |

## Krav

* Den första vyn ska visa en sammanfattning av de senaste 20 inläggen. 
* Det ska vara möjligt att klicka på en sammanfattning för att läsa hela inlägget. 
* När man läser hela inlägget ska man också få en lista på alla kommentarer till inlägget. 
* Det ska vara möjligt att registera en ny användare. 
* Det ska vara vara möjligt att logga in. 
* En inloggad användare ska kunna se en lista på alla sina inlägg. 
* En inloggad användare ska kunna skapa ett nytt inlägg. 
* En inloggad användare ska kunna redigera sina inlägg. 
* En inloggad användare ska kunna ta bort sina inlägg. 
* En inloggad användare ska kunna skapa en kommentar till ett inlägg. 
* En inloggad användare ska kunna redigera sina kommentarer. 
* En inloggad användare ska kunna ta bort sina kommentarer. 
* Det ska finnas en vy där man kan se alla användare. 
* Koden är konsekvent indenterad, kommenterad vid behov och väl namngiven.

## Krav för VG

* Koden är välstrukturerad och håller hög nivå både i gränssnittet och i det bakomliggande APIet. Det ska inte ligga kvar något "utvecklingskod" och produkten ska kännas färdig. Minimal upprepning av kod och det är tydligt vad varje del i applikationen gör. Gränssnittet är användarvänligt och lättförstått.
* Det ska gå att se äldre inlägg än de 20 senaste, med någon typ av "paginering". 
* En inloggad användare ska kunna "gilla" ett inlägg. 
* Det ska gå att söka efter inlägg utifrån vad som står i titeln eller i innehållet. 

## Inlämning

* Lämnas in senast: **28/5 23.59**
* Lämnas in via **Studentportalen**
* Lämnas in som:
```
gruppnamn_api.zip
```

**Ni ska zippa HELA mappen och inte gå in i mappen och zippa ihop filerna som ligger i mappen. Utan högerklicka på själva mappen och välj "Komprimera" eller liknande alternativ**