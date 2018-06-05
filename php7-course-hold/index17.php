<?php

  require("classes/car.php");
  require("classes/Honda.php");
  require("classes/Bmw.php");

  $car1 = new Honda("Civic", 2, "blue", "25,000.00");
  $car1->statement();
  $car1->price();

  $car2 = new Honda("Accord", 5, "grey", "26,000.00");
  $car2->statement();
  $car2->price();

  $car3 = new Bmw("X5", 2, "white", "54,000.00");
  $car3->statement();
  $car3->price();
  $car3->sportsPackage();

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
