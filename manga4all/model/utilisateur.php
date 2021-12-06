<?php

/*------------------------------
CREATION CLASS UTILISATEUR:
-------------------------------*/

class Utilisateur{

    /*------------------------------------------------------------
                            ATTRIBUTS
        -------------------------------------------------------------*/
        private $id_util; 
        private $util_pseudo;  
        private $util_email; 
        private $util_mdp; 
        
        
        //public $conn; // public = mot-clé qui permet d'accéder à cet élément depuis n'importe où
        /*------------------------------------------------------------
                            CONSTRUCTEUR
        -------------------------------------------------------------*/
    
        // constructeur (pour obliger l'utilisateur à rentrer des données spécifiques)
        /* public function __construct(){ // ATTENTION, il y a un double underscore avant construct !!!!!
            $this->conn = new Database();
            $this->conn = $this->conn->getConnection();
        } */

    /*------------------------------------------------------------
                            GETTERS & SETTERS
        -------------------------------------------------------------*/


        // Get & Set de l'attribut $id_util
        public function getId_util(){
            return $this->id_util;
        }
        public function setId_util($newId_util){
            $this->id_util = $newId_util;
        }

        // Get & Set de l'attribut $util_pseudo
        public function getUtil_pseudo(){
            return $this->util_pseudo;
        }
        public function setUtil_pseudo($newUtil_pseudo){
            $this->util_pseudo = $newUtil_pseudo;
        }
        // Get & Set de l'attribut $util_email
        public function getUtil_email(){
            return $this->util_email; 
        }
        public function setUtil_email($newUtil_email){
            $this->util_email = $newUtil_email; 
        }

         

        // Get & Set de l'attribut $util_mdp
        public function getUtil_mdp(){
            return $this->util_mdp;
        }
        public function setUtil_mdp($newUtil_mdp){
            $this->util_mdp = $newUtil_mdp;
        }
    
    /*------------------------------------------------------------
                           METHODES
        -------------------------------------------------------------*/
        public function createUser (){
            try{
                $bdd = new PDO('mysql:host=localhost;dbname=manga4all', 'root','', 
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
                $req = $bdd->prepare('INSERT INTO utilisateurs (util_pseudo, util_email, util_mdp)
                VALUES (:util_pseudo, :util_email, :util_email )');
                $req->execute(array(
                    'util_pseudo' => $this->util_pseudo,
                    'util_email' => $this->util_email,
                    'util_mdp' => $this->util_mdp,                                                           
                ));
            }
            catch(Exception $e) { 
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
    

        }

    public function show (){
    }

    public function modify (){
    }

    public function delete (){
    }


}

?>

