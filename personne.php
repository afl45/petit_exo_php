<?php
    class Personne {
        private $nom;
        private $prenom;
        private $age;
        
        public function affiche() {
            echo "Je suis ".$this->prenom." ".$this->nom." et j'ai ".$this->age." ans !<br>";
        }

        public function set_nom($str) {
            return $this->nom = $str;
        }
        
        public function set_prenom($str) {
            return $this->prenom = $str;
        }
        
        public function set_age($n) {
            return $this->age = $n;
        }
    }
?>