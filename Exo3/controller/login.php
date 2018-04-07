<?php

  include '../classDb.php';
  include '../classUser.php';
  
  $newDb = new Database();
  $newDb->connection('localhost', 'classDb', 'root', '');
  

  $email = $_POST['email'];
  $password = $_POST['password'];

  if ((isset($email) && $email != '') && (isset($password) && $password != '')) {
    $moi = new User();
    
    if ( $moi->login($email, $password) ) {
        echo "hello" .$moi->username;
        header('Location: ../index.php');
    } else {
      echo "";
    }
  }

 ?>
