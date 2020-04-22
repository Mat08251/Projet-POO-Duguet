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


  class database {
      //varaibles
      protected $_host;
      protected $_dbname;
      protected $_username;
      protected $_password;

      //création du constructeur
      public function __construct($_host, $_dbname, $_username, $_password) {
          $this->_host = $_host;
          $this->_dbname = $_dbname;
          $this->_username = $_username;
          $this->_password = $_password;
      }

      //fonction permettant de se connecter
      public function PDOConnexion() {
          $bdd = new PDO('mysql:host='.$this->_host.'; dbname='.$this->_dbname, $this->_username, $this->_password);
          $bdd ->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
          $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          //faire un return de la BDD ou non en fonction de la ou on utilise la connexion
          return $bdd;
      }
  }
?>