# Single Page Application

## FormData

Vi kan skicka data med Javascript istället för med HTML Forms. Ett sätt att skapa själva formulärdatan är att använda FormData: [Using FormData Objects](https://developer.mozilla.org/en-US/docs/Web/API/FormData/Using_FormData_Objects)

Det går att skapa ett "formulär" själv, eller att skapa objektet utifrån ett färdigt formulär:

```javascript
const formElement = document.getElementById('form');
const formData = new FormData(formElement);
```

## Fetch

Det finns lite olika sätt att skicka data med Javascript, men standard nu är att använda Fetch. Fetch använder sig av Promises. Promises är ett sätt att handskas med asynkron kod i Javascript. Det är en slags funktion som kommer försöka göra något, och sedan berätta när försöket lyckats (eller misslyckats). Promises går att knyta ihop i s.k. "promise"-kedjor, något vi kan se ett exempel på nedan:

[Promises](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Promise)
[Introduction to Fetch](https://developers.google.com/web/updates/2015/03/introduction-to-fetch)

```javascript
fetch('api.php', {
  method: 'POST', // Vi använder POST när vi skickar formulärdata
  body: formData // Använd FormData-objekt som body
})
  .then(response => {
    // Utifall att något gick fel kan vi kasta ett error,
    // då hoppar vår promise-kedja till "catch" nedan
    if (!response.ok) {
      throw Error(response.statusText);
    }
    
    // Utifall att vi har fått JSON från servern behöver vi tolka JSON
    // Denna funktion är ett promise, så vi använder en return för att fortsätta promise-kedjan
    return response.json();
  })
  .then(data => {
    // "data" här är resultatet från response.json() ovan
  })
  .catch(err => {
    // Do something with the error
  });
```

## Skicka olika typer av svar från PHP

I en mer komplex applikation skulle vi ha olika filer som kunde handskas med olika typer av anrop, och antagligen en startpunkt som kan dirigera om de olika anropen. Ofta använder man ramverk som Laravel eller Slim för detta, men just nu håller vi oss till vanilla PHP i en enskild fil. 

Vi kan använda `isset` och `$_POST` för att se vilken typ av data som skickats:

```php
  if (isset($_POST['username']) {
    if ($_POST['username'] == 'correctuser') {
      // Skicka ett lämpligt svar när det är rätt användare
    } else {
      // Skicka ett annat svar när det är fel användare
    }
  }
```

Ifall vi vill skicka data kan vi använda `json_encode` för att göra om en array till ett JSON-objekt och svara med detta:

```php
$user_data = [
  'username' => 'correctuser',
  'age' => 36,
  'job' => 'developer'
];
echo json_encode($user_data);
```

Om vi istället vill skicka en header som säger att något gick fel kan vi skicka en reponse status med `http_response_code`:

```php
http_response_code(403); // Access is denied
```

## Övning

1. Skapa en HTML-fil med ett formulär. Formuläret skall ha två fält: *username* och *password*, samt en submitknapp. Skriv ett javascript som tar formulärdatan och skickar den till en PHP-fil. 

2. PHP-filen ska kolla om *username* och *password* har skickats. Om det är rätt användarnamn och lösenord (välj något själv du tycker passar), så skall PHP-filen skicka ett svar i JSON-format som berättar att användaren har lyckats logga in. Om det är fel användarnamn och lösenord skall PHP-filen istället skicka en `403`-respons. 

3. Skriv ett tillägg till ditt javascript som handskas med svaret från PHP-filen. Om du får ett svar som säger att inloggningen gick rätt skall du dölja ditt loginformulär, och istället visa ett meddelande som säger att användaren lyckats logga in. Om du får ett `403`-svar skall du istället visa ett felmeddelande. 

4. Skriv ett tillägg till din javascript-kod som när användaren lyckats logga in så finns en knapp med texten: "Hämta meddelanden" eller liknande. När användaren klickar på knappen skall du skicka en förfrågan till din PHP-fil om att hämta meddelanden (du kan t.ex. skicka en GET till URLen `api.php?messages=true` eller något i den stilen). 

5. Skriv kod i din PHP-sida som kollar om meddelanden skall hämtas, och i sådana fall svara med JSON med en array med meddelanden. 

6. I din javascript-kod ska du nu lägga till kod som handskas med meddelandena från PHP-sidan, och skriver ut dem i en `UL`-lista. 
