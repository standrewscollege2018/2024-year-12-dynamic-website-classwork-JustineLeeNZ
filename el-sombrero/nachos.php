
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>El Sombrero Restaurant</title>
  </head>
  <body>

    <h1>Nachos rule!</h1>

    <?php
    // connect to database
      include('db_connect.php');
    ?>

    <?php

      // run query to get all items in menu
      $item_sql = "SELECT * FROM menu WHERE name LIKE '%nacho%";
      // comment out the line below when you add your error handling
      $item_query = mysqli_query($dbconnect, $item_sql);

      // check if query runs
      // uncomment any lines below which are between /* and */ i.e. remove /* and */
      /*if ($item_query = mysqli_query($dbconnect, $item_sql))
      { */
    
        $item_rs = mysqli_fetch_assoc($item_query);

    

    // loop through all menu items for specified course



        do {
          // heading, description, price for current menu item
          
            echo "<h3>", $item_rs['name'], "</h3>"; 
            echo "<p>";
            echo $item_rs['description'];
            echo "&nbsp<b>";
            echo $item_rs['price'];
            echo "</b></p>";

          
        } while ($item_rs = mysqli_fetch_assoc($item_query));
      /*} // end if
      else {
        // display error message
        echo "Query failed: ".mysqli_error($dbconnect); 
      } */
    ?>



  </body>
</html>
