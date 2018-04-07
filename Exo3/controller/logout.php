<?php 

  include '../classDb.php';
  include '../classUser.php';

  $newDb = new Database();
  $newDb->connection('localhost', 'classDb', 'root', '');

  $moi = new user();
  $moi->logout();

  header('Location: ../index.php');

?>