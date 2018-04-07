<?php

  include 'classForm.php';
  include 'classHtml.php';
  include 'classValid.php';

  // $form = new Form( array(
  //   'username' => 'Roger',
  //   'password' => '1234'
  // ));
  //
  // echo $form->input('username' , 'text');
  // echo $form->input('password', 'password');

  $form = new Form($_POST);
  $head = new Html();
  $valid = new Helpers;

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
      echo $head->charsetTag();
      echo $head->meta('viewport', 'width=device-width, initial-scale=1.0');
      echo $head->linkCss('style');

    ?>
    <title></title>
  </head>
  <body>
    <form action="#" method="post">
      <?php

        echo $valid->validator(true);
        echo $form->input('username', 'text', 'nom d\'utilisateur');
        echo $form->input('password', 'password','password');
        echo $form->input('genre', 'radio','Mr');
        echo $form->input('genre', 'radio','Mss');
        echo $form->input('genre', 'checkbox','Mr');
        echo $form->input('genre', 'checkbox','Mss');
        echo $form->submit();
        echo $head->image('ciel.jpeg');

       ?>
    </form>
  </body>
</html>
