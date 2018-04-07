<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  class Personnage {

    // attribut en privé !

    private $_force;
    private $_localisation;
    private $_experience;
    private $_degats;

    // déclarations des constantes en rapport avec la force

    const FORCE_PETITE = 20;
    const FORCE_MOYENNE = 50;
    const FORCE_GRANDE = 80;

    public function __construct($forceInitiale) {
      $this -> setForce($forceInitiale);
    }

    public function deplacer() {

    }

    public function frapper() {

    }

    public function gagnerExperience() {

    }

    public function setForce($force) {
      // on vérifie si force = petite, moyenne ou grande force
      if (in_array($force, [self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE])) {
        $this -> _force = $force;
      }
    }

    // attribut statique sont utilisées pour agir sur les attributs
    public static function parler() {
      echo self::$_textADire; // On donne le texte à dire
    }
  }

  // On envoie une force moyenne en guise de force $forceInitiale
  $perso = new Personnage(Personnage::FORCE_MOYENNE) //



?>
  <!-- Nous allons maintenant faire un petit exercice. Je veux que vous me fassiez une classe
  toute bête qui ne sert à rien. Seulement, à la fin du script, je veux pouvoir afficher
  le nombre de fois où la classe a été instanciée. Pour cela, vous aurez besoin d'un attribut
  appartenant à la classe (admettons $_compteur) qui est incrémenté dans le constructeur. -->
<?php

  class Compteur {
    // déclaration de la variable $_compteur
    private static $_compteur = 0;

    public function __construct() {
      // on instancie la variable compteur qui appartient à la classe (donc utilisation du mot-clé self)
      self::$_compteur++; // !!! ne pas oublié que l'on accède à un attribut static grâce à self !!!
    }

    public static function getCompteur() { // méthode static qui renverra la valeur du compteur
      return self::$_compteur;
    }

  }

  $test1 = new Compteur;
  $test2 = new Compteur;
  $test3 = new Compteur;

  echo Compteur::getCompteur();

 ?>
