# Slim REST API - `GET`

## Länkar

* [**Slim Framework**](https://www.slimframework.com/)
* [**Awesome REST API Resources**](https://github.com/marmelab/awesome-rest)

## Installation

* Följ instruktionerna i repot: **[slim-pdo-boilerplate](https://github.com/Vinnovera/cms-php-mysql-2019/tree/master/examples/slim/slim-pdo-boilerplate)**

## Övningar

>**Koppla upp dig mot databasen `journal` som du har skapat till den individuella uppgiften**. Det går även bra att använda en kopia av denna databas eller skapa en helt ny databas, huvudsaken är att du har något innehåll att arbeta med. 

OBS OBS OBS! Om du behöver skicka in en INT till ditt SQL statement (t.ex. till en LIMIT), så måste du skriva din kod lite annorlunda. Istället för att skicka in din variabel i execute, så behöver du "binda" den med bindParam:

```php
$app->get('/entries/last/{num}', function($req, $resp, $args){
  $num = $args['num'];
  $statement = $this->db->prepare("SELECT * FROM entries LIMIT :num");
  $statement->bindParam(':num', $num, PDO::PARAM_INT);
  $statement->execute();
  $entries = $statement->fetchAll(PDO::FETCH_ASSOC);
  return $resp->withJson($entries);
 });
```
[Läs mer här](https://stackoverflow.com/questions/10617894/setting-pdo-mysql-limit-with-named-placeholders)

OBS! Det går INTE att blanda `bindParam()` och att skicka in dina variabler i `execute()`. Om du ska använda t.ex. `LIMIT` och därmed `bindParam()`, skicka ALLA variabler med `bindParam()` och skicka inte med något i `execute()`.

Hämta med `GET`: besök dina URLer via webbläsaren.
Alla routes ska svara med JSON.
* Skapa en `GET` route som hämtar alla användare (tänk på att INTE visa password-fältet)
* Skapa en `GET` route som hämtar en enskild användare (tänk på att INTE visa password-fältet )
* Skapa en `GET` route som hämtar alla inlägg
* Skapa en `GET` route som hämtar de X senaste inläggen
* Skapa en `GET` route som hämtar de X första inläggen
* Skapa en `GET` route som hämtar alla inlägg som är skrivna av en specifik användare
* Skapa en `GET` route som hämtar de X senaste inläggen som är skrivna av en specifik användare
* Skapa en `GET` route som hämtar de X senaste inläggen som är skrivna av en specifik användare
* Skapa en `GET` route som hämtar de X första inläggen som är skrivna av en specifik användare
