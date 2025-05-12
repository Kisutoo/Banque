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
        }
        public function __toString()
        {
            return->_titulaire;
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

        
        public function set($libelle)
        {
            $this->_libelle = $libelle;
        }
        public function set($solde)
        {
            $this->_solde = $solde;
        }
        public function set($devise)
        {
            $this->_devise = $devise;
        }
        public function set($titulaire)
        {
            $this->_titulaire = $titulaire;
        }
        
    }
?>