<?php 
  
  require_once('class-warframe.php');
  echo "<br><br><center><h1>L'écho du voile</h1></center>";
    echo "<b><center>Les règles sont les suivantes :</b> <br>";
    echo "- deux Warframes s'affronte, chaque joueur dispose d'un nombre de point de vie, d'un nombre de point d'attaque, et un nombre de point de Bouclier.<br>";
    echo "- Un des est lancé par chaque joueur pour savoir qui commence. Le plus grand commence.<br>";
    echo "- Le joueur lance un des, si résultat supérieur à 3 alors, sont attaque est doublé, et il attaque ensuite l'adversaire.<br>";
    echo "- Jeux en tour par tour.<br>";
    echo "- Le joueur qui perd est le premier qui n'a plus de vie.<br></center>";

    echo ("<center><br><br>======================================<br>");
    echo "Que la bataille commence !<br>";
    echo ("======================================<br></center>");


    // Entrer un nom de joueur J1
    $nomWarframe1 = 'Ember';
    $joueur1 = new Warframe($nomWarframe1);
    $joueur1->affiche();

    // Entrer un nom de joueur J2
    $nomWarframe2 = 'Sarin';
    $joueur2 = new Warframe($nomWarframe2);
    $joueur2->affiche();
    echo ("<center><br><br>======================================<br>");
    echo "<br>  Aller on lancer la partie !!!!!! A qui de commencer ? <br><br> ";
    echo ("======================================<br></center>");


    do{
      echo "<center>lancer de des du joueurs 1<br>";
      $des1 = $joueur1->jeuxDeDes();
      echo "lancer de des du joueurs 2<br>";
      $des2 = $joueur2->jeuxDeDes();
      echo "Résultat : J1 = ".$des1." , J2 = ".$des2." <br><br></center>";
    
      if ($des1>$des2){
        echo ("<center><br><br>======================================<br>");
        echo "<br>  Le Joueur 1 Commence <br><br> ";
        echo ("======================================<br></center>");
        $aquidejouer = 0;
      }else if ($des1<$des2){
        echo ("<center><br><br>======================================<br>");
        echo "<br>  Le joueur 2 Commence <br><br> ";
        echo ("======================================<br></center>");
        $aquidejouer = 1;
      }else {
        echo "Le lancé de des est équivalent, on recommence <br><br>";
      }
    

    } while ($des1 == $des2);

    $i=1;
    $j=1;
    $nbtour=1;
    while(($joueur1->getpointDeVie() > 0) && ($joueur2->getpointDeVie() > 0) && ($nbtour<=30) ){
    if ($aquidejouer <= 0){
      echo "<center><br><br>========================<br>";
      echo "Tour n°".$i." Joueur 1 :";
      echo "<br>========================<br><br>";
      // Est-ce qu'on double les points d'attaques
      $pointattaque = $joueur1->getpointDAttaque();
      $pointattaque = $joueur1->doubleattaque($pointattaque);
      $pointattaque = $joueur1->pouvoirWarframe($pointattaque);
      $joueur2->recevoirAttaque($pointattaque);
      $i++;
      $aquidejouer = $aquidejouer +1;
      echo"<br>";
    }else{
      echo "<center><br><br>========================<br>";
      echo "Tour n°".$j." Joueur 2 :";
      echo "<br>========================<br><br></center>";
    
      // Est-ce qu'on double les points d'attaques
      $pointattaque = $joueur2->getpointDAttaque();
      $pointattaque = $joueur2->doubleattaque($pointattaque);
      $pointattaque = $joueur2->pouvoirWarframe($pointattaque);
      $joueur1->recevoirAttaque($pointattaque);
        $aquidejouer = $aquidejouer -1;
      $j++;
      echo"<br></center>";
    }
    }    

    if($joueur1->getpointDeVie() <= 0){
      echo "<center><br><br>========================<br>";
      echo "LE JOUEUR N° 2 A GAGNER !!!!!!:";
      echo "<br>========================<br><br></center>";
    }else if ($joueur2->getpointDeVie() <= 0){
      echo "<center><br><br>========================<br>";
      echo "LE JOUEUR N° 1 A GAGNER !!!!!!:";
      echo "<br>========================<br><br></center>";
    
    }else {
      echo "<center><br><br>========================<br>";
      echo "Les Warframes sont à court d'énergie, elles sont trop faible pour finir ce jeux en 50 tours !!!!!!:";
      echo "<br>========================<br><br></center>";
    
    
    }
?>