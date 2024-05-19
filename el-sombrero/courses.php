
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>El Sombrero Restaurant</title>
  </head>
  <body>

    <h1>Menu - Courses</h1>

    <?php
    // connect to database
    // mysqli_connect parameters - name of website hosting db, db username, db password, db name
      $dbconnect = mysqli_connect("localhost", "root", "root", "elsombrero_demo");
    ?>

    <?php

      // run query to get all courses in the menu
      $item_sql = "SELECT * FROM course";
      $item_query = mysqli_query($dbconnect, $item_sql);
      $item_rs = mysqli_fetch_assoc($item_query);

    ?>

    <!-- loop through all courses -->

    <?php

      do {
        // course_id, name for current course
        
          echo "<p>", $item_rs['name'], "</p>"; 

        
      } while ($item_rs = mysqli_fetch_assoc($item_query));

    ?>



  </body>
</html>
