<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>El Sombrero Restaurant</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>

    <!-- Navbar bar for each page -->
    <div class="navbar-container">
      <div class="navbar-text">
        <a href="index.php">Home</a>
      </div>
      <div class="navbar-text">
        <a  href="">Menu</a>
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

        <!-- name of course -->
        <p class="course-name">Entrees</p>

        <!-- info about each menu item in course -->
        <div class="menu-item">
          <p class="item-title">Buffalo Strips</p>
          <p class="item-desc">(Mild or spicy, 6 pieces)</p>
          <p class="item-price">$13.00</p>
        </div>
        <div class="menu-item">
          <p class="item-title">Nacho's</p>
          <p class="item-desc">With beef and beans</p>
          <p class="item-price">$9.70</p>
        </div>
        <div class="menu-item">
          <p class="item-title">Cheese Nacho's</p>
          <p class="item-desc">With or without peppers</p>
          <p class="item-price">$5.80</p>
        </div>
        <div class="menu-item">
          <p class="item-title">Chicken Nacho's</p>
          <p class="item-desc">Tender slices of grilled chicken topped with cheese</p>
          <p class="item-price">$12.20</p>
        </div>
        <div class="menu-item">
          <p class="item-title">Guacamole Salad</p>
          <p class="item-desc"></p>
          <p class="item-price">$3.50</p>
        </div>
        <div class="menu-item">
          <p class="item-title">Nacho's with beans</p>
          <p class="item-desc"></p>
          <p class="item-price">$9.80</p>
        </div>
        <div class="menu-item">
          <p class="item-title">Buffalo Wings</p>
          <p class="item-desc">(Mild or spicy, 12 pieces)</p>
          <p class="item-price">$11.00</p>
        </div>

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
