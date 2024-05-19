<?php
    // connect to database
      $dbconnect = mysqli_connect("localhost", "root", "root", "elsombrero_demo");
    
      // check if datbase connection is good
      if (mysqli_connect_errno()) {
        echo "Connection failed: ".mysqli_connect_errno();
      }
?>
