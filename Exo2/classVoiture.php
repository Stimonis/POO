<?php

  class Voiture {
    private $immatr;
    private $miseEnCirc;
    private $km;
    private $model;
    private $marque;
    private $color;
    private $poids;
    private $libre;
    private $pays;
    private $bcpServi;
    private $anneeDepuisMiseEnCirc;

    function __construct($immatr, $miseEnCirc, $km, $model, $marque, $color, $poids) {
      $this->immatr = $immatr;
      $this->miseEnCirc = $miseEnCirc;
      $this->km = $km;
      $this->model = $model;
      $this->marque = $marque;
      $this->color = $color;
      $this->poids = $poids;
      $this->verifModel();
      $this->pays();
      $this->kilometrage();
      $this->annee();

    }

    private function verifModel() {
      if ($this->marque == 'audi') {
        $this->libre = 'reservée';
      } else {
        $this->libre = 'libre';
      }
    }
    private function verifPoids() {
      if ($this->poids > 3.5) {
        $this->model = 'utilitaire';
      } else {
          $this->model = 'standard';
      }
    }

    private function pays() {
      if (preg_match('#^BE#',$this->immatr)) {
        $this->pays = 'Belgique';
      } elseif (preg_match('#^F#',$this->immatr)) {
        $this->pays = 'France';
      } elseif (preg_match('#^D#',$this->immatr)) {
        $this->pays = 'Allemagne';
      }
    }

    private function kilometrage() {
      if ($this->km <= 100000) {
        $this->bcpServi = 'low';
      } elseif ($this->km <= 200000) {
        $this->bcpServi = 'middle';
      } else {
        $this->bcpServi = 'high';
      }
    }

    private function annee() {
      $today = date("Y");
      $annee = $today - ($this->miseEnCirc);
      $this->anneeDepuisMiseEnCirc = $annee;
    }

    function changeKm($km) {
      $this->km = $km;
      if ($this->km < 100000) {
        $this->$bcpServi = 'low';
      } elseif ($this->km < 200000) {
        $this->$bcpServi = 'middle';
      } else {
        $this->$bcpServi = 'high';
      }
    }

    function rouler($km) {
      $this->km =+ 100000;
      changeKm($km);
    }

    function getImmatr() {
      return $this->immatr;
    }

    function getMarque() {
      return $this->marque;
    }

    function getKm() {
      return $this->km;
    }

    function getAnneeCirc() {
      return $this->miseEnCirc;
    }

    function getModel() {
      return $this->model;
    }

    function getColor() {
      return $this->color;
    }

    function getLibre() {
      return $this->libre;
    }




    function display() {

    }
  }

?>
