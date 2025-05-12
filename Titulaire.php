<?php
    class Titulaire{
        private string $_nom;
        private string $_prenom;
        private DateTime $_dateDeNaissance;
        private DateTime $_age;
        private string $_ville;
        private Compte $_comptes;

        public function __construct(string $nom, string $prenom, string $dateDeNaissance, string $ville, Compte $comptes)
        {
            $this->_nom = $nom;
            $this->_prenom = $prenom;
            $this->_dateDeNaissance = new DateTime($dateDeNaissance)
            $this->_ville = $ville;
            $this->_comptes = $comptes;

            $aujourdHui = new DateTime();
            $diff = $this->dateDeNaissance->diff($aujourdHui);

            $this->_age = $diff->y;
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
        public function getNom()
        {
            return $this->_comptes;
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
            $this->_dateDeNaissance = $dateDeNaissance
        }
        public function setVille($ville)
        {
            $this->_ville = $ville;
        }
        public function setCompte($comptes)
        {
            $this->_comptes = $comptes;
        }
    }
?>