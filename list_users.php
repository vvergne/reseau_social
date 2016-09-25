<?php
session_start();
require('config/database.php');
require('includes/constants.php');
require('includes/fonctions.php');

$q = $db->query('SELECT pseudo,id,email FROM users WHERE active =\'1\' ORDER BY pseudo ');
$users = $q->fetchAll(PDO::FETCH_OBJ);

require('views/list_users.view.php');
