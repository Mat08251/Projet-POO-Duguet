<?php 


class User
{
    private $_pass;
    private $_email;
   
   public function __construct( $_email,  $_pass) {
       $this->_email = $_email;
       $this->_pass = $_pass;
   }


  public function getpass(){
    return $this->_pass;
  }

  public function getemail(){
    return $this->_email;
  }


  public function affiche(){
      // REQUETE PERMETTANT LA RECHERCHE DES UTILISATEURS
        $req = $bdd->prepare("SELECT * FROM user WHERE  email = :email AND pass = :pass");
        $req->execute(array(
                    'email' => $_POST["email"],
                    'pass' => $_POST["pass"]
        ));
  }
}
?>