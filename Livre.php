<?php
    class Livre{
        private string $_titre;
        private DateTime $_parution;
        private int $_nbPages;
        private float $_prix;
        private Auteur $_auteur;

    public function __construct(string $titre, string $date, int $nbPages, float $prix, Auteur $auteur)
    {
        $this->_titre = $titre;
        $this->_parution = new DateTime($date);
        $this->_nbPages = $nbPages;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $auteur->addLivre($this);
    }
    public function __toString()
    {
        return $this->_titre;
    }

    public function getTitre()
    {
        return $this->_titre;
    }
    public function setTitre($titre)
    {
        $this->_titre = $titre;
    }

    public function getParution()
    {
        return $this->_parution;
    }
    public function setParution($parution)
    {
        $this->_parution = new DateTime($parution);
    }

    public function getPages()
    {
        return $this->_pages;
    }
    public function setPages($pages)
    {
        $this->_pages = $pages;
    }

    public function getPrix()
    {
        return $this->_prix;
    }
    public function setPrix($prix)
    {
        $this->_prix = $prix;
    }

    public function getAuteur()
    {
        return $this->_auteur;
    }
    public function setAuteur($auteur)
    {
        $this->_auteur = $auteur;
    }
}
?>