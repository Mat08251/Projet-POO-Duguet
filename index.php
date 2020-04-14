<?php
class Warframe
{
    private $_nom,
            $_degats,
            $_pointDeVie,
            $_bouclier;

    const MA_WARFRAME = 1;
    const ENNEMIE_TUE = 2;
    const WARFRAME_ATTAQUE = 3;

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    public function attaquer(Warframe $perso)
    {
        if ($perso->pointDeVie() == $this->_pointDeVie)
        {
            return self::MA_WARFRAME;
        }
        //on vérifie que l'on ne se tape pas soit même.
        //on indique au personne frappé qu'il doit recevoir des dégâts.
        return $perso->recevoirDegats();
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

    public function recevoirDegats()
    {
        //on augmente de 5 les dégâts.
        // si on a 100 de dégâts ou plus, le personnage à été tué.
        //sinon on renvoie que le personnage à bien été frappé.
    }

    public function degats()
    {
        return $this->_degats;
    }

    public function nom()
    {
        return $this->_nom;
    }

    public function pointDeVie()
    {
        return $this->_pointDeVie;
    }

    public function bouclier()
    {
        return $this->_bouclier;
    }

    public function setDegats($degats)
    {
        $degats = (int) $degats;

        if ($degats >= 0 && $degats <= 100)
        {
            $this->_degats = $degats
        }
    }

    public function setNom($nom)
    {
        if (is_string($nom))
        {
            $this->_nom = $nom;
        }
    }
}

?>