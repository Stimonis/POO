<?php

    include '../classDb.php';
    include '../classUser.php';

    $newDb = new Database();
    $newDb->connection('localhost', 'classDb', 'root', '');

    $id = $_POST['id'];

    $moi = new user();
    $moi->delete($id);

    $moi->logout();

    header('Location: ../index.php');

?>