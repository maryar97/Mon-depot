<?php
include "db/db.php";
$db = connectionBase();
$dis = modifid();
$ida = ajoutart();
include "partials/header.php";
?>


<h1>Modification du disque</h1>

<a href="index.php">Retour à la liste des artistes</a>

<br>
<br>

<form action ="script_disc_modif.php" method="post">

<input type="hidden" name="id" value="<?= $dis->disc_id ?>">

<label for="nom">Nom du disque :</label><br>
<input type="text" name="nom" id="nom" value="<?= $dis->disc_title ?>">
<br><br>

<label for="annee">Année :</label><br>
<input type="text" name="annee" id="annee" value="<?= $dis->disc_year ?>">
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

<label for="genre">Genre :</label><br>
<input type="text" name="genre" id="genre" value="<?= $dis->disc_genre ?>">
<br><br>

<label for="label">Label :</label><br>
<input type="text" name="label" id="label" value="<?= $dis->disc_label ?>">
<br><br>

<label for="prix">Prix :</label><br>
<input type="text" name="prix" id="prix" value="<?= $dis->disc_price ?>">
<br><br>

<input type="reset" value="Annuler">
<input type="submit" value="Modifier">

</form>


<?php
include "partials/footer.php";
?>