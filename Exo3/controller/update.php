<?php

    include '../classDb.php';
    include '../classUser.php';

    $newDb = new Database();
    $newDb->connection('localhost', 'classDb', 'root', '');

    $user = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $newUser = new User();
    $newUser->update($id, $email, $password, $user);

    header('Location: ../index.php');

?>