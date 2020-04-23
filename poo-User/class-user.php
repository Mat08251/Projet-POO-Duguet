<?php 


class User
{
    private $_pseudoUser;
    private $_passwordUser;
    private $_emailUser;
   
   public function __construct( $pseudoUser ) {
       $this->_pseudoUser = $_pseudoUser;
       $this->_passwordUser = $_passwordUser;
       $this->_emailUser = $_emailUser;
   }

   public function getpseudoUser(){
    return $this->_pseudoUser;
  }

  public function getpasswordUser(){
    return $this->_passwordUser;
  }

  public function getemailUser(){
    return $this->_emailUser;
  }


  public function affiche(){
      // REQUETE PERMETTANT LA RECHERCHE DES UTILISATEURS
        $req = $bdd->prepare("SELECT * FROM user WHERE pseudoUser = :pseudoUser AND emailUser = :emailUser AND passwordUser = :passwordUser");
        $req->execute(array(
                    'pseudoUser' => $_POST["pseudoUser"],
                    'emailUser' => $_POST["emailUser"],
                    'passwordUser' => $_POST["passwordUser"]
        ));
  }

?>