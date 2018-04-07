<?php

  include '../classDb.php';
  include '../classUser.php';

  $newDb = new Database();
  $newDb->connection('localhost', 'classDb', 'root', '');

  $user = $_POST['userName'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // var_dump($user);

  $newUser = new User($user, $email, $password);
  $newUser->addUser();

  header('Location: ../index.php');


 ?>
