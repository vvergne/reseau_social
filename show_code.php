<?php
session_start();
require('filters/auth_filter.php');
require('config/database.php');
require('includes/fonctions.php');
require('includes/constants.php');

if(!empty($_GET['id'])) {
  $q= $db->prepare('SELECT code FROM codes WHERE id = ? ') ;
  $success = $q->execute([$_GET['id']]);


  $data = $q->fetch(PDO::FETCH_OBJ);

  if(!$data) {

    redirect('share_code.php');
  }

} else {
  redirect('share_code.php');
}



?>
<?php require('views/show_code.view.php');?>
