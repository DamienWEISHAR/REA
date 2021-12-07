<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../controler/inscription.css">
    <script src="https://unpkg.com/vue@next" defer></script>
    <script src="../source/js.js" defer></script>
    <title>Manga4All</title>
</head>

<body>
    <header>
        
    </header>
    <!-- Faire le lien vers la page d'accueil -->
    <div class="icon">
        <a href=""><img src="https://img.icons8.com/cute-clipart/64/000000/home.png"/></a>
    </div>
    <h1>PAGE D'INSCRIPTION</h1>
    <section id="vue">
        <form v-on:submit.prevent="popup"  action="" method="POST" >
            <p>{{essai}}</p>
                
            <label for="util_pseudo">Pseudo</label>       
            <input type="text" name="util_pseudo" placeholder="Ex: pseudo" required>
                
            <label for="util_email">E-mail</label>
            <input type="text" name="util_email" placeholder="Ex: monMail@FAI.com" required>
                
            <label for="util_conf_email">Confirmation de l'e-mail</label>
            <input type="text" name="util_conf_email" placeholder="Ex: monMail@FAI.com"required>
                
            <label for="util_mdp">Mot de passe</label>
            <input type="password" name="util_mdp" minlength="3" maxlength="10" placeholder="Ex: P@ssWo4d" required>
            
            <label for="util_conf_mdp">Confirmation du mot de passe</label>
            <input type="password" name="util_conf_mdp" minlength="3" maxlength="10" placeholder="Ex: P@ssWo4d"required> 
            
            <div>
                <input id="check" type="checkbox" name="" id="checkbox"required>
                <p>J'accepte les conditions générales</p>
            </div>

            <input class="submit" type="submit" value="S'inscrire">
                
        </form>
    </section>
    <p>Vous avez déjà un compte? Connectez-vous <a href="">ICI!</a> </p> <!-- Faire le lien pop-up pour la connexion-->
</body>

</html>
