<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAIL</title>
</head>
<body>

<?php 
include 'db.php';

// var_dump($_GET["artist_id"]);

$artist = getArtist($_GET["id"]);  
var_dump($artist);

echo "Artiste n°" . $artist->artist_id . '<br>';
echo $artist->artist_name . '<br>';
echo $artist->artist_url . '<br>';

?>

<a href="artists.php">Retour</a>
<a href="artist_form.php?id=<?= $artist->artist_id ?>">Modifier</a>
<a href="script_artist_delete.php">Supprimer</a>
      

</body>
</html>