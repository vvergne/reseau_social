<?php
session_start();

include('includes/init.php');
include('filters/guest_filter.php');
require('config/database.php');
require('includes/fonctions.php');
require('includes/constants.php');



//si le formulaire a été soumis
if(isset($_POST['login'])) {

  if(not_empty(['identifiant','password'])){

  //si tous les champs ont été remplis
    extract($_POST);

    $q = $db->prepare("SELECT id, pseudo FROM users
            WHERE (pseudo = :identifiant OR email = :identifiant)
            AND password = :password AND active = '1'");

    $q->execute([
      'identifiant'=> $identifiant,
      'password'=> sha1($password)
    ]);


    $userHasBeenFound = $q->rowCount();

    if($userHasBeenFound) {

      $user = $q->fetch(PDO::FETCH_OBJ);

      $_SESSION['user_id'] = $user->id;
      $_SESSION['pseudo'] = $user->pseudo;


      // Si l'user veux rester connecté
      if(isset($_POST['remember_me']) && $_POST['remember_me'] == 'on'){
        setcookie('pseudo', $user->pseudo,time()+3600*24*365,null,null,false,true);
        setcookie('user_id', $user->id,time()+3600*24*365,null,null,false,true);
      }

      redirect_intent_or('profile.php?id='.$user->id);
    }

    else {
      set_flash('Combinaison Identifiant/Password incorrecte','danger');
      save_input_data();
    }

    //si tous les champs ont étés remplis
    if(not_empty(['identifiant','password'])) {
      }

    }  else {
    clear_input_data();
  }
}
 ?>
 <?php require('views/login.view.php');?>
