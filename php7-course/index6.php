<?php

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

  echo "3rd car wheels = ".$cars[2]["wheels"];

  $cars[0]["doors"] = 3;

?>
<!DOCTYPE html>
<html>
<body>
  <br>
  <pre><?php
    var_dump($cars);
  ?></pre>

</body>
</html>
