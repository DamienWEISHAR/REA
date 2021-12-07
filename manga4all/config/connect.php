<?php
//connexion à la bdd
// class Database {
//     private $host = "localhost";
//     private $database_name = "manga4all";
//     private $username = "root";
//     private $password = "";

//     public $conn;

//     public function getConnection(){
//         $this->conn = null;
//         try{
//             $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password);
//             $this->conn->exec("set names utf8");
//         }catch(PDOException $exception){
//             echo "Database could not be connected: " . $exception->getMessage();
//         }
//         return $this->conn;
//     }
// }  

  //connexion à la base de données
    //(à modifier en fonction de votre base de données dans mon cas la bdd l'appele task1)
    $bdd = new PDO('mysql:host=localhost;dbname=manga4all', 'root','', 
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>
