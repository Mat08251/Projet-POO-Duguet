<?php 


class User
{
    private $_passwordUser;
    private $_emailUser;
   
   public function __construct( $_passwordUser, $_emailUser ) {
       $this->_passwordUser = $_passwordUser;
       $this->_emailUser = $_emailUser;
   }

  public function getpasswordUser(){
    return $this->_passwordUser;
  }

  public function getemailUser(){
    return $this->_emailUser;
  }


  public function affiche(){
      // REQUETE PERMETTANT LA RECHERCHE DES UTILISATEURS
        $req = $bdd->prepare("SELECT * FROM user WHERE emailUser = :emailUser AND passwordUser = :passwordUser");
        $req->execute(array(
                    'emailUser' => $_POST["emailUser"],
                    'passwordUser' => $_POST["passwordUser"]
        ));
  }
}
?>