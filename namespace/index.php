<?php

  require("classes/cars/name.php");
  require("classes/user/name.php");

  use App\user\Name as userName;

  use App\Cars\Name as carName;
  $carName = new carName("Tempo");
  $userName = new userName("bob");

  echo "<h2>car name {$carName->name} </h2>";

  echo "<h2> user name {$userName->name} </h2>";

?>
