<?php 
   class Warframe 
   {
    //Declaration de variable 
    private $_nomWarframe;
    private $_pointDeBouclier;
    private $_pointDAttaque;
    private $_pointDeVie;


     //Initialisation de notre Classe
     public function __construct( $nomPersonnage ) {
        $this->_nomWaframe = $nomWarframe;
        $this->_pointDeBouclier = rand(50,100);
        $this->_pointDAttaque =  rand(30,90);
        $this->_pointDeVie =  100;
      }

      public function getnomWarframe(){
        return $this->_nomWarframe;
      }
    
      public function getpointDeBouclier(){
        return $this->_pointDeBouclier;
      }
    
      public function getpointDAttaque(){
        return $this->_pointDAttaque;
      }
    
      public function getpointDeVie(){
        return $this->_pointDeVie;
      }
    
      public function setpointDeVie($pointDeVie){
          $this->_pointDeVie = $pointDeVie;
      }
   }

?>