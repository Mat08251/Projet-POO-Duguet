<?php 
   require_once('connexion-bdd.php');
   $connexion = new Database('localhost', 'user', 'root', '');
   $bdd = $connexion->PDOConnexion();

?>