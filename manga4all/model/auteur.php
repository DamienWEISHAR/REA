<?php

/*-----------------------------------------------------------------------------------------------------
CREATION CLASS AUTEUR:
-----------------------------------------------------------------------------------------------------*/

class Auteur{

    /*------------------------------------------------------------
                            ATTRIBUTS
        -------------------------------------------------------------*/
        private $nom;  
        private $prenom;
    
        /*------------------------------------------------------------
                            CONSTRUCTEUR
        -------------------------------------------------------------*/
    
        // constructeur (pour obliger l'utilisateur à rentrer des données spécifiques)
        public function __construct($nom, $prenom){ // ATTENTION, il y a un double underscore avant construct !!!!!
            $this->nom= $nom; //$nom est une variable juste pour la fonction __construct
            $this->prenom = $prenom;             
      
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
         // Get & Set de l'attribut $prenom:
         public function getPrenom(){
            return $this->prenom;
        }
        public function setPrenom($newPrenom){
            $this->nom = $newPrenom;
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