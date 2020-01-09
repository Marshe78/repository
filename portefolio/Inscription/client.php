<?php

class Client
{
    private $_nom;
    private $_prenom;
    private $_age;
    private $_avantage;

    const AV_FORT = "prenium";
    const AV_MOYEN = "expert";
    const AV_FAIBLE = "normale";


    public function __construct($nomClient,$prenomClient,$ageClient,$avantageClient)
    {
        $this->_nom = $nomClient;
        $this->_prenom = $prenomClient;
        $this->_age = $ageClient;
        $this->_avantage = $avantageClient;
    }

    public function getclient()
    {
        return $this->_nom;
        return $this->_prenom;
        return $this->_age;
        return $this->_avantage;
    }

    public function setAvantage($avantageClient)
    {
        if (in_array($avantageClient, [self::AV_FORT, self::AV_MOYEN, self::AV_FAIBLE]))
        {
            $this->avantage = $avantageClient;
        }
    }

    public function afficher()
    {
        echo $this->_nom;
        echo $this->_prenom;
        echo $this->_age;
        echo self::AV_FORT;
    }

    public function setclient()
    {
        $this->nom = $nomClient;
        $this->prenom = $prenomClient;
        $this->age = $ageClient;
        $this->avantage = $avantageClient;
    }

    public function compteprenom()
    {
        $nb_cara = strlen($this->_prenom);
        echo $nb_cara;
    }
}

?>