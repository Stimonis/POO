<?php

  class Html {

    private $data;

    public function __construct($data = array()) {
      $this->data = $data;
    }

    function linkCss($nom) {
      return '<link rel="stylesheet" href="'.$nom.'.css">';
    }

    function charsetTag() {
      return '<meta charset="utf-8">';
    }

    function meta($name, $content) {
      return '<meta name="'.$name.'" content="'.$content.'">';
    }

    function image($lien) {
      return '<img src="'.$lien.'" alt="Problème d\'affichage avec l\'image"';
    }

    function liens($lien,$text) {
      return '<a href="'.$lien.'">' .$text.'</a>';
    }
  }


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="/css/master.css">
  </head>
  <body>
    <a href="#"></a>
<img src="" alt="">
  </body>
</html>
