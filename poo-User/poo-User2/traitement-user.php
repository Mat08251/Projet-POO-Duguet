<?php
require_once('connexion-bdd.php');
$connexion = new Database('localhost', 'user', 'root', '');
$bdd = $connexion->PDOConnexion();

require_once('class-user.php');

$emailUser = !empty($_POST['emailUser']) ? $_POST['emailUser'] : NULL;
$passwordUser = !empty($_POST['passwordUser']) ? $_POST['passwordUser'] : NULL;



$user1 = new User($emailUser, $passwordUser);

$user1 -> connect($bdd);


?>