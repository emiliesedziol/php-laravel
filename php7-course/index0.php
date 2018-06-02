<?php
  // single line comment
  # another comment
  $name = "me";  // inside "" it is a string
  /*
  * block comment
  */

  $x = 45; //interface
  $y = 32.33;  // decimal indicates a  float
  $z = true; // boolean true or false
  $t = array("cat", "dog", "groundhog");

  // object
  class Box {
    function Box() {
      $this->size = "small";
    }
  }
  // create an object
  $smallBox = new Box();   // instance of Box
  // show object properties
  echo " box size ".$smallBox->size;  // displayed before what is in html
  echo "<br> ";
  // null nothing declared


  $box = "medium";

  const blueBox = "blue";  // cannot be changed
  // in html $ is needed for variables 'const' doesn't need $ in html

  function printSize() {
  //  $box = "large";  local variable
  // global $box; $box is global
    return $box;
  }
  echo "<br> $box";
  echo $box;
  echo "<br> function  <br>";
  echo printSize();
?>
<!DOCTYPE html>
<html>
<body>
  <br>
  <p> inside html</p>
  <br>
  <?php echo "my name is {$name}" ?>
  <br>
  <?php echo "<h1>my name is {$name}</h1>" ?>
  <br>
  <?php echo "my name is ". $name ?>
  <br>
  <p> print an object </p>
  <?php echo "box ". $smallBox->size ?>
  <br>
  <?php echo $box ?>
  <br>
  <?php echo blueBox ?>
</body>
</html>

<!-- running the server from the terminal in Atomic

php -S localhost:8888

the terminal will show something like
PHP 7.1.14 Development Server started at Sat Jun 2 13:47:32 2018
Listening on http://localhost:8888
Document root is /Users/e...ol/php/php7-course
Press Ctrl-C to quit

-->
