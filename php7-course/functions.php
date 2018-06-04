<?php

  require ('variables.php');

  function printName($name) {
    global $first_sentence;
    echo "{$first_sentence}";
    echo "<br> {$name}";
  }
