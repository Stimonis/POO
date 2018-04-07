<?php

  class User {
    public $userName;
    public $password;
    public $id;
    public $email;
    public $db;

    function __construct($userName = '', $email='', $password='') {
      //si il n y a pas de password c est que ce n est pas un nveau donc on a juste besoin des infos
      if ( $password == '' ) {
        // getUser($email); Quand on crée un nouvel utilisateur il faudra donner l'email
      }
      $this->userName = $userName;
      $this->password = $password;
      $this->email = $email;
      // global $newDb;
      // $this->db = $newDb;
    }

    function delete($id) {
      global $newDb;
      $this->db = $newDb;
      $myselection = "DELETE FROM users WHERE id = '".$id."'";
      $myrequest = $this->db->database->query($myselection);
    }

    function getUser($email) {
      global $newDb;
      $this->db = $newDb;    
      $myselection = "SELECT * FROM users WHERE email = '".$email."'";
      $myrequest = $this->db->database->query($myselection);
      $donnees = $myrequest->fetch();
      $this->email = $donnees['email'];
      $this->userName = $donnees['name'];
      $this->id = $donnees['id'];
      $this-> password = $donnees['password'];
    }

    function login($email, $password) {
      global $newDb;
      $this->db = $newDb;
      $myselection = "SELECT * FROM users WHERE email = '".$email."'";
      $myrequest = $this->db->database->query($myselection);
      $donnees = $myrequest->fetch();

      if($donnees){
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $this->userName = $donnees["userName"];
        $this->password = $donnees["password"];
        $this->email = $donnees["email"];
        return true;
      } else {
        return false;
      }
    }

    function logout() {
      global $newDb;
      $this->db = $newDb;
      session_start();
      session_unset();
      session_destroy();
    }

    function addUser() {
      global $newDb;
      $this->db = $newDb;
      //il faudrait aller voir dans la DB si il n'y a pas le même nom ou mail.
      $myselection = "INSERT INTO users SET name = :name, email = :email, password = :password";
      $myrequest = $this->db->database->prepare($myselection);
      $myrequest->bindParam(':name', $this->userName, PDO::PARAM_STR);
      $myrequest->bindParam(':email', $this->email, PDO::PARAM_STR);
      $myrequest->bindParam(':password', $this->password, PDO::PARAM_STR);
      $myrequest->execute();
      $id = $this->db->database->lastInsertId();

      $this->id = $id;

    }

    function update($id, $email, $password, $userName) {
      global $newDb;
      $this->db = $newDb;
      $this->userName = $userName;
      $this->email = $email;
      $this->password = $password;
      $this->id = $id;
      $myselection = "UPDATE users SET name = :name, email = :email, password = :password WHERE id = '".$id."'" ;
      $myrequest = $this->db->database->prepare($myselection);
      $myrequest->bindParam(':name', $this->userName, PDO::PARAM_STR);
      $myrequest->bindParam(':email', $this->email, PDO::PARAM_STR);
      $myrequest->bindParam(':password', $this->password, PDO::PARAM_STR);

      $myrequest->execute();

    }

    function showUsers() {
      global $newDb;
      $this->db = $newDb;
      $myselection = "SELECT * FROM users";
      $myrequest = $this->db->database->query($myselection);
      while ($donnees = $myrequest->fetch()) {
        echo 'user name : ' .$donnees['name'].'<br>';
        echo 'email : ' .$donnees['email'].'<br><br><br>';
      }
    }

  }

 ?>
