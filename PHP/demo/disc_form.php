<?php
    // Récupération des valeurs :
    $id = (isset($_POST['id']) && $_POST['id'] != "") ? $_POST['id'] : Null;
    $artist = (isset($_POST['artist']) && $_POST['artist'] != "") ? $_POST['artist'] : Null;
    $nom = (isset($_POST['nom']) && $_POST['nom'] != "") ? $_POST['nom'] : Null;
    $annee = (isset($_POST['annee']) && $_POST['annee'] != "") ? $_POST['annee'] : Null;
    $genre = (isset($_POST['genre']) && $_POST['genre'] != "") ? $_POST['genre'] : Null;
    $label = (isset($_POST['label']) && $_POST['label'] != "") ? $_POST['label'] : Null;
    $prix = (isset($_POST['prix']) && $_POST['prix'] != "") ? $_POST['prix'] : Null;

    // En cas d'erreur, on renvoie vers le formulaire
    if ($id == Null) {
        header("Location: index.php");
    }
    elseif ($nom == Null || $artist== Null || $annee == Null || $genre == Null || $label == Null || $prix == Null) {
        header("Location: modifdisc.php?id=".$id);
        exit;
    }

    // Si la vérification des données est ok :
    require "db/db.php"; 
    $db = connectionBase();

    try {
        // Construction de la requête UPDATE sans injection SQL :
        $requete = $db->prepare("UPDATE disc SET disc_title = :nom, disc_year = :annee, disc_genre = :genre, disc_label = :label, disc_price = :prix, artist_id = :artist WHERE disc_id = :id;");
        $requete->bindValue(":artist", $artist, PDO::PARAM_STR);
        $requete->bindValue(":id", $id, PDO::PARAM_INT);
        $requete->bindValue(":nom", $nom, PDO::PARAM_STR);
        $requete->bindValue(":annee", $annee, PDO::PARAM_STR);
        $requete->bindValue(":genre", $genre, PDO::PARAM_STR);
        $requete->bindValue(":label", $label, PDO::PARAM_STR);
        $requete->bindValue(":prix", $prix, PDO::PARAM_STR);
        $requete->execute();
        $requete->closeCursor();
    }

    catch (Exception $e) {
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script (script_artist_modif.php)");
    }

    // Si OK: redirection vers la page artist_detail.php
    header("Location: detail.php?id=" . $id);
    exit;
?>