# SQL och JOINS

## Övningar

Börja med att ladda hem och sedan importera products.sql till din database TheStore. Detta gör du genom att gå till din databas och välja Import sedan välja filen products.sql. När du är klar trycker du på Go. Samma som i tidigare övning med städerna.

1. Hur mycket kostar tillverkare "A":s PC-datorer? Kombinera Product och PC med en INNER JOIN för att slå ihop tabellerna, och visa modelnumret och priset. 

2. Visa hur mycket RAM varje laptop har och vem som är tillverkare för varje laptop.

3. Visa vilka tillverkare som tillverkar laserskrivare.

4. Visa alla tillverkare som gör en laptop med 64 eller 96 GB RAM.

5. Visa modellnummer och pris för alla PC, Laptop och Printer i samma resultattabell med UNION.

6. Visa alla PC-datorer och laptopar som har minst 128 MB RAM. Sortera så att den billigaste visas först.


## Lösningsförslag

1.
```sql
SELECT pc.model AS model, pc.price as Price FROM pc
INNER JOIN product as p
ON pc.model = p.model AND p.maker = "A";
```

2. 
```sql
SELECT laptop.model, laptop.ram, product.maker FROM laptop
INNER JOIN product
ON laptop.model = product.model;
```

3. 
```sql
SELECT DISTINCT product.maker FROM printer
INNER JOIN product
ON printer.model = product.model AND printer.type = "laser";
```

4. 
```sql
SELECT DISTINCT p.maker FROM product p
JOIN laptop l
ON l.model = p.model
WHERE (l.ram = 64 OR l.ram = 96) AND p.type = "laptop";
```

5. 
```sql
SELECT model, price FROM laptop
UNION
SELECT model, price FROM pc
UNION
SELECT model, price FROM printer;
```

6.
```sql
SELECT * from PC
WHERE ram >= 128
UNION
SELECT * from laptop
WHERE ram >= 128
ORDER BY price ASC;
```
