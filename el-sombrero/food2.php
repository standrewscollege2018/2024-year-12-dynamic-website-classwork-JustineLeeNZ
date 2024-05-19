
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>El Sombrero Restaurant</title>
  </head>
  <body>

    <h1>Menu</h1>

    <?php
    // connect to database
    // mysqli_connect parameters - name of website hosting db, db username, db password, db name
      $dbconnect = mysqli_connect("localhost", "root", "root", "elsombrero_demo");
    ?>

    <?php

    $link_id = $_GET['course_id'];



    ?>


    <?php

      // run query to get all items in menu
      $item_sql = "SELECT * FROM menu WHERE course_id=" . $link_id;
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
