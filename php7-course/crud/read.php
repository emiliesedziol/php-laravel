<?php

  require('database.php');

  // add new users
  if($_GET["show"] == "all") {
    try {
      $statement = $pdo->prepare(
        'SELECT * FROM users;'
      );
      $statement->execute();
      // echo "read from users<br>";

      $results = $statement->fetchAll(PDO::FETCH_OBJ);
      // var_dump($results);
    } catch(PDOException $e)  {
      echo "<h4 style='color: red;'>".$e->getMessage()."</h4>";
    }
  }

  if($_GET["show"] == "one" && isset($_GET["id"])) {
    // http://localhost:8888/read.php?show=one&id=1
      $id = $_GET["id"];
      // echo "id {$id} <br>";
      try {
        $statement = $pdo->prepare(
          'SELECT * FROM users WHERE id = :id;'
        );
        $statement->execute(["id" => $id]);
         // echo "read from users<br>";

        $results = $statement->fetchAll(PDO::FETCH_OBJ);
        // var_dump($results);
      } catch(PDOException $e)  {
        echo "<h4 style='color: red;'>".$e->getMessage()."</h4>";
      }
  }
?>

<html>
  <head>
    <title>Simple CRUD</title>
  </head>

  <body>
    <table>
      <tr>
        <th>id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Edit</th>
        <th>Delete</th>
    <?php foreach($results as $user) { ?>
      <tr>
        <td><?php echo $user->id ; ?></td>
        <td><?php echo $user->first_name ; ?></td>
        <td><?php echo $user->last_name ; ?></td>
        <td><?php echo $user->age ; ?></td>
        <td>
          <a href="/update.php?id=<?php echo $user->id; ?>">Edit</a>
        </td>
        <td>
          <a href="/delete.php?id=<?php echo $user->id; ?>"
          onclick="confirm()">Delete</a>
        </td>
      </tr>
    <?php } ?>

    <a href="/read.php?show=all">Go Back</a>
  </body>

</html>
