# Arrays

För att skapa en array använder man följande syntax:

```php
$myArray = array();
```

Detta skapar en tom array, `array()` indikerar att det är en array som skapas.

```php
$myArray = array( 1, 2, 3);
```

Varje värde i en array är separerade med ett komma. Det ska dock inte vara ett komma efter det sista värdet. Detta är en array med tre värden. Värde 1 har index 0, värde 2 har index 1 samt värde 3 har index 2. Platsen i arrayen börjar räknas ifrån 0.

## Övningar

1.

Vi ska börja med att skriva ut olika värden i en array. Om vi har en array som denna:

```php
$your_array = array(23, 45, 54, 12, 77);
```

* Skriv ut det första och sista värdet (23 & 77) i denna array med hjälp av `echo`
* Vilka index ligger värdena på?

2.

Om vi redan har en array som den ovan kan vi även direkt ändra på ett visst värde på samma sätt som när vi tilldelar en variabel ett värde med `=`.

* Ändra sista värdet i `$your_array` genom att tilldela det nya värdet `1`.
* `echo`a arrayen efter att du har lagrat det nya värdet för att se att värdet verkligen har ändrats.

3.

För att komma åt alla värden i en array vill vi ju inte skriva in varenda index, speciellt inte om vi inte vet hur lång arrayen är, alltså hur många värden som finns inuti den. Vi kan inte bara skriva ut hela innehållet i  arrayen med `echo $my_array` heller, det kommer bara att skriva ut hela arrayen och inte alla värden för sig. Tur att loopar finns.

Du har denna array:

```php
$best_array = array(1, 2, 3, 4, 5);
```

Nu ska du loopa igenom arrayen och skriva ut varje värde i arrayen. Tänk på att längden av en array kan man ta ut med `count($best_array)` samt att varje värde i en array har ett index som man kommer åt värdet ifrån. Indexet är då detsamma som det nuvarande värdet på räknaren i loopen.

* [**`count`** @ php.net](http://php.net/manual/en/function.count.php)

4.

Använd samma array som tidigare. Nu ska du dock loopa igenom arrayen och multiplicera varje värde i arrayen med summan av det föregående värdet. D.v.s, 1 * 2 * 3.. etc.

Spara värdet i en `$sum` och console.logga sedan ut denna variabel efter att loopen har körts klart

5.

Du ska utgå från följande array:

```php
$ok_array = array("fine", "FINE", "good", "what is this stuff?", "sweet", "i don't even live here");
```

Du ska loopa igenom arrayen och console.logga dess värden. Dock ska din loop inte skriva ut strängar som är längre än 5 tecken. `"fine"`, `"FINE"`, `"good"` och `"sweet"` ska alltså skrivas ut men inte `"whatisthisstuff?"` och `"i don't even live here"`. 

För att komma åt hur lång en sträng är kan man använda `strlen()`, en inbyggd funktion: [**`strlen()`** @ php.net](http://php.net/manual/en/function.strlen.php)

6.

```php
$worst_array_yet = array("string", true, 42, "another string", 54, true, 1);
```

För att få ut vilket värde en variabel är kan vi använda `is_string()` t.e.x. som returnerar true eller false baserat på om värdet är en sträng. Detta kan vi sedan använda i en if-sats.

Du ska loopa igenom arrayen `$worst_array_yet` och ska sedan `echoa` ut varje sträng som förekommer i arrayen. Men om värdet i arrayen är något annat ska det värdet läggas till i `$sum;` för att sedan efter att loopen är klar `echo`a ut.


## Lösningsförslag

1.
```php
$your_array = array(23, 45, 54, 12, 77);
echo $your_array[0]; //index 0
echo $your_array[4]; //Last index is 4, but length is 5
```

2.
```php
$your_array = array(23, 45, 54, 12, 77);
$your_array[0] = 1;
echo $your_array[4];
```

3.
```php
$best_array = array(1, 2, 3, 4, 5);
//The number of times the loop will runt is based on the length of the array
//5 items in the array == count($best_array) returns 5. 
for($i = 0; $i < count($best_array); $i++){
    //$i is 0,1,2,3,4, this can be used to access the value at these indexes
    echo $best_array[$i];
}

```

4.
```php
$best_array = array(1, 2, 3, 4, 5);
$sum = $best_array[0];
//The number of times the loop will runt is based on the length of the array
//5 items in the array == count($best_array) returns 5. 
for($i = 0; $i < count($best_array); $i++){
    //$i is 0,1,2,3,4, this can be used to access the value at these indexes
    $sum = $sum * $best_array[$i];
}
echo $sum;
```

<summary></summary>

5.
```php
$ok_array = array("fine", "FINE", "good", "what is this stuff?", "sweet", "i don't even live here");

for($i = 0; $i < count($ok_array); $i++){
    //$i is 0,1,2,3,4, this can be used to access the value at these indexes
    $current_string = $ok_array[$i];
    if(strlen($current_string) <= 5){
        echo $current_string;
    }
}
```


6.

```php
$worst_array_yet = array("string", true, 42, "another string", 54, true, 12);
$sum = 0;

for($i = 0; $i < count($worst_array_yet); $i++){
    //$i is 0,1,2,3,4, this can be used to access the value at these indexes
    $current_value = $ok_array[$i];
    if(is_string($current_value)){
        echo $current_value;
    } else{
        $sum = $sum + $current_value;
    }
}

echo $sum;
```