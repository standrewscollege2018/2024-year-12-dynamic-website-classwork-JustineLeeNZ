
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
      include('db_connect.php');
    ?>


    <?php
        // // get and store value added to end of link in previous page - stored in GET array
        $course_chosen = $_GET['course_id'];
        echo $course_chosen;
        echo "<br>";
    ?>

    <?php

      // run query to get all items in menu
      // set up string containing SQL statement
      $item_sql = "SELECT * FROM menu WHERE course_id=$course_chosen";
      echo $item_sql;
      // run query
      $item_query = mysqli_query($dbconnect, $item_sql);
      // get first record from results of query
      $item_rs = mysqli_fetch_assoc($item_query);
      

    ?>



<?php
      // loop through all menu items for specified course
      do { 
        // display food name as a heading h3
        echo "<h3>". $item_rs['name'] ."</h3>\n";
        // display description on it's own, as a paragraph
        echo "<p>" . $item_rs['description'] . "</p>\n";


    //  get next record in results. If no more records, end loop
    } while ($item_rs = mysqli_fetch_assoc($item_query));

     ?>



  </body>
</html>
