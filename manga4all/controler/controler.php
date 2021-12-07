<?php
 
    //ajout de la vue (page HTML)
    include ('../vue/vue.php');

    //connexion à la BDD
    include ('../config/connect.php');
    
    // ajout de la page de classe:
    include ('../model/utilisateur.php');
   
    
    
    
    //test existence des champs 
    if (isset($_POST['util_pseudo']) && isset($_POST['util_email']) && isset ($POST['conf_util_email']) && isset($_POST['util_mdp']) && isset($_POST['conf_util_mdp'])){ 
        
        //teste correspondance des MDP et email:
        if($_POST['util_email'] == $_POST['conf_util_email'] && $_POST['util_mdp'] == $_POST['conf_util_mdp']){

            $user = new Utilisateur();

            // vérification que les champs soient remplis:
            if($_POST['util_pseudo'] != null && $_POST['util_email'] != null && $_POST['conf_util_email'] != null && $_POST['util_mdp'] != null && $_POST['conf_util_mdp'] != null){
                $user->setUtil_pseudo($_POST['util_pseudo']);
                $user->setUtil_email($_POST['util_email']);
                $user->setUtil_mdp($_POST['util_mdp']);
       
                $user->createUser($bdd); 
                echo 'Utilisateur crée!' ;
            }       
        }else{
        echo '<p>Veuillez remplir les champs de formulaire.</p>';
        }    
    }
    
?>
