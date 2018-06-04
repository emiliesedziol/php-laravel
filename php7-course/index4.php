<?php

  $animals = [
    ["bird", "jay"],
    ["bird", "hawk"],
    ["fish", "cod"],
    ["dog", "golden doodle"]
  ]

?>
<!DOCTYPE html>
<html>
<body>
  <br>
  <pre><?php
    var_dump($animals);
  ?></pre>

</body>
</html>
/*
array(4) {
  [0]=>
  array(2) {
    [0]=>
    string(4) "bird"
    [1]=>
    string(3) "jay"
  }
  [1]=>
  array(2) {
    [0]=>
    string(4) "bird"
    [1]=>
    string(4) "hawk"
  }
  [2]=>
  array(2) {
    [0]=>
    string(4) "fish"
    [1]=>
    string(3) "cod"
  }
  [3]=>
  array(2) {
    [0]=>
    string(3) "dog"
    [1]=>
    string(13) "golden doodle"
  }
}
*/
