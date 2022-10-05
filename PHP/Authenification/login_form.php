
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'authentification</title>
</head>
<body>
    <form action ="login_script.php" method="post">    
        <label class="Gras" for="Mail">login :</label>
            <input type="email" name="Email" id="aling"><br>
        <label class="Gras" for="mdp">Mot de passe :</label>
            <input type="text" name="mdp" id="mdp"><br>
    </form>
    <input type="submit" value="Valider">
</body>
</html>