<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo of PHP basics</title>
</head>
<body>
    <h1>Demo of PHP Basics</h1>

    <?php
      echo "<h2>Hello world</h2>";  

      $name = "Mrs Lee";
      echo "<p>My favourite teacher is ", $name, " and she is awesome!</p>";
      

    ?>

    <p><a href="get.php?number=1">Send a number (1) to another page</a></p>
    <p><a href="get.php?number=2">Send a number (2)to another page</a></p>
    <p><a href="get.php?text='Mrs Lee is cool'">Send a string to another page</a></p>



    
</body>
</html>