<?php 
include "partials/header.php";

?>

<h1>Saisie d'un nouvel artiste</h1>

    <a href="index.php">Retour à la liste des artistes</a>

    <br>
    <br>

    <form action ="script_disc_ajout.php" method="post">

        <label for="nom">Titre du disque :</label><br>
        <input type="text" name="nom" id="nom">
        <br><br>

        <label for="artist">Artiste :</label><br>
        <select name="artist" id="artist">
            <option value="Null" selected disabled>...</option>
            <option value="6">AC/DC</option>
            <option value="9">Fleshtones</option>
            <option value="7">Marillion</option>
            <option value="4">Queens of the Stone Age</option>
            <option value="1">Neil Young</option>
            <option value="5">Serge Gainsbourg</option>
            <option value="10">The Clash</option>
            <option value="2">YES</option>
            <option value="8">Bob Dylan</option>
            <option value="3">Rolling Stones</option>
            </select>
            <br><br>
       
        <label for="annee">Année :</label><br>
        <input type="text" name="annee" id="annee">
        <br><br>

        <label for="genre">Genre :</label><br>
        <input type="text" name="genre" id="genre">
        <br><br>

        <label for="label">Label :</label><br>
        <input type="text" name="label" id="label">
        <br><br>

        <label for="prix">Prix :</label><br>
        <input type="text" name="prix" id="prix">
        <br><br>

        <label for="pochette">Pochette :</label><br>
        <input type="file" name="pochette"> 
        <br><br>
        <input type="submit" value="Ajouter">
        <input type="reset" value="Retour">

    </form>


<?php
include "partials/footer.php";
?>