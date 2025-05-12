<?php
    class Auteur{
        private string $_nom;
        private string $_prenom;
        private array $_livres;
    public function __construct(string $nom, string $prenom)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_livres = [];
    }
    public function __toString()
    {
        return $this->_nom;
    }

    public function getNom()
    {
        return $this->_nom;
    }
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }
    
    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function addLivre(Livre $livre){

        // quand cette fonction est appellé, elle va array push l'objet livre en argupent dans le tableau de livres de l'autreur
        $this->_livres[] = $livre;
    }
}
?>