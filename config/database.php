<?php


  //DATABASE Credentials
  define('DB_HOST','localhost');
  define('DB_NAME','reso');
  define('DB_USERNAME','root');
  define('DB_PASSWORD','');

try {

  $db =  new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USERNAME,DB_PASSWORD);

  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  $db->query('SELECT * FROM users');
  }


  catch(PDOExecption $e) {
    die('Erreur: '.$e->getMessage());
  }

 ?>
