<?php
  $names = ["fred"];
  array_push($names, "Bill", "bob");
  var_dump($names);
  echo "<br>";

  sort($names);
  var_dump($names);
  echo "<br>";
  rsort($names);

  //array_pop($names);
  $b = count($names);
  echo "<br>";
  echo "count ".$b;

?>
<!DOCTYPE html>
<html>
<body>
  <br>
  <pre><?php
    var_dump($names);
  ?></pre>

</body>
</html>
