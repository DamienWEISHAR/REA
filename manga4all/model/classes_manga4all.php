<?php
/*------------------------------
CREATION CLASS UTILISATEUR:
-------------------------------*/

    class Utilisateur{

        /*------------------------------------------------------------
                                ATTRIBUTS
            -------------------------------------------------------------*/
            private $pseudo;  // public = mot-clé qui permet d'accéder à cet élément depuis n'importe où
            private $email; // $variable qui sont des attributs
            private $conf_email;
            private $mdp; //
            private $conf_mdp;
            
            /*------------------------------------------------------------
                                CONSTRUCTEUR
            -------------------------------------------------------------*/
        
            // constructeur (pour obliger l'utilisateur à rentrer des données spécifiques)
            public function __construct($pseudo, $email, $conf_email, $mdp, $conf_mdp){ // ATTENTION, il y a un double underscore avant construct !!!!!
                $this->pseudo= $pseudo; //$nom est une variable juste pour la fonction __construct
                $this->email = $email;
                $this->conf_email = $conf_email;
                $this->mdp = $mdp;
                $this->conf_mdp = $conf_mdp;
            }

        /*------------------------------------------------------------
                                GETTERS & SETTERS
            -------------------------------------------------------------*/

            // Get & Set de l'attribut $pseudo
            public function getPseudo(){
                return $this->pseudo;
            }
            public function setPseudo($newPseudo){
                $this->pseudo = $newPseudo;
            }
            // Get & Set de l'attribut $email
            public function getEmail(){
                return $this->email; 
            }
            public function setEmail($newEmail){
                $this->email = $newEmail; 
            }

             // Get & Set de l'attribut $conf_email
             public function getConf_email(){
                return $this->conf_email; 
            }
            public function setConf_email($newConf_email){
                $this->conf_email = $newConf_email; 
            }

            // Get & Set de l'attribut $mdp
            public function getMdp(){
                return $this->mdp;
            }
            public function setMdp($newMdp){
                $this->mdp = $newMdp;
            }
        
            // Get & Set de l'attribut $conf_mdp
            public function getConf_mdp(){
                return $this->conf_mdp;
            }
            public function setConf_mdp($newConf_mdp){
                $this->conf_mdp = $newConf_mdp;
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

/*-----------------------------------------------------------------------------------------------------
CREATION CLASS DROITS:
-----------------------------------------------------------------------------------------------------*/

class Droit {

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

/*-----------------------------------------------------------------------------------------------------
CREATION CLASS EDITION:
-----------------------------------------------------------------------------------------------------*/

class Edition {

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
/*-----------------------------------------------------------------------------------------------------
CREATION CLASS ETATS:
-----------------------------------------------------------------------------------------------------*/

class Etat {

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