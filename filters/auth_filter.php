<?php


if (!isset($_SESSION['user_id']) && !isset($_SESSION['pseudo'])) {
  $_SESSION['fowarding_url'] = $_SERVER['REQUEST_URI'];
  $_SESSION['notification']['message'] = "Vous devez etre connecté avant d\'acceder à la page" ;
  $_SESSION['notification']['type'] = 'danger' ;
  header('Location:login.php');
  exit();
}


 ?>
