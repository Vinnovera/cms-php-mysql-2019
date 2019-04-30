<?php require 'connect.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Products</title>
</head>
<body>
  <?php

    // Write a query to select from two tables, pc and product
    $query = 'SELECT product.maker, product.type, pc.model, pc.speed, pc.ram, pc.price FROM pc';
    $query .= ' INNER JOIN product ON pc.model = product.model';
    $query .= ' UNION';
    $query .= ' SELECT product.maker, product.type, laptop.model, laptop.speed, laptop.ram, laptop.price FROM laptop';
    $query .= ' INNER JOIN product ON laptop.model = product.model';

    // Check if GET orderby is set (does it exist in querystring?)
    if (isset($_GET['orderby'])) {
      // Add an ORDER BY clause to the SQL Query
      $query .= " ORDER BY {$_GET['orderby']}"; // Use curly brackets when assoc array value in string
    }

    // Prepare a statement, and make a fetch to get data to read
    $statement = $pdo->prepare($query); 
    $statement->execute(); 
    $data = $statement->fetchAll(PDO::FETCH_ASSOC); // Get ALL rows, as assoc arrays
  ?>
  <table>
    <thead>
      <!-- A link to sort the table, send data as querystring -->
      <th><a href="?orderby=maker">Maker</a></th>
      <th><a href="?orderby=type">Type</a></th>
      <th><a href="?orderby=model">Model</a></th>
      <th><a href="?orderby=speed">Speed</a></th>
      <th><a href="?orderby=ram">Ram</a></th>
      <th><a href="?orderby=price">Price</a></th>
      <th>Edit</th>
    </thead>
    <tbody>
    <?php
      // Loop through all products
      foreach ($data as $product) {
    ?>
      <tr>
        <td><?= $product['maker'] ?></a></td>
        <td><?= $product['type'] ?></td>
        <td><?= $product['model'] ?></td>
        <td><?= $product['speed'] ?></td>
        <td><?= $product['ram'] ?></td>
        <td><?= $product['price'] ?></td>
        <!-- A link to the update product page, send model and type as querystring  -->
        <td><a href="updateproduct.php?model=<?= $product['model'] ?>&type=<?= $product['type'] ?>">Edit</a></td>
      </tr>
    <?php
      }
    ?>
    </tbody>
  </table>
</body>
</html>