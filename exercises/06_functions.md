# Funktioner

**Tänk på att inte fastna för länge på en övning, testa en annan övning, det är inte säkert att den är svårare för att den kommer senare i listan. Kör på tills du känner att det sitter.**

Det är även ok att använda PHPs inbyggda funktioner, det är inte fusk bara man lär sig något. 🤓
 * [**String functions**](http://php.net/ref.strings)
    * [`substr`](http://php.net/manual/en/function.substr.php) 
    * [`strlen`](http://php.net/manual/en/function.strlen.php)
    * [`explode`](http://php.net/manual/en/function.explode.php)
    * [`str_replace`](http://php.net/manual/en/function.str-replace.php)
    * [`str_repeat`](http://php.net/manual/en/function.str-repeat.php)
 * [**Array functions**](http://php.net/manual/en/ref.array.php)
    * [`array_push`](http://php.net/manual/en/function.array-push.php)
    * [`array_pop`](http://php.net/manual/en/function.array-pop.php) 
    * [`array_sum`](http://php.net/manual/en/function.array-sum.php)
    * [`array_reverse`](http://php.net/manual/en/function.array-reverse.php)


En funktion ser oftast ut på följande sätt. Med `return` menar vi att ett värde ska skickas tillbaka till oss när vi kallar på funktionen **men inte skrivas ut**
```php
function function_name($parameter){
    return $parameter;
}
```

Om vi vill direkt skriva ut ett värde måste vi använda `echo`:
```php
function function_name($parameter){
    echo $parameter;
}
```

Det som är innanför paranteserna är __parametrar__. De parametrar som skickas med kan användas inom funktionen utan att deklareras och vi kan använda parametern inom vår funktion. Funktionen är dock bara HUR programmet ska funka och funktionen gör ingenting förrän vi kallar på funktionen och skickar med värden. Detta betyder att vi kan skapa kod som KAN användas men används bara när vi bestämmer oss för att kalla på koden.

Om vi ska skicka med värden skickar vi med dem som __argument__. De argument vi skickar med till funktionen blir funktionens parametrar. Om vi ska kalla på en funktion samt skicka med ett argument gör vi på följande sätt:

```php
function function_name($parameter){
    return $parameter;
}

$my_name =  function_name('Jesper');
echo $my_name;
//Output: Jesper
```

<summary></summary>

## Övningar

1 .
* Skapa en funktion: `multiply`, som tar in 2 _parametrar_.
I funktionen, multiplicera dessa nummer med varandra och  `echo` resultatet av multiplikationen. Du får använda vilka namn du vill på parametrarna.
* Kalla på din funktion multiply med siffrorna 8,4 som _argument_
* Om du gjort rätt ska du få siffran 32.

2 .
* Skapa en funktion som heter `calculate` och som istället tar 3 parametrar och sedan multiplicerar de två första parametrarna med varandra och delar värdet med den tredje parametern, alltså: `param1 * param2 / param3`. Funktionen ska sedan `echo` ut svaret.
* Kalla sedan på din funktion med valfria värden.

3 . 
* Skriv en funktion som heter `highest_number` som tar två tal som parametrar.
* Funktionen ska sedan jämföra vilket av talet som är störst och `echo` det största talet.
* Kalla på din funktion med två valfria värden.

4 . 
Koden ovan är dock inte optimal. För det mesta vill vi att funktioner endast returnerar värden. En funktions uppgift ska vara att returnera värden så att vi kan återanvända det värdet och sedan forsätta göra mer beräkningar på det. När vi har massa `echo` på det här sättet blir koden svårare att återanvända så vi vill nu skriva om våra funktioner så att de endast returnerar värden.

__Refaktorera__ dina funktioner som du tidigare skapade: 

* De två första funktionerna (multiply och calculate) ska __returnera__ det slutgiltiga värdet av beräkningarna. Sedan måste du spara värdena för att sedan använda `echo` på dem.
* Den tredje funktionen `highest_number` ska __returnera__ det högsta värdet av de två värden som skickas in som parametrar. Om dock värdet inte är ett nummer ska funktionen returnera `false` och om de båda parametrarna är samma värde ska funktionen returnera _"Samma värde"_

Spara värdena som returneras på följande sätt:

```php
$multiply_answer = multiply(5,5);
echo $multiply_answer;
```

<summary></summary>

5 .
Skriv en funktion som tar in en parameter. Parametern ska vara en string. Funktionen ska sedan returnera strängens längd på detta sätt:

```bash
"Strängen du matade in är 14 tecken lång"
```

6 .

Skapa en funktion som heter `convert_string`, funktionen ska ta **två parametrar**. Den första parametern ska vara en sträng som skickas med, typ: _"Goodbye World"_. Den andra parametern som skickas med ska bestämma om strängen ska konverteras till bara stora bokstäver eller bara små bokstäver. Till detta kan man använda hjälpfunktionen: `strtolower($string)` och `strtoupper($string)`

7 . 
Skapa en funktion som tar en parameter, argumentet som skickas in ska vara en sträng. Funktionen ska sedan returnera det sista tecknet i strängen som skickas in.

8 .
Skriv en funktion med namnet make_paragraph som skriver ut en sträng som HTML-elementet `<p>`. Exempel: _"hej"__ ska skrivas ut som _"`<p>hej</p>`"_. Funktionen ska ha en parameter, som är strängen som ska skrivas ut, och den ska inte returnera något bara `echo`a ut.

9 .
Funktionen `make_paragraph()` är lite begränsad. Tänk om vi vill göra `<h1>`-taggar? Eller `<h2>`, `<h3>` osv. Skriv en ny funktion med namnet make_heading. Funktionen behöver veta strängen som ska skrivas ut och vilken heading det ska vara. Den behöver alltså två parametrar.

10 .
Nu har vi två funktioner som vi kan använda för att skapa HTML-paragrafer och headings. Men det blir väldigt många funktioner om vi ska ha en funktion för varje möjligt HTML-element. Vi behöver en funktion som kan göra flera sorters element. Skriv en funktion make_tag som kan göra alla sorters HTML-element.

11 .
Förbättra `make_tag` så att man kan ange inline styles också. (Eller href för länkar)
Exempel: `<p style="color: hotpink;">Exempeltext</p>`

12 .
Skriv en funktion som gör om en array till en lista i HTML. Använd funktionen make_tag. Exempel: `make_list( [1, 2] )` → `"<ul> <li>1</li> <li>2</li> </ul>"`

13 .
Skriv en funktion som genererar en random färg.

14.
Skriv en funktion som avrundar en float till närmaste heltal med hjälp av typecast.
```
Exempel: round(3.9) → 3, round(5.5) → 6.
```

15 .
Skriv en funktion som räknar ut summan av alla tal i en array. Skriv en annan som räknar ut medelvärdet.

16 .
Skriv en funktion som tar en sträng som motsvarar en veckodag som parameter och returnerar en siffra. Om strängen är "måndag" ska funktionen returnera 1, "tisdag" ska bli 2 och "söndag" ska bli 7.
Funktionen ska fungera oavsett om veckodagen står med små eller stora bokstäver.

<summary></summary>

## Lösningsförslag

1.
```php
/*
 * x, y are parameters
 */
function multiply($x,$y){
   echo $x * $y;
}

//Use case, when called, it will echo the result of the arguments
multiply(5,5);
```

2.
```php
function calculate($x,$y,$z){
    echo ($x*$y) / $z;
}

//use case
calculate(5,10,2);
```

3.
```php
function highest_number($x,$y){
    /* If x is higher than y, return x */
    if( $x > $y){
        echo $x;
    }
    /* or else y is higher */
    else{
        echo $y;
    }
}

//Use case
highestNumber(5,4);

```

4.
```php
function multiply($x,$y){
   return $x * $y;
}

//Use case, we must first store the value
$answer = multiply(5,5);
echo $answer;
//or we can print it directly
//echo multiply(5,5);

function calculate($x,$y,$z){
    return ($x*$y) / $z;
}

//use case
$answer = calculate(5,10,2);
echo $answer

```

<summary></summary>

5.
```php
function string_checker($string_to_check){
    //Use the built in function `strlen`
    $string_length = strlen($string_to_check);
    return "Strängen du matade in är " + $string_length + " tecken lång";
}

//Vi skickar in en valfri sträng som argument
echo string_checker('Huburru Hubburru');

```

6.
```php
function string_converter($string_to_convert, $up_or_down){
    if($up_or_down == 1){
        return strtoupper($string_to_convert);
    } else{
        return strtolower($string_to_convert);
    }
}

echo string_converter("Hello", 1);
```

<summary></summary>

7.
```php
function string_checker($string_to_check){
    //Use substring, which extract a part of a string,
    //we can use a negative index to start from the back
    return substr($stringToCheck, -1);
}

echo string_checker("Hubburu"); //u
```


8, 9, 10
```php
function make_paragraph($hej) {
    echo "<p> $hej </p>";
}
function make_heading($text, $number) {
    /*  
     *  Alternative syntax:
     *  echo "<h" . $number . ">" 
     *  . $text . "</h" . $number . ">";
     */
    echo "<h$number> $text </h$number>";
}
function make_tag($text, $tag) {
    echo "<$tag> $text </$tag>";
}
```

11. 
```php
function make_tag($text, $tag, $style, $href) {
    //if values are empty, return tag as is 
    if ( $style === '' && $href === '' ) {
        echo "<$tag> $text </$tag>";
    }
    /*
     * Escape "" with \ like this: \" so they are treated as actual quotes and 
     * not a part of the string in PHP.
     */
    else if ( $style === '' && $href !== '' ) {
        echo "<$tag href=\"$href\">$text</$tag>";
    }
    else if ( $style !== '' && $href === '' ) {
        echo "<$tag style=\"$style\">$text</$tag>";
    }
    else {
        echo "<$tag style=\"$style\" href=\"$href\">$text</$tag>";
    }
}
```

<summary></summary>

//Store the  returned array in `$my_array`
$my_array = random_number_array_generator();
//Then loop through each value
foreach( $my_array as $value ) {
    echo "<p>Random value is: $value</p>";
}
```


12.
```php
function make_list($array) {
    //Open up a `<ul>`-element
    $list = "<ul> ";
    foreach( $array as $value ) {
        //$text, $tag, $style, $href, function we created before
        $li = make_tag($value, "li", "", "");
        $list = $list . $li;
    }
    //close the list when all items are added
    $list = $list . " </ul>";
    //Return the list
    return $list
}

//Use case
$my_array = random_number_array_generator();
$html_lista = make_list($my_array);
echo $html_lista;
```

<summary></summary>

13.
```php
function random_color(){
    //A color is a combination of red, green and blue values
    $r = mt_rand(0, 256);
    $g = mt_rand(0, 256);
    $b = mt_rand(0, 256);
    echo "rgb($r,$g,$b)";
}
```

14 .
```php
function my_round($x) {
    //(int) casts variable to int if not int, will convert float to int
    return (int)($x + 0.5);
}
```

15.
```php
function sum($array) {
    $sum_of_array = 0;
    for( $i=0; $i < count($array); $i++ ) {
        $sum_of_array = $sum_of_array + $array[$i];
    }
    return $sum_of_array;
}
```

16.
```php
function weekday_to_number($weekday) {
    /*
     * Always be sure to convert to lowercase or uppercase
     * when comparing case sensitive strings
     */
    $weekday = strtolower($weekday);
    switch($weekday) {
        case "måndag": 
            return 1;
        case "tisdag": 
            return 2;
        case "onsdag": 
            return 3;
        case "torsdag": 
            return 4;
        case "fredag": 
            return 5;
        case "lördag": 
            return 6;
        case "söndag": 
            return 7;
        default: 
            return "ERROR";
        }
    }
```