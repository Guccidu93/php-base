<!DOCTYPE html>
<html>
<head>
  <link href="index.css" type="text/css" rel="stylesheet"/>
	<title></title>
</head>
<body>
 
<?php
            

	  $harry = array(
        'prix' => 20,
        'name' => 'Harry Poter',
        'auteur' => 'J.K. Rowling',
        'prime' => 1,
        'note' => '5 étoiles'
      );
      $tom = array(
        'prix' => 25,
        'name' => 'Tom Sawyer',
        'auteur' => 'Mark Twain',
        'prime' => 1,
        'note' => '5 étoiles'
      );
      $bourdieu = array (
        'prix' => 8,
        'name' => 'La domination masculine',
        'auteur' => 'Pierre Bourdieu',
        'prime' => 1,
        'note' => '3 étoiles'
      );
      $ogien = array (
      	'prix' => 7,
      	'name' => 'Ethique Minimaliste',
        'auteur' => 'Ruwen Ogien',
      	'prime' => 0,
        'note' => '4 étoiles'
      );
      $musso = array (
        'prix' => 1,
        'name' => 'La fille de papier',
        'auteur' => 'Guillaume Musso',
        'prime' => 1,
        'note' => '1 étoiles'
      );
      $clark = array (
        'prix' => 5.60,
        'name' => 'La clinique du docteur H',
        'auteur' => 'Mary Higgins Clark',
        'prime' => 1,
        'note' => '3.5 étoiles'
      );
      $fontaine = array (
        'prix' => 10,
        'name' => 'Les Fables',
        'auteur' => 'Jean De la Fontaine',
        'prime' => 0,
        'note' => '5 étoiles'
      );
      $maupassant = array (
        'prix' => 7,
        'name' => 'Bel Ami',
        'auteur' => 'Guy de Maupassant',
        'prime' => 0,
        'note' => '4.3 étoiles'
      );
      $flaubert = array (
        'prix' => 7.80,
        'name' => 'Madame Bovary',
        'auteur' => 'Gustave Flaubert',
        'prime' => 1,
        'note' => '5 étoiles'
      );
      $tolstoi = array (
        'prix' => 2,
        'name' => 'Le Diable',
        'auteur' => 'Leon Tolstoi',
        'prime' => 1,
        'note' => '5 étoiles'
      );
      $livres = array($harry, $tom, $bourdieu, $ogien, $tolstoi, $flaubert, $maupassant, $fontaine, $clark, $musso);
      foreach ($livres as $livre) {
        if ($livre['prime']==1) {
          echo '<div class="livres">';
          echo '<ul>';
          echo '<li>Le livre: '.$livre['name'].'</li>';
          echo '<li>de '.$livre['auteur'].'</li>';
          echo '<li>est noté '.$livre['note'].'</li>';
          echo '<li>coute '.$livre['prix'].' euros</li>';
          echo '<li>et est en prime</li><br />';
          echo '</ul>';
          echo '</div>';
        }
        else {
          echo '<div class="livres">';
          echo '<ul>';
          echo '<li>Le livre: '.$livre['name'].'</li>';
          echo '<li>de '.$livre['auteur'].'</li>';
          echo '<li>est noté '.$livre['note'].'</li>';
          echo '<li>coute '.$livre['prix'].' euros</li>';
          echo '<li>mais n\'est pas en prime</li><br />';
          echo '</ul>';
          echo '</div>'; 
        }
      }    
         
?>




</body>
</html>