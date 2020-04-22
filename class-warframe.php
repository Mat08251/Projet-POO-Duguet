<?php 
   class Warframe 
   {
    //Declaration de variable 
    private $_nomWarframe;
    private $_pointDeBouclier;
    private $_pointDAttaque;
    private $_pointDeVie;


     //Initialisation de notre Classe
     public function __construct( $nomWarframe ) {
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

      public function jeuxDeDes() {
        $var= rand(1,6);
        return $var;
    }


        public function affiche() {
          echo ("<center>======================================<br>");
          echo ("Warframe Crée du nom de : ".$this->_nomWarframe." <br><br> Ses Caractéristiques sont : <br>");
          echo ("- Nombre de Point D'attaque : ".$this->_pointDAttaque."<br>");
          echo ("- Nombre de Point De Défense : ".$this->_pointDeBouclier."<br>");
          echo ("- Nombre de Point de Vie : ".$this->_pointDeVie."<br>");
          echo ("======================================<br></center>");
      }


      public function doubleattaque($pointdattaque){
        $des = $this->jeuxDeDes();
        echo"<br><center>Le joueur jette son des <br>";
        if($des>3){
          $pointdattaque=$pointdattaque*2;
          echo"<br>Super Le joueur a doublé son attaque pour ce tour, car il a effectué un dés de : ".$des."<br>";
        }else{
          echo"<br>Le joueur ne double pas son attaque, car il a effectué un dés de : ".$des."<br>";
        }
        return $pointdattaque;
    }

      public function pouvoirWarframe($pointdattaque){
        $des = $this->jeuxDeDes();
        echo"<br><center>La warframe utilise son pouvoir <br>";
        if($des>4){
          $pointdattaque=$pointdattaque*3;
          echo"<br>La warframe utilise son pouvoir, il a effectué un dés de : ".$des."<br>";
        }else{
          echo"<br>La warframe a raté son pouvoir, il a effectué un dés de : ".$des."<br>";
        }
        return $pointdattaque;
      }


      public function recevoirAttaque($pointdattaque){
        $pointdattaque= $pointdattaque - $this->_pointDeBouclier;
        if($pointdattaque > 0){
          $this->_pointDeVie = $this->_pointDeVie - $pointdattaque;
          echo "AH!, tu vas me le payer : <br> Point de vie enlevé : ".$pointdattaque."<br> Point de Vie restant  au joueur adverse :".$this->_pointDeVie;
        }else {
          echo "Mon bouclier est plus puissant que t'es coups</center>";
        }
    }
   }

?>