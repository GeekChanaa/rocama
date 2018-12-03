<?php

function lang($phrase){

  static $lang= array(
      // Dashboard phrases
          'ABOUT'         => 'A Propos ',
          'PROJECTS'   => 'Projets',
          'FIND_US'        => 'Location ',
          'CONTACT'      => 'Contact ',
          'LANGUAGE'     => 'Language',
          'ARABIC'   =>  'Arabe',
          'FRENCH'         => 'Francais',
          'ENGLISH' => 'Anglais'
  );

  return $lang[$phrase];

}

 ?>
