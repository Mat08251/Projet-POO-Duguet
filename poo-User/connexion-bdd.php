<?php
try {
    $user = "root";
    $pass = "";
    //connexion à la bdd
    $bdd = new PDO('mysql:host=localhost;dbname=user;charset=utf8', $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}catch(Exception $e)
{
    //en cas d'erreur, un message s'affiche et tout se stop
    die('Erreur : '.$e->getMessage());
}

?>