<?php
  class Personnage {
    private $_force;
    private $_experience;
    private $_degats;

    // on utilise un constructeur quand on veut initialiser
    // des attributs à un moment donné (genre au début de la création du perso),
    public function __construct($force, $degats) {
      echo 'Voici le constructeur <br>'; // message s'affichant à la création d'un objet
      $this -> setForce($force);
      $this -> setDegats($degats);
      $this -> _experience = 1;
    }

    public function setForce($force) {
      if (!is_int($force)) {
        trigger_error('la force d\'un personnage doit être un nombre entier',
                      E_USER_WARNING);
        return;
      }
      if ($force > 100) {
        trigger_error('la force d\'un personnage ne peut dépasser 100',
                      E_USER_WARNING);
        return;
      }
      $this -> _force = $force;
    }

    public function setDegats($degats) {
      if (!is_int($degats)) {
        trigger_error('l\'expérience d\'un personnage doit être un nombre entier',
                      E_USER_WARNING);
        return;
      }
      if ($degats > 100) {
        trigger_error('l\'expérience d\'un personnage ne peut dépasser 100',
                      E_USER_WARNING);
        return;
      }

      $this -> _degats = $degats;
    }
  }
?>
