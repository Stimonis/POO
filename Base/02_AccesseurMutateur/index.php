<?php
  // acceder à un attribut : accesseur
  // modifier la valeur d'un attribut : mutateur
  class Personnage {
    private $_force;
    private $_experience;
    private $_degats;

    public function frapper (Personnage $persoAFrapper) {
      $persoAFrapper -> _degats += $this -> _force;
    }

    public function gagnerExperience() {
      $this -> _experience++;
    }

    // mutateur chargé de modifier l'attribut force
    public function setForce($force) {
      if (!is_int($force)) { // s'il ne s'agit pas d'un nombre entier
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

    // mutateur chargé de modifier l'attribut experience
    public function setExperience($experience) {
      if (!is_int($experience)) {
        trigger_error('l\'expérience d\'un personnage doit être un nombre entier',
                      E_USER_WARNING);
        return;
      }
      if ($experience > 100) {
        trigger_error('l\'expérience d\'un personnage ne peut dépasser 100',
                      E_USER_WARNING);
        return;
      }

      $this -> _experience = $experience;
    }

    // accesseur, on renvoit le contenu de l'attribut
    public function degats() {
      return $this -> _degats;
    }

    public function force() {
      return $this -> _force;
    }

    public function experience() {
      return $this -> _experience;
    }
  }


  $perso1 = new Personnage;
  $perso2 = new Personnage;

  $perso1 -> setForce(rand(10,101));
  $perso1 -> setExperience(rand(10,101));

  $perso2 -> setForce(rand(10,101));
  $perso2 -> setExperience(rand(10,101));

  $perso1 -> frapper($perso2);
  $perso1 -> gagnerExperience();

  $perso2 -> frapper($perso1);
  $perso2 -> gagnerExperience();

  echo 'Le personnage 1 a ', $perso1->force(), ' de force,
        contrairement au personnage 2 qui a ', $perso2->force(), ' de force.<br>';
  echo 'Le personnage 1 a ', $perso1->experience(), ' d\'expérience,
        contrairement au personnage 2 qui a ', $perso2->experience(), ' d\'expérience.<br>';
  echo 'Le personnage 1 a ', $perso1->degats(), ' de dégats,
        contrairement au personnage 2 qui a ', $perso2->degats(), ' de dégats.<br>';

?>
