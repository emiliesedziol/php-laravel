<?php

  $myName = function($name){
    echo "her name is {$name}";
  };

  function someonesName($name) {
    echo "someonse name {$name}";
  };

  function adding($a, $b) {
    return $a+$b;
  };
  $newNumber = 0;
  $newNumber = adding(4,5);

  function printString($string, $num) {
    for ($i=1;$i<=$num;$i++) {
      echo "<br> {$string} ";
    }
  };

  printString("testing", 3);
?>
<!DOCTYPE html>
<html>
<body>
  <br>
  <?php $myName("myles");
    echo "<br>";
    $myName("katie");
    echo "<br>";
    someonesName("lucky");
    echo "<br>";
    someonesName("tigger");
    echo "<br> <br>";
    echo "{$newNumber}";
    ?>

</body>
</html>
