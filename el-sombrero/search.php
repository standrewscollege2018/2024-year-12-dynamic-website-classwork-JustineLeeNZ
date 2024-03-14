<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search menu</title>
  </head>
  <body>

    <h1>Search for a food item in the menu</h1>

    <!-- search form -->
      <!-- ** modify so that form goes to results.php when submit button pressed -->
      <form action="search-results.php" method="post">
        <!-- ** modify so that input field value is stored as search_term in GET array -->
        <input type="text" name="food_item" placeholder="Type the food to find here">
        <button type="submit" name="button">Search</button>

      </form>
  </body>
</html>
