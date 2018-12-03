<?php

function lang($phrase){

  static $lang= array(
      // Dashboard phrases
          'ABOUT'         => 'من نحن',
          'PROJECTS'   => 'المشاريع',
          'FIND_US'        => 'أين تجدنا',
          'CONTACT'      => 'تواصل معنا',
          'LANGUAGE'     => 'اللغة',
          'ARABIC'   =>  'العربية',
          'FRENCH'         => 'الفرنسية',
          'ENGLISH' => 'الإنجليزية'
  );

  return $lang[$phrase];

}

 ?>
