<?php 

/*-----------------------------------------------------------------------------------------------------
CREATION CLASS COMMENTAIRES:
-----------------------------------------------------------------------------------------------------*/

class Commentaire {

    /*------------------------------------------------------------
                            ATTRIBUTS
        -------------------------------------------------------------*/
        private $titre;  
        private $contenu;
    
        /*------------------------------------------------------------
                            CONSTRUCTEUR
        -------------------------------------------------------------*/
    
        // constructeur (pour obliger l'utilisateur à rentrer des données spécifiques)
        public function __construct($titre, $contenu){ // ATTENTION, il y a un double underscore avant construct !!!!!
            $this->titre= $titre; //$nom est une variable juste pour la fonction __construct
            $this->contenu = $contenu;             
      
        }

    /*------------------------------------------------------------
                            GETTERS & SETTERS
        -------------------------------------------------------------*/

        // Get & Set de l'attribut $titre:
        public function getTitre(){
            return $this->titre;
        }
        public function setTitre($newTitre){
            $this->titre = $newTitre;
        }
         // Get & Set de l'attribut $contenu:
         public function getContenu(){
            return $this->contenu;
        }
        public function setContenu($newContenu){
            $this->contenu = $newContenu;
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