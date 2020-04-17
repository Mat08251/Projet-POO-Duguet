<?php 
  
  require_once('class-warframe.php');
  echo "<br><br><center><h1>L'écho du voile</h1></center>";
    echo "<b>Les règles sont les suivantes :</b> <br>";
    echo "- deux Warframes s'affronte, chaque joueur dispose d'un nombre de point de vie, d'un nombre de point d'attaque, et un nombre de point de Bouclier.<br>";
    echo "- Un des est lancé par chaque joueur pour savoir qui commence. Le plus grand commence.<br>";
    echo "- Le joueur lance un des, si résultat supérieur à 3 alors, sont attaque est doublé, et il attaque ensuite l'adversaire.<br>";
    echo "- Jeux en tour par tour.<br>";
    echo "- Le joueur qui perd est le premier qui n'a plus de vie.<br>";

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

?>