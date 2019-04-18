# Datatyper

* `String`
    * Definieras med `''` eller `""`, allting som är text eller `html`.
* `Integer`
    * Alla siffror utan decimaler: `10`
* `Float`
    * Alla siffror med decimaler: `10.5`, `-5.05`, `3.14`
* `Boolean`
    * Kan antingen vara `true` eller `false`


### Skriva ut data

* `echo`    
    * Skriver ut information på din sida
* `print`
    * Skriver ut information på din sida
* `var_dump($var_name)`
    * "Dumpar" information på din sida, används för debugging.

_exempel_
```php
<?php
    $huge = 100000000;
    echo $huge;         //I am basically the same as print
    print $huge;        //I am basically the same as echo
    var_dump($huge);    //I print extra metadata about the variable
?>
```

## Övningar

### Datatyper

1. Skapa dessa 6 olika variabler lägg ihop dem enligt instruktionerna nedan och `echoa` ut resultatet, diskutera med en klasskamrat och försök komma fram till varför vi får det resultat vi får. Svar finns under lösningsförslag. Litet exempel på hur dynamiskt typade språk fungerar!
```php
$firstName = "5Casper";  //new name law since this summer, probably valid name
$lastName = "Gormy";
$age = "42";
$z_index = 999;          // I'm in front of you
$is_human = true;        // 🤖?
$is_a_chair = false;     //don't label me!
```
   
* Multiplicera `$age` med `$z_index`
* Dividera `$z_index` med `$is_a_chair`;
* Dividera `$z_index` med `$is_human`;
* Multiplicera `$is_human` med `$z_index`;
* Addera `$lastName` med `$age`;
* Addera `$firstName` med `$z_index`;
* Multiplicera `$firstName` med `$is_human`;

2. **Vilka** av nedanstående alternativ sparar en sträng på rätt sätt och varför? Varför funkar inte de alternativ som inte fungerar?:
```
$_message = 'These are not the potatotes you're looking for';
$1message = "These are not the potatoes you're looking for";
$message = "These are not the potatoes you're looking for";
$jävla_skit = "These are not the potatoes you're looking for";
$Message1 = 'These are not the potatoes you\'re looking for';
```

3.
Skriv ett PHP-program där du har ett valfritt tal. Du ska med echo skriva ut vad resten blir från talet när du delar talet med 2. Resten av divisionen fås när talet beräknas med modulo 2 (%).
Lagra resultatet i en ny variabel `$result` och skriv ut denna variabel enligt exemplet nedan:
_exempel på hur det ska skrivas ut_
__Värde: 10__
Resten av talet % 2 är: 0
__Värde: 5__
Resten av talet % 2 är: 1

<summary></summary>

## Lösningsförslag

### Datatyper

1.

* Multiplicera `$age` med `$z_index`
    *  Alla strängar som bara är nummer blir automatiskt castade, konverterade, till ett nummer så vi kan använda operatorer på strängar.
* Dividera `$z_index` med `$is_a_chair`
    *  `false`  blir alltid **0**, och vi får inte dividera med 0 så här kommer vi att få ett error.  
* Dividera `$z_index` med `$is_human`
    * `true` blir alltid **1**, så här får vi dock ett värde! 
* Multiplicera `$is_human` med `$z_index`
    * Samma här, detta blir 999 * 1
* Addera `$lastName` med `$age`
    * Om dock strängen inte är ett nummer så kommer strängen att ignoreras och enbart det ena värdet kommer att skrivas ut 
* Addera `$firstName` med `$z_index`
    * Dock om strängen har en siffra INNAN själva strängen börjar så kommer den siffran att användas och göra en beräkning, så det här blir faktiskt 5 * 999 
* Multiplicera `$firstName` med `$is_human`;
    * Samma här, `"5Casper"` blir till 5 och `true` blir till 1. Så 5*1 == 5

2.
```
// the you're makes it so that the string ends at you'
$_message = 'These are not the potatotes you're looking for';
// variable can not start with number
$1message = "These are not the potatoes you're looking for";
//this is fine
$message = "These are not the potatoes you're looking for";
//this is also fine but not recommended to have åäö in name
$jävla_skit = "These are not the potatoes you're looking for";
//this is also fine because we escaped the ' with \'
$Message1 = 'These are not the potatoes you\'re looking for';
```


3.
```php
$number = 10;
$result = $number % 2;
echo "Resten av talet modulo 2 är: $result";
```
