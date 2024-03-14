<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results of search</title>
</head>
<body>
    <h1>food items matching search</h1>

    <?php

    // store value from POST array
    $food = $_POST['food_item'];

   ?>

<?php
    // connect to database
    // mysqli_connect parameters - name of website hosting db, db username, db password, db name
      $dbconnect = mysqli_connect("localhost", "root", "root", "elsombrero_demo");
    ?>

    <?php

      // run query to get all items in menu
      $item_sql = "SELECT * FROM menu WHERE name LIKE '%" . $food . "%'";
      $item_query = mysqli_query($dbconnect, $item_sql);
      $item_rs = mysqli_fetch_assoc($item_query);

    ?>

    <!-- loop through all menu items for specified course -->

    <?php

      do {
        // heading, description, price for current menu item
        
          echo "<h3>", $item_rs['name'], "</h3>"; 
          echo "<p>";
          echo $item_rs['description'];
          echo "&nbsp<b>";
          echo $item_rs['price'];
          echo "</b></p>";

        
      } while ($item_rs = mysqli_fetch_assoc($item_query));

    ?>

    
</body>
</html>