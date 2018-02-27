<?php
  if(isset($_GET['menu'])) {
    $menu = $_GET['menu'];

    if($menu == 'main_page') {
      echo 'STRONA GLOWNA';
    }

    if($menu == 'page') {
      echo 'STRONY';
    }

    if($menu == 'author') {
      echo 'O AUTORZE';
    }

    if($menu == 'contact') {
      echo 'KONTAKT';
    }
  }

  else {
    echo 'BLAD';
  }
?>
