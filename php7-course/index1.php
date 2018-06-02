<?php

  const blueBox = "blue";  // cannot be changed
  // in html $ is needed for variables 'const' doesn't need $ in html

  $first = "tic";
  $second = "toc";

  const ticToc = "Tic Toc";
  //const ticToc = "{$first} {$second}";
  // const cannot contain variables,
/*
* open /Applications/MAMP/bin/php/ will open to php versions
* once in the version - config - php.ini
* display_errors = on    or date_offset_get
*
* Fatal error: Constant expression contains invalid operations in /Users/emi..iol/php/php-laravel/php7-course/index.php on line 10
*
*/

?>
<!DOCTYPE html>
<html>
<body>
  <br>
  <?php echo $first ?>
  <?php echo $second ?>
  <br>
  <p> quiz 1</p>
  <?php echo ticToc; ?>

</body>
</html>
