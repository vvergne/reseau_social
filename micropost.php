<?php
session_start();

include('filters/auth_filter.php');
require('config/database.php');
require('includes/fonctions.php');


if(isset($_POST['publish']))
{
  if(!empty($_POST['content']))
  {
      extract($_POST);
      $q = $db->prepare('INSERT INTO microposts(content, user_id ,created_at) VALUES(:content , :user_id, NOW() )');
      $q->execute([
        'content' => $content ,
        'user_id' => get_session('user_id'),
      ]) ;

      set_flash('Votre staut à bien été mis à jour !');
  }

  else {
    set_flash('Aucun satus fournis','danger');
  }
}

redirect('profile.php?id='.get_session('user_id'));
