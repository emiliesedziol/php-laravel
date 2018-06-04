<?php

  // send to the browser
  // http://localhost:8888/?username="bob1234"&lastname=smith&firstname=bob
  /*
      username: "bob1234"

      Last Name: smith

      First Name: bob
      //before html form was added
  */
  if(isset($_GET['username'])) {
    echo "<h2>username: {$_GET['username']}</h2>";
    echo "<h2>Last Name: {$_GET['lastname']}</h2>";
    echo "<h2>First Name: {$_GET['firstname']}</h2>";
  }



  //post send back to page send button in http
  if(isset($_POST["username"])) {
    echo $_POST["username"];
  }
?>
<!DOCTYPE html>
<html>
<body>
  <br>

  <form action="index.php" method="post">
    <label for="username">Username</label>
      <input type="text" name="username:">
      <input type="password" name="password:">

      <button type="submit">Send</button>
  </form>
</body>
</html>
