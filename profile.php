<?php
session_start();
require('config/database.php');
require('includes/constants.php');
require('includes/fonctions.php');



if(!empty($_GET['id'])){
  // recupere les infos user  en bdd en utilisant l'id
  $user = find_user_by_id($_GET['id']);
  if(!$user) {
  }
} else {
  redirect('profile.php?=id'.get_session('user_id'));
}



require('views/profile.view.php');


?>
