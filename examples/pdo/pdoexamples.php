<!-- Example 1 -->

<?php
  /*
    foreach
    Select something from a table and get one row at a time
    Good for just looping through large lists and not storing too much in memory at once
  */

  $statement = $pdo->prepare("SELECT * FROM Customers"); // Prepare any SQL Query
  $statement->execute(); // Run the query
  foreach ($statement as $row) { // Loop through all rows, one by one
    var_dump($row);
  }
?>



<!-- Example 2 -->

<?php
  /*
    fetch
    Select something from a table and loop through all properties
    Good for when you just need one row
  */

  $statement = $pdo->prepare("SELECT * FROM Customers"); // Prepare any SQL Query
  $statement->execute(); // Run the query
  $returned_data = $statement->fetch(PDO::FETCH_ASSOC); // Get one row, get it as an assosciative array

  foreach($returned_data as $item) { // Loop through all items in array
    echo "$item <br>";
  }
?>



<!-- Example 3 -->

<?php
  /*
    fetchAll
    Select something from a table and get all rows
    Good for when you want to send data to a template engine or as JSON from an API
    Lots of options! 
  */

  $statement = $pdo->prepare("SELECT * FROM Customers"); // Prepare any SQL Query
  $statement->execute(); // Run the query
  $returned_data = $statement->fetchAll(PDO::FETCH_ASSOC); // Get all rows, get them as associative array
?>
<ul>
<?php
  foreach($returned_data as $customer) { // Loop through all items in array
?>
  <li>
    <b>Name:</b> <?= $customer['Name'] ?>
    <br />
    <b>Address:</b> <?= $customer['Address'] ?> <?= $customer['PostalCode'] ?>  <?= $customer['City'] ?> 
    <br />
    <b>Country:</b> <?= $customer['Country'] ?>
    <br />
    <b>Investments:</b> <?= $customer['Investments'] ?>
  </li>
<?php
  }
?>
</ul>



<!-- Example 4 -->

<?php
  /*
    You can also do DELETE, UPDATE and INSERT queries
  */
  if(isset($_GET['remove'])) { // Check if 
    $statement = $pdo->prepare("DELETE FROM Customers WHERE ID = ?"); // Prepare any SQL Query, and use outside parameters
    $statement->execute([$_GET['remove']]); // Run the query with an argument
  }
?>
<?php
  $statement = $pdo->prepare("SELECT * FROM Customers"); // Prepare any SQL Query
  $statement->execute(); // Run the query
  $returned_data = $statement->fetchAll(PDO::FETCH_ASSOC); // Get all rows, get them as associative array
?>
<ul>
<?php
  foreach($returned_data as $customer) { // Loop through all items in array
?>
  <li>
    <b>Name:</b> <?= $customer['Name'] ?>
    <br />
    <b>Address:</b> <?= $customer['Address'] ?> <?= $customer['PostalCode'] ?>  <?= $customer['City'] ?> 
    <br />
    <b>Country:</b> <?= $customer['Country'] ?>
    <br />
    <b>Investments:</b> <?= $customer['Investments'] ?>
    <br />
    <a href="?remove=<?= $customer['ID'] ?>">DELETE</a>
  </li>
<?php
  }
?>
</ul>