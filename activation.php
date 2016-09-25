<?php
session_start();

include('filters/guest_filter.php');
require('includes/fonctions.php');
require('config/database.php');


if(!empty($_GET['p']) && is_already_in_use('pseudo',$_GET['p'],'users') && !empty($_GET['token'])){

$pseudo = $_GET['p'];
$token = $_GET['token'];

$q = $db-> prepare('SELECT email, password fROM users WHERE pseudo = ?');
$q->execute([$peudo]);


$data = $q->fetch(PDO::FETCH_OBJ);

$token_verif = sha1($pseudo.$data->email.$data->password);

if ($token == $token_verif) {

  $q = $db-> prepare("UPDATE users SET active ='1' WHERE pseudo = ?");
  $q->execute([$peudo]);
  set_flash('Votre compte a bel et bien été activé');
   redirect('login.php');

}

else {
  set_flash('Parametres invalide ','danger');
  redirect('index.php');
}

} else {
  redirect('index.php');
}


 ?>
