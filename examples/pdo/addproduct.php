<?php require 'connect.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add Product</title>
</head>
<body>
  <?php
    // Count the amount of post data (in a real project, NOT good enough! Test data contents more)
    if(count($_POST) == 8) {
      // We need to save data to TWO tables, first, either pc or laptop
      // Then we add data to the product table
      
      // Create a query, let's add a new row with these fields, ? means a placeholder
      $query = "INSERT INTO {$_POST['type']} VALUES (?, ?, ?, ?, ?, ?)";
      $statement = $pdo->prepare($query); // Prepare
      $statement->execute([
        $_POST['model'],
        $_POST['speed'],
        $_POST['ram'],
        $_POST['hd'],
        $_POST['rd_screen'],
        $_POST['price']
      ]); // Add data to replace the placeholder, just common array
      
      // The same as above but for the other table
      $query = 'INSERT INTO product VALUES (?, ?, ?)';
      $statement = $pdo->prepare($query); 
      $statement->execute([
        $_POST['maker'],
        $_POST['model'],
        $_POST['type']
      ]);
      
      // Tell user something happened
      echo "Added {$_POST['model']} to the database";
    }

  ?>
  <form method="POST">
    <label for="model">Model</label>
    <input type="text" name="model" id="model" />
    <br />
    <label for="speed">Speed</label>
    <input type="text" name="speed" id="speed" />
    <br />
    <label for="ram">Ram</label>
    <input type="text" name="ram" id="ram" />
    <br />
    <label for="hd">HD</label>
    <input type="text" name="hd" id="hd" />
    <br />
    <label for="rd_screen">RD / Screen</label>
    <input type="text" name="rd_screen" id="rd_screen" />
    <br />
    <label for="price">Price</label>
    <input type="text" name="price" id="price" />
    <br />
    <label for="maker">Maker</label>
    <select name="maker" id="maker">
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
      <option value="D">D</option>
      <option value="E">E</option>
      <option value="F">F</option>
      <option value="G">G</option>
      <option value="H">H</option>
    </select>
    <br />
    <label for="type">Type</label>
    <select name="type" id="type">
      <option value="laptop">Laptop</option>
      <option value="pc">PC</option>
    </select>
    <br />
    <input type="submit" value="Save" />
  </form>
</body>
</html>
