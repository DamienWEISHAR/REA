<?php

/*-----------------------------------------------------------------------------------------------------
CREATION CLASS PROFIL:
-----------------------------------------------------------------------------------------------------*/

class Profil {

    /*------------------------------------------------------------
                            ATTRIBUTS
        -------------------------------------------------------------*/
        private $nom;  
            
        /*------------------------------------------------------------
                            CONSTRUCTEUR
        -------------------------------------------------------------*/
    
        // constructeur (pour obliger l'utilisateur à rentrer des données spécifiques)
        public function __construct($nom){ // ATTENTION, il y a un double underscore avant construct !!!!!
            $this->nom= $nom; //$nom est une variable juste pour la fonction __construct          
        }

    /*------------------------------------------------------------
                            GETTERS & SETTERS
        -------------------------------------------------------------*/

        // Get & Set de l'attribut $titre:
        public function getNom(){
            return $this->nom;
        }
        public function setNom($newNom){
            $this->nom = $newNom;
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