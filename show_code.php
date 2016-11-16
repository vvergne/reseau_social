<?php
session_start();
require('filters/auth_filter.php');
require('config/database.php');
require('includes/fonctions.php');
require('includes/constants.php');
include('includes/init.php');



if(!empty($_GET['id'])){
$data = find_code_by_id($_GET['id']);


  if(!$data) {

    redirect('share_code.php');
  }

} else {
  redirect('share_code.php');
}



?>
<?php require('views/show_code.view.php');?>
