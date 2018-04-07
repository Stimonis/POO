<?php

  class Helpers {

    function validator($argument) {
      if (is_int($argument)) {
        return 'C\'est un chiffre entier';

      } elseif (is_float($argument)) {
          return 'C\'est un chiffre avec des décimales';

      } elseif (is_string($argument)) {
        return 'C\'est une chaîne de caractère';

      } elseif (is_bool($argument)) {
        return 'C\'est un booléen';
      }
    }

  }

 ?>
