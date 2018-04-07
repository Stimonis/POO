<?php

  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  include 'classDb.php';
  include 'classUser.php';

  $newDb = new Database();
  $newDb->connection('localhost', 'classDb', 'root', '');
  
  session_start();

  if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
  </head>
  <body>
  <?php
    $moi = new user();
    $moi->getUser($_SESSION['email']);
  ?>
    <a href="controller/logout.php">logout</a>
    <form class="" action="controller/update.php" method="post">
      <input type="number" name="id" value="<?php echo $moi->id;?>">
      <label for="user">User name : </label>
      <input id="user" type="text" name="userName" value="<?php echo $moi->userName;?>"> <br>
      <label for="email">email : </label>
      <input id="email" type="email" name="email" value="<?php echo $moi->email;?>"> <br>
      <label for="passw">password : </label>
      <input id="passw" type="password" name="password" value="<?php echo $moi->password;?>"> <br> <br>
      <input type="submit" value="Envoyer">
    </form>

    <form action="controller/delete.php" method="post">
      <p>Cliquez ci-dessous pour effacer votre profil</p>
      <input type="submit" value="delete">
      <input type="number" name="id" value="<?php echo $moi->id;?>">
    </form>

  </body>
</html>

<?php
  
  } else {

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
  </head>
  <body>
    <h2>Inscription</h2>
    <form class="" action="/controller/addUser.php" method="post">
      <label for="user">User name : </label>
      <input id="user" type="text" name="userName"> <br>
      <label for="email">email : </label>
      <input id="email" type="email" name="email"> <br>
      <label for="passw">password : </label>
      <input id="passw" type="password" name="password"> <br> <br>
      <input type="submit" value="Envoyer">
    </form>

    <h2>login</h2>
    <form class="" action="/controller/login.php" method="post">
      <label for="email">email : </label>
      <input id="email" type="email" name="email"> <br>
      <label for="passw">password : </label>
      <input id="passw" type="password" name="password"> <br> <br>
      <input type="submit" value="Envoyer">
    </form>
  </body>
</html>

<?php

  }

?>