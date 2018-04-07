<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'MyClass.php';

  function chargerClasse($classe) {
    require $classe .'.php';
  }

  spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour
                                          // qu'elle soit appelée dès qu'on réalisera (instanciera) une classe non déclarée
  $perso = new Personnage(20,15);




?>
