<?php

    //connexion à la BDD
    include ('../config/connect.php');
    
    // ajout de la page de classe:
    include ('../model/utilisateur.php');
    
    //ajout de la vue (page HTML)
    include ('../vue/vue.php');
    
    
    
    //test existence des champs 
    if (isset($_POST['util_pseudo']) && isset($_POST['util_email']) && isset($_POST['util_mdp'])){ 
        $user = new Utilisateur();
        
        $user->setUtil_pseudo($_POST['util_pseudo']);
        $user->setUtil_email($_POST['util_email']);
        $user->setUtil_mdp($_POST['util_mdp']);
       

        $user->createUser(); 
        
    }
    // else{
      
    //     echo '<p>Veuillez remplir les champs de formulaire.</p>';
    // }
?>
