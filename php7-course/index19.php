<?php

  require("classes/abstractStory.php");
  require("classes/inventory.php");
  require("classes/car.php");
  require("classes/Honda.php");
  require("classes/Bmw.php");

  $car1 = new Honda("Civic", 2, "blue", "25,000.00", new Inventory);
//  $car1->statement();
  echo "<br>";
  $car1->price();
  $car1->storyTime();

/*
  $car2 = new Honda("Accord", 5, "grey", "26,000.00");
  $car2->statement();
  $car2->price();
*/
  $car3 = new Bmw("X5", 2, "white", "66,000.00", new Inventory);
//  $car3->statement();
  $car3->price();
  $car3->sportsPackage();
  $car3->storyTime();
/*
  //  echo "<br>".car::$city;
  echo "<br>".Car::city();

  foreach (Car::$states as $state) {
    echo "<br> {$state}";
  }

  echo "<br> someStates";
  $car1->someStates();
*/

?>
<!DOCTYPE html>
<html>
<body>
  <br>
  <?php

   ?>

   <pre>
     <?php  ?>
  </pre>

</body>
</html>
