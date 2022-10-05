<?php
    // Récupération du Nom :
    if (isset($_POST['nom']) && $_POST['nom'] != "") {
        $nom = $_POST['nom'];
    }
    else {
        $nom = Null;
    }

   $artist = (isset($_POST['artist']) && $_POST['artist'] != "") ? $_POST['artist'] : Null;
   $annee = (isset($_POST['annee']) && $_POST['annee'] != "") ? $_POST['annee'] : Null;
   $genre = (isset($_POST['genre']) && $_POST['genre'] != "") ? $_POST['genre'] : Null;
   $label = (isset($_POST['label']) && $_POST['label'] != "") ? $_POST['label'] : Null;
   $prix = (isset($_POST['prix']) && $_POST['prix'] != "") ? $_POST['prix'] : Null;
   $pochette = (isset($_POST['pochette']) && $_POST['pochette'] != "") ? $_POST['pochette'] : Null;


    // En cas d'erreur, on renvoie vers le formulaire
    if ($nom == Null || $annee== Null || $genre== Null || $label== Null || $prix== Null || $pochette== Null || $artist== Null) {
        header("Location: disc_new.php");
        exit;
    }

    // S'il n'y a pas eu de redirection vers le formulaire (= si la vérification des données est ok) :
    require "db/db.php"; 
    $db = connectionBase();

    try {
        
        $requete = $db->prepare("INSERT INTO disc (disc_title, disc_year, disc_genre, disc_label, disc_price, disc_picture, artist_id) VALUES (:nom, :annee, :genre, :label, :prix, :pochette, :artist);");
        $requete->bindValue(":nom", $nom, PDO::PARAM_STR);
        $requete->bindValue(":artist", $artist, PDO::PARAM_STR);
        $requete->bindValue(":annee", $annee, PDO::PARAM_STR);
        $requete->bindValue(":genre", $genre, PDO::PARAM_STR);
        $requete->bindValue(":label", $label, PDO::PARAM_STR);
        $requete->bindValue(":prix", $prix, PDO::PARAM_STR);
        $requete->bindValue(":pochette", $pochette, PDO::PARAM_STR);
        
        $requete->execute();
        $requete->closeCursor();
    }
    
    // Gestion des erreurs
    catch (Exception $e) {
        var_dump($requete->queryString);
        var_dump($requete->errorInfo());
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script (script_artist_ajout.php)");
    }
    
    // Si OK: redirection vers la page artists.php
    header("Location: index.php");
    
    // Fermeture du script
    exit;
    ?>
    