<?php
    class Titulaire{
        private string $_nom;
        private string $_prenom;
        private DateTime $_dateDeNaissance;
        private int $_age;
        private string $_ville;
        private array $_comptes;

        public function __construct(string $nom, string $prenom, string $dateDeNaissance, string $ville)
        {
            $this->_nom = $nom;
            $this->_prenom = $prenom;
            $this->_dateDeNaissance = new DateTime($dateDeNaissance);
            $this->_age = 0;
            $this->_ville = $ville;
            $this->_comptes = [];
        }
        public function __toString()
        {
            return $this->_nom;
        }

        
        public function getNom()
        {
            return $this->_nom;
        }
        public function getPrenom()
        {
            return $this->_prenom;
        }
        public function getAge()
        {
            return $this->_age;
        }
        public function getVille()
        {
            return $this->_ville;
        }

        public function setNom($nom)
        {
            $this->_nom = $nom;
        }
        public function setPrenom($prenom)
        {
            $this->_prenom = $prenom;
        }
        public function setDateDeNaissance($dateDeNaissance)
        {
            $this->_dateDeNaissance = $dateDeNaissance;
        }
        public function setVille($ville)
        {
            $this->_ville = $ville;
        }
        public function setCompte($comptes)
        {
            $this->_comptes = $comptes;
        }

        public function addComptes(Compte $comptes)
        {
            $this->_comptes[] = $comptes;
        }
        // fonction qui permet de calculer age
        public function calcAge()
        {
            $aujourdHui = new DateTime();
            $diff = $this->_dateDeNaissance->diff($aujourdHui);
            return $this->_age = $diff->y;
        }
    }
?>