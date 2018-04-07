<?php

  // création d'une classe, commence tjs par une majuscule
  class Personnage {
    // création d'attributs
    // private ou public

    private $force = 50;
    private $localisation = 'Bruxelles';
    private $experience = 0;
    private $degats;

    // création de méthodes en général elles sont en mode public
    public function deplacer() {

    }
    public function frapper($persoAFrapper) {
      // on rajoute l'attribut force à l'attribut dégats
      $persoAFrapper -> degats += $this -> force;
    }
    public function afficherExperience() {
      echo $this -> experience;
    }
    public function gagnerExperience () {
      // on ajoute 1 à l'attribut $_experience
      $this -> experience = $this -> experience + 1;
    }
  }

  // on crée 2 nouveaux personnages
  $perso1 = new Personnage;
  $perso2 = new Personnage;
  // on appelle une méthode
  // le perso 1 frappe le perso 2
  $perso1 -> frapper($perso2);
  $perso1 -> gagnerExperience();

  $perso2 -> frapper($perso1);
  $perso2 -> gagnerExperience();
?>
