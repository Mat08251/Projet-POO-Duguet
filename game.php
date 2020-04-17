<?php
class Warframe
{
    private $_nom,
            $_degats,
            $_pointDeVie,
            $_bouclier;

     public function __construct( $nom ) {
         $this->_nom = $nom;
         $this->_degats = rand(1,100);
         $this->_pointDeVie = 150;
         $this->_bouclier = rand(1,200);    
     }

     public function getnom(){
        return $this->
    }

     public function affiche(){
         echo (" warframe Crée du nom de : ".$this->_nom. "<br>");
         echo (" warframe Crée du nom de : ".$this->_degats. "<br>");
         echo (" warframe Crée du nom de : ".$this->_pointDeVie. "<br>");
         echo (" warframe Crée du nom de : ".$this->_bouclier. "<br>");
     }

     public function jeuxDeDes() {
         $var = rand(1,6);
         return $var;
     }
    


     public function doubleattaque($degats) {
         $des =$this->jeuxDeDes();
         echo "<br>Le joueur jette son des <br>";
         if($des>3){
             $degats = $degats*2;
             echo"<br> Le joueur à doublé son attaque pour ce tour, car il 
         }
     }
}
?>