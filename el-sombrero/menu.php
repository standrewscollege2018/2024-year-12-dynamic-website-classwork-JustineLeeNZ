<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>El Sombrero Restaurant - Menu</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>

    <!-- Navbar bar for each page -->
    <div class="navbar-container">
      <div class="navbar-text">
        <a href="index.php">Home</a>
      </div>
      <div class="navbar-text">
        <a  href="menu.php">Menu</a>
      </div>
      <div class="navbar-text">
        <a href="gallery.php">Gallery</a>
      </div>
      <div class="navbar-text">
        <a href="location.php">Location</a>
      </div>
      <div class="navbar-text">
        <a href="about.php">About</a>
      </div>

    </div>     <!-- navbar-container -->


    <!-- info about the menu -->
    <div class="menu-container">

      <!-- creates left hand column -->
      <div class="left-col">

        <!-- links to each category in menu -->
        <ul>
          <li><a href="entrees.html">Entrees</a></li>
          <!-- note - the rest of these link would also be live in the full site -->
          <li>Vegetarian</li>
          <li>Kids meals</li>
          <li>Steak</li>
          <li>Chicken</li>
          <li>Pork</li>
          <li>Mixed Specials</li>
          <li>Desserts</li>
        </ul>


      </div> <!-- left-col -->

      <!-- creates right hand column -->
      <!-- displays content for whichever menu course selected -->
      <div class="right-col">

        <!-- default content when page first opened -->
        <p class="course-name">Deal of the Day</p>
        <p>Buy 3 servings of Buffalo wings, get the 4th -50% off</p>

      </div> <!-- right-col -->

    </div>     <!-- menu-container-->

    <!-- footer for each page  -->
    <div class="footer-container">
      <div class="hours">
        <p class="footer-text">Open Tues-Sun 11am-late</p>
      </div>
      <div class="address">
        <p class="footer-text">123 Minion Way</p>
      </div>

    </div> <!-- footer-container -->



  </body>
</html>
