<?php

  include 'classVoiture.php';

  $voiture = new Voiture('BE-1 BUZ 333', '2013', '16235', 'utilitaire', 'Nissan', 'blanche', '1.5');

  // echo $voiture->immatr;
  // var_dump($voiture) ;
 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <style>
      td {
        padding-right: 10px;
        border: 1px solid grey;
      }


     </style>
     <title></title>
   </head>
   <body>
     <table>
       <tr>
         <td>Marque</td>
         <td><?php echo $voiture->getMarque()?></td>
       </tr>
       <tr>
         <td>Immatriculation</td>
         <td><?php echo $voiture->getImmatr()?></td>
       </tr>
       <tr>
         <td>Style</td>
         <td><?php echo $voiture->getModel()?></td>
       </tr>
       <tr>
         <td>Année de circulation</td>
         <td><?php echo $voiture->getAnneeCirc()?></td>
       </tr>
       <tr>
         <td>Couleur</td>
         <td><?php echo $voiture->getColor()?></td>
       </tr>
       <tr>
         <td>Disponibilité</td>
         <td><?php echo $voiture->getLibre()?></td>
       </tr>
     </table>
   </body>
 </html>
