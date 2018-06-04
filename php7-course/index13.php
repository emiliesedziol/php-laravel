<?php

  $amazon_key = "AmazonProduct";
  $amazon_product = "MAC_Book_Air";
  setcookie($amazon_key, $amazon_product, time()+(86400*30), "/"); // 1 day


?>
<!DOCTYPE html>
<html>
<body>
  <br>
  <?php
    if (isset($_COOKIES["AmazonProduct"])) {
      echo $_COOKIES["AmazonProduct"];
    } else {
      echo  "No cookies for AmazonProduct";
    }
   ?>

</body>
</html>
