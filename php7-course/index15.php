<?php

  session_start();

  $_SESSION["amazon_key"] = "AmazonProduct";
  $_SESSION["AmazonProduct"] = "MAC_Book_Air";

  // session_unset();  // remove session

  // session_destroy();  nothing left on server
?>
<!DOCTYPE html>
<html>
<body>
  <br>
  <?php
    if (isset($_SESSION["AmazonProduct"])) {
      echo $_SESSION["AmazonProduct"];
    } else {
      echo  "No session";
    }
   ?>

   <pre>
     <?php echo var_dump($_SESSION); ?>
  </pre>

</body>
</html>

/*

MAC_Book_Air
     array(2) {
  ["amazon_key"]=>
  string(13) "AmazonProduct"
  ["AmazonProduct"]=>
  string(12) "MAC_Book_Air"
}
 */
