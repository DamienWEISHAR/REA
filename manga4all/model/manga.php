<?php
/*-----------------------------------------------------------------------------------------------------
CREATION CLASS MANGA:
-----------------------------------------------------------------------------------------------------*/

class Manga{

    /*------------------------------------------------------------
                            ATTRIBUTS
        -------------------------------------------------------------*/
        private $nom;  // public = mot-clé qui permet d'accéder à cet élément depuis n'importe où
        private $tome; // $variable qui sont des attributs
        private $edition;
        private $langue;
        private $prix;
        private $etat;
        /*------------------------------------------------------------
                            CONSTRUCTEUR
        -------------------------------------------------------------*/
    
        // constructeur (pour obliger l'utilisateur à rentrer des données spécifiques)
        public function __construct($nom, $tome, $edition, $langue, $prix){ // ATTENTION, il y a un double underscore avant construct !!!!!
            $this->nom= $nom; //$nom est une variable juste pour la fonction __construct
            $this->tome = $tome;             
            $this->edition = $edition; 
            $this->langue = $langue;
            $this->prix = $prix;
        }

    /*------------------------------------------------------------
                            GETTERS & SETTERS
        -------------------------------------------------------------*/

        // Get & Set de l'attribut $nom:
        public function getNom(){
            return $this->nom;
        }
        public function setNom($newNom){
            $this->nom = $newNom;
        }
        // Get & Set de l'attribut $tome:
        public function getTome(){
            return $this->tome; 
        }
        public function setTome($newTome){
            $this->tome = $newTome; 
        }

         // Get & Set de l'attribut $edition:
         public function getEdition(){
            return $this->edition; 
        }
        public function setEdition($newEditionl){
            $this->edition = $newEdition; 
        }

        // Get & Set de l'attribut $langue:
        public function getLangue(){
            return $this->langue;
        }
        public function setLangue($newLangue){
            $this->langue = $newLangue;
        }
    
        // Get & Set de l'attribut $prix:
        public function getConf_mdp(){
            return $this->prix;
        }
        public function setConf_mdp($newPrix){
            $this->prix = $newPrix;
        }
        
        // Get & Set de l'attribut $etat:
         public function getEtat(){
            return $this->etat;
        }
        public function setEtat($newEtat){
            $this->etat = $newEtat;
        }
   
        /*------------------------------------------------------------
                               METHODES
            -------------------------------------------------------------*/
            public function create (){
            }
    
            public function show (){
            }
    
            public function modify (){
            }
    
            public function delete (){
            }

    }

?>