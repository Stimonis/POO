<?php

  class Database {
    public $database;

    function connection($localhost, $dbName, $user, $password) {
      try {
        $this->database = new PDO('mysql:host='.$localhost.';dbname='.$dbName.';charset=utf8', ''.$user.'', ''.$password.'',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        // set the PDO error mode to exception
        $this->database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }

      catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }

    }
  }

?>
