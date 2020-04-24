<?php 


class User
{
    private $_email;
    private $_pass;
    
   
   public function __construct( $_pass, $_email ) {
       $this->_pass = $_pass;
       $this->_email = $_email;
   }

   public function getEmail(){
    return $this->_email;
  }

  public function getPass(){
    return $this->_pass;
  }

  


  public function connect($bdd){
      // REQUETE PERMETTANT LA RECHERCHE DES UTILISATEURS
        $req = $bdd->prepare("SELECT * FROM user WHERE email = :email AND pass = :pass");
        $req->execute(array(
                    'email' => $this->_email,
                    'pass' => $this->_pass
        ));
        

        $count = $req->rowCount();
    if($count > 0)
    {
        session_start();
        $_SESSION['email'] = $this->_email;
        $_SESSION['pass'] = $this->_pass;
        header("location:../poo-User2/tab-admin/index.php");
    }
    else
    {
     //Mauvais identifiant ou mauvais tout cours
     header("location:coucou.php");
    }
  }
}
?>