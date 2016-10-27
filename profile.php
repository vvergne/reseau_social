<?php
session_start();
require('filters/auth_filter.php');
require('includes/fonctions.php');
require('config/database.php');
require('includes/constants.php');



if(!empty($_GET['id'])){
  // recupere les infos user  en bdd en utilisant l'id
  $user = find_user_by_id($_GET['id']);

  if(!$user) {
    redirect('index.php');
  } else {
    $q = $db->prepare('SELECT content, created_at FROM microposts WHERE user_id = :user_id ORDER BY created_at DESC');
    $q->execute([
      'user_id' => get_session('user_id'),
    ]);
    $microposts = $q->fetchAll(PDO::FETCH_OBJ);

  }
} else {
  redirect('profile.php?id='.get_session('user_id'));
}





require('views/profile.view.php');


?>
