<?php
session_start();
require('filters/auth_filter.php');
require('config/database.php');
require('includes/constants.php');
require('includes/fonctions.php');

if(!empty($_GET['id']) && $_GET['id'] === get_session('user_id')){
  // recupere les infos user  en bdd en utilisant l'id
  $user = find_user_by_id($_GET['id']);
  if(!$user) {
  }
} else {
  redirect('profile.php?id='.get_session('user_id'));
}


if(isset($_POST['update'])) {

  $errors = [];

  if(not_empty(['name','city','country','sex'])){

  //si tous les champs ont été remplis
    extract($_POST);

    $q = $db->prepare("UPDATE users SET name = :name, city = :city, country = :country, sex = :sex,
                      twitter = :twitter, github = :github, available_for_hiring = :available_for_hiring, description = :description WHERE id = :id");

    $q->execute([
      'name'=> $name,
      'city'=> $city,
      'country'=> $country,
      'sex'=> $sex,
      'twitter'=> $twitter,
      'github'=> $github,
      'available_for_hiring'=> !empty($available_for_hiring) ? '1' : '0',
      'description' => $description,
      'id' => get_session('user_id'),
    ]);

    redirect('profile.php?id='.get_session('user_id'));
    set_flash('Profil mis à jour !');

  }
  else {
    save_input_data();
    $errors[] = "Veuillez remplir tous les champs marqués d'un (*)";
  }


    }  else {
    clear_input_data();
  }


  require('views/edit_user.view.php');




 ?>
