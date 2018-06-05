<?php

  class Car {
    public $doors = 4;
    
    public function __construct($name, $doors = 4, $color = "white"){
      $this->doors = $doors;
      $this->name = $name;
      $this->color = $color;
      // echo "This has been hit";
    }

    public function printName() {
      echo $this->name;
    }

    public function statement(){
      echo "<h2>this car is a {$this->name} and {$this->doors} color {$this->color}</h2>";
    }
  }

  $honda = new Car("Civic");
  $greenHonda = new Car("Civic", 2, "Green");
  $bmw = new Car("m6", 4);

  $bmw->statement();
  $honda->statement();
  $greenHonda->statement();
  /*
  this car is a m6 and 4 color white

this car is a Civic and 4 color white

this car is a Civic and 2 color Green
  */

  $honda->printName();
/*  echo "<br>";
  echo $honda->doors;
  echo "<br>";
  echo $honda->name; */
  echo "<br>";
  echo "<pre>".var_dump($honda)."</pre>";
  echo "<br>";
  echo "<pre>".var_dump($greenHonda)."</pre>";
  echo "<br>";
  echo "<pre>".var_dump($bmw)."</pre>";
  /*
  object(Car)#1 (3) { ["doors"]=> int(4) ["name"]=> string(5) "Civic" ["color"]=> string(5) "white" }

object(Car)#2 (3) { ["doors"]=> int(2) ["name"]=> string(5) "Civic" ["color"]=> string(5) "Green" }

object(Car)#3 (3) { ["doors"]=> int(4) ["name"]=> string(2) "m6" ["color"]=> string(5) "white" }
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
