<?php

  $car = "HONDA";

  function echoCar() {
//    global $car;  // this is required because $car is defined in another space
//    echo $car;
//
// or
//  GLOBALS needs to be upper case

  echo $GLOBALS["car"];
  };

  echoCar();

  echo "<br>";
  echo  $_SERVER['HTTP_USER_AGENT'];

?>
<!DOCTYPE html>
<html>
<body>
  <br>
  <?php

    ?>

</body>
</html>
