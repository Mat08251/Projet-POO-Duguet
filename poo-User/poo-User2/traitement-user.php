<?php
require_once('connexion-bdd.php');
$connexion = new Database('localhost', 'poo', 'root', '');
$bdd = $connexion->PDOConnexion();

require_once('class-user.php');

$email = !empty($_POST['email']) ? $_POST['email'] : NULL;
$pass = !empty($_POST['pass']) ? $_POST['pass'] : NULL;


$user1 = new User($email, $pass);

$user1 -> connect($bdd);


?>