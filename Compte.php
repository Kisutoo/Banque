<?php

    class Compte{
        private string $_libelle;
        private float $_solde;
        private string $_devise;
        private Titulaire $_titulaire;

        public function __construct(string $libelle, float $solde, string $devise, Titulaire $titulaire)
        {
            $this->_libelle = $libelle;
            $this->_solde = $solde;
            $this->_devise = $devise;
            $this->_titulaire = $titulaire;
            $titulaire->addComptes($this);
        }
        public function __toString()
        {
            return $this->_titulaire;
        }
        
        public function getLibelle()
        {
            return $this->_libelle;
        }
        public function getSolde()
        {
            return $this->_solde;
        }
        public function getDevise()
        {
            return $this->_devise;
        }
        public function getTitulaire()
        {
            return $this->_titulaire;
        }

        
        public function setLibelle($libelle)
        {
            $this->_libelle = $libelle;
        }
        public function setSolde($solde)
        {
            $this->_solde = $solde;
        }
        public function setDevise($devise)
        {
            $this->_devise = $devise;
        }
        public function setTitulaire($titulaire)
        {
            $this->_titulaire = $titulaire;
        }

        public function credit(float $nb)
        {
            $this->_solde = $this->_solde + $nb;
        }
        public function debit(float $nb)
        {
            $this->_solde = $this->_solde - $nb;
        }
        public function virement(Compte $b, float $nb)
        {
            $this->debit($nb);
            $b->credit($nb);
        }
    }
?>