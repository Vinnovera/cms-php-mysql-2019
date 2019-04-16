# Iteration

Ibland behöver vi göra samma sak många gånger. Ibland behöver vi göra samma sak fast med en liten variation flera gånger. Så fort vi behöver göra någonting flera gånger bör vi se det som en ledtråd till att vi behöver **iterera**.
Som tumregel kan du tänka att vi använder for-loopar när vi vet hur många varv vi vill ”snurra”, när vi har ett fast värde vi ska nå. `while` använder vi oftast när vi inte vet hur länge vi ska **iterera**.

## `for`

```javascript
for($i = 0; $i < 10; $i = $i + 1){
    echo $i;
}
```

När vi skapar en for-loop kan vi se det som att vi ger den tre saker separerade med semi-kolon (`;`). Dessa tre är i ovan exempel:

1. `$ = 0`;
2. `$i < 10`;
3. `$i++`;

Detta kan översätta ungefär till:

1. Skapa en variabel vi vill använda som räknare, en variabel som håller koll.
2. Definiera ett **condition**, hur länge denna loop ska pågå (tills räknaren har nått 10)
3. **Inkrementera** vår räknare, hur mycket vår räknare ska öka varje gång. I detta fall ökar vi med 1 varje gång så vår loop kommer att köras **10 gånger**.

## Övningar

### Loopar

1.
Använd loopen från innan, fast istället för att skriva ut varje siffra: Lägg ihop sifforna i en ny variabel samt skriv ut den variabeln med `echo` efter loopen är slut. Du ska alltså lägga ihop alla värden till en variabel `$sum`.


2.
Skapa en `for`-loop som skriver ut varannat tal. Loopen ska gå från 0 till 10. Använd loopen från ovan.

3.
Skriv en `for`-loop som skriver ut värden åt andra hållet, så att siffrorna skrivs ut **10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0**

4.
Skriv en `for`-loop med ett **condition**(`if`-sats) som gör så att endast siffror som är __jämna tal__ skrivs ut till sidan.


5. 
Skriv en `while`-loop som gör samma som övning 4.

<summary></summary>

6.
Vad är skillnaden på de här två scripten? Vad kommer de båda skriva ut och varför?

```php
$num = 0;
while($num < 0){
    echo $num;
    $num++;
}
```


```php
$num = 0;
do{
    echo $num;
    $num++;
}while($num < 0);
```

7.
Mina får förökar sig snabbt och jag behöver ett php-script som kan räkna ut hur många de kommer att vara inom ett år. Varje månad kommer fåren att
multipliceras med 4. 

Använd dessa tre variabler nedanför:

```php
$numberOfSheep = 4;
$monthNumber = 1;
$monthsToPrint = 12;
```

För att sedan skriva ut detta för varje månad:

```bash
Output:
There will be 16 sheep after 1 month(s)!
There will be 64 sheep after 2 month(s)!

```

8.

Jag vill ha ett program som mjauar!

Programmet fungerar som så att den frågar användaren efter hur många mjau den vill ha. Om användaren skriver "3", ska programmet svara med "mjau mjau mjau". Om användaren skriver "4" ska programmet svara med "mjau mjau mjau mjau". Om användaren skriver "0" ska programmet "avslutas", d.v.s. inte ta in mer input.
Programmet ska fungera som följande: 

* Läs in ett tal från en variabel.
* Om talet är inte är `0`
    a. Skriv lika många _"mjau"_ som talet, i rad
* Annars skriv ut **"😾"** eller något annat.


## Lösningsförslag

### Loopar

1.
```php
//them sum is zero from start
$sum = 0;
//i++ is a shorthand for writing '$i = $i + 1'
for($i = 0; $i <= 10; i++){
    //we must always add the new value + the old sum
    //otherwise we will only store the newest value
    $sum = $sum + $i;
}
```

2.
```php
for($i = 0; $i < 10; $i = $i + 2){
    echo $i;
}
```

3.

```php
//start from 10, and as long as $i is above 0, echo.
//instead of doing $i = $i + 1 we are doing $i = $i - 1; reverse!
for($i = 10; $i > 0; i--){
    echo $i;
}
```

4.
```php
for($i = 0; $i < 10; $i++){
    if( $i % 2 == 0){
        echo $i;
    }
}
```


5.
```php
$number = 0;

while($number < 10){
    //If it's a even number, we wont get rest value, we will have 0
    if($number % 2 == 0){
        echo $number
    }
    //If we don't change the value of number, this loop will never end
    //the condition will always be met
    $number++;
}
```

6.

Eftersom vårt **condition** redan är mött så går vi aldrig in i `while`-loopen, vilket betyder att loopen aldrig körs. Men med en `do while` så går vi alltid in i loopen minst 1 gång, SEDAN kollar vi villkoret. Villkoret stämmer fortfarande inte men då har vi redan hunnit köra vår `do`.

<summary></summary>

7.
```php
$numberOfSheep = 4;
$monthNumber = 1;
$monthsToPrint = 12;

for ($monthNumber; $monthNumber <= $monthsToPrint; $monthNumber++){

    $numberOfSheep = $numberOfSheep * 4;
    echo 'There will be ' . $numberOfSheep . ' sheeps after ' . $monthNumber +' months(s)!';
}
```

8.
```php
$number_of_mjau = 10;    
if($number_of_mjau == 0){
    echo '😾';
} else {
    $all_the_mjaus = '';
    for($i = 0; $i <= $number_of_mjau; $i++){
        $all_the_mjaus = $all_the_mjaus . 'mjau ';
    }
    echo $all_the_mjaus;
}
```
