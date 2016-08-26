<?php
session_start();
include('filters/auth_filter.php');
require('config/database.php');
require('includes/constants.php');
require('includes/fonctions.php');



if(!empty($_GET['id'])){
  // recupere les infos user  en bdd en utilisant l'id
  $user = find_user_by_id($_GET['id']);
  if(!$user) {
    redirect('index.php');
  }
} else {
  redirect('profile.php?=id'.get_session('user_id'));
}



require('views/profile.view.php');


?>
