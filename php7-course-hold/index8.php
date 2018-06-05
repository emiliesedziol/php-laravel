<?php

  for ($i=0; $i<11; $i++) {
    echo $i;
    echo "<br>";
  }

  $cars = [
    [
      "name" => "300",
      "company" =>"lexus",
      "wheels" => 4,
      "doors" => 4],
    [
      "name" => "ex33",
      "company" =>"infinit",
      "wheels" => 4,
      "doors" => 2],
    [
      "name" => "silverado",
      "company" =>"gmc",
      "wheels" => 6,
      "doors" => 4],
    [
      "name" => "focus",
      "company" =>"ford",
      "wheels" => 4,
      "doors" => 5]
  ];

  echo "<br> for";
  for ($i=0;$i<count($cars);$i++) {
    echo "name ".$cars[$i]["name"];
    echo "<br>";
  }

  echo "<br> while <br>";
  $i = 0;
  $countCars = count($cars);
  echo "countCars ".$countCars."<br>";
  while($i < $countCars) {
    echo $cars[$i]["company"];
    echo "<br>";
    $i++;
  };

  echo "<br> foreach <br>";
  foreach ($cars as $tmp) {
    echo $tmp["name"];
    echo "<br>";
  }


?>
<!DOCTYPE html>
<html>
<body>
  <br>


</body>
</html>
