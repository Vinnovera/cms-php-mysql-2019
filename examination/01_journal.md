# Individuell - Personlig Journal
> Skapa en personlig journal med PHP & MySQL
> 
> **Individuell**
> 
> Betyg: **IG/G**

## Uppgift

Du ska skapa en personlig journal (tänk dagbok) där du kan spara olika inlägg. Alla inlägg ska lagras i en MySQL-databas och alla inlägg ska vara kopplade till en användare. Journalen ska vara en enklare sida i PHP som har ett inloggningsformulär för att verifiera vem användaren är. Man ska också kunna registrera en ny användare. När man har loggat in ska man sedan kunna se sina tidigare gjorda inlägg samt kunna lägga till ett nytt inlägg i journalen. 

## Databasstruktur

Den databas där dina tabeller ska ligga i ska heta: `journal`. 

Vidare ska dina tabeller ha följande struktur och namn:

**`entries`**

| entryID      | title        | content       | createdAt |  userID       |
| -------------| -------------| --------------| ----------|---------------|
| INT (AI)(PK) | VARCHAR(100) | VARCHAR(1000) | DATETIME  | INT           |

**`users`**

| userID       | username     | password     |
| -------------| -------------| -------------|
| INT (AI)(PK) | VARCHAR(50)  | VARCHAR(200) |

## Struktur av mappar och filer

Det finns inga krav på att följa någon särskild filstruktur, men tänk på att det ofta hjälper att dela upp koden. Ni måste inte använda klasser i det här projektet, men det kan göra koden enklare att läsa. 

## Krav

* I inloggat läge ska man kunna se alla sina tidigare inlägg och det ska finnas ett formulär där man kan skapa ett nytt inlägg med en titel och ett innehåll. När man lägger till det nya inlägget via formuläret så laddas sidan om och i listan av inlägg finns det nya inlägget.

* I inloggat läge ska man även kunna ta bort ett tidigare inlägg.

* Det ska även finnas en utloggningsknapp så man kan manuellt logga ut.

* I utloggat läge sidan ha ett inloggningsformulär där användaren kollas mot databasen om användaren finns eller inte. Om användaren existerar i databasen så ska man komma till det inloggade läget som beskrevs tidigare.

* Om man stänger ner sidan och öppnar den igen så ska man fortsätta vara inloggad och inte behöva logga in igen. 

* Lösenordet för användaren får inte lagras i klartext utan måste hashas innan det läggs in i databasen, lösenordet måste senare verifieras mot denna hash, detta görs med PHPs inbyggda funktioner för detta.

* Journalen skall vara någorlunda stylad med CSS. Du kan antingen använda ett färdigt ramverk som t.ex. [Spectre](https://github.com/picturepan2/spectre)

## Inlämning

* Lämnas in via **Studentportalen** under **Individuell 1 - Journal**
* Lämnas in som:
```
förnamn_efternamn_journal.zip
```

**Du ska zippa HELA mappen och inte gå in i mappen och zippa ihop filerna som ligger i mappen. Utan högerklicka på själva mappen och välj "Komprimera" eller liknande alternativ**