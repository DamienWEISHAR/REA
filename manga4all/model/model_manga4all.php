<?php 

    // si c'est égal à null:
    if ($pseudo == null){
        echo '<p> Veuillez saisir un pseudo! </p>';
    }else if ($email == null){
        echo '<p> Veuillez saisir un email! </p>';
    }else if ($conf_email == null){
        echo '<p> Veuillez confirmer votre email! </p>';
    }else if ($mdp == null){
        echo '<p> Veuillez saisir un mot de passe! </p>';
    }else if ($conf_mdp == null){
        echo '<p> Veuillez confirmer votre mot de passe! </p>';
    }
// sinon faire ceci (connexion à la bdd):
    else {
        $bdd = new PDO('mysql:host=localhost;dbname=manga4all', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $bdd->exec("set names utf8"); 

    // requête préparée:
        try{
            // $req = 'INSERT INTO article (nom_article, contenu_article) VALUES(:nom_article, :contenu_article)';
            // $req->bindParam (":nom_article", $name);
            // $req->bindParam (":contenu_article", $content);
            // $req -> execute();
            $req = $bdd ->prepare('INSERT INTO utilisateurs (util_pseudo, util_email, util_conf_email,, util_mdp, util_conf_mdp) 
                VALUES (:util_pseudo, :util_email, :util_conf_email,:util_mdp, :util_conf_mdp)');
            $req->bindParam (":util_pseudo", $pseudo);
            $req->bindParam (":util_email", $email);
            $req->bindParam (":util_conf_email", $conf_email);
            $req->bindParam (":util_mdp", $mdp);
            $req->bindParam (":util_util_conf_mdp", $conf_mdp);
            $res = $req -> execute();

            if ($res){
                echo "<p>Enregistrement effectué, félicitations!!</p>";
            }
            else{
                echo '<p> Erreur d\'enregistrement!</p>';
            }
            
            // récupération des données et affichage
            $return=$bdd->prepare('SELECT * FROM utilisateurs');
            $return->execute();


            while ($donnees=$return->fetch()){
                echo '<p>'.$donnees['name_user'].'</p>
                     <p>'.$donnees['first_name_user'].'</p>
                    <p>'.$donnees['login_user'].'</p>';
                // On n'affiche jamais le MDP !!!
            }
            
        }    
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }   

    }

?>