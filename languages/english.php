<?php

function lang($phrase){

  static $lang= array(
      // Dashboard phrases
          'ABOUT'         => 'About',
          'PROJECTS'   => 'Projects',
          'FIND_US'        => 'Find Us ',
          'CONTACT'      => 'Contact ',
          'LANGUAGE'     => 'Language',
          'ARABIC'   =>  'Arabic',
          'FRENCH'         => 'French',
          'ENGLISH' => 'English'
  );

  return $lang[$phrase];

}

 ?>
