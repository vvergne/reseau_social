<?php

$authorized_languages = ['fr','en'];

if(!empty($_GET['lang']) && in_array($_GET['lang'],$authorized_languages)) {
  $_SESSION['locale'] = $_GET['lang'];
} else {
  if(!isset($_SESSION['locale'])){
    $_SESSION['locale'] = $authorized_languages[0];
  }
}

require('locales/menu.php');







 ?>
