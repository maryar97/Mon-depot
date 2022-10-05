<?php
include "db/db.php";
$db = connectionBase();
$ida = idartist();
$art = artistid();

include "partials/header.php";

?>
<div class="container">
    <h1>Détails du disque</h1>
    <table class="table table-striped">
        <tr>
            <th>Artiste</th>
            <th>Titre</th>
            <th>Année</th>
            <th>Genre</th>
            <th>Label</th>
            <th>Prix</th>
        </tr>
   
     <?php foreach ($ida as $artist) : ?>
        <?php foreach ($art as $nom) : ?>
    
           <td class=""><?= $nom->artist_name ?></td>
           <td class=""><?= $artist->disc_title ?></td>
           <td class=""><?= $artist->disc_year ?></td>
           <td class=""><?= $artist->disc_genre ?></td>
           <td class=""><?= $artist->disc_label ?></td>
           <td class=""><?= $artist->disc_price ?></td>
           <img src="<?= "images/".$artist->disc_picture?>" class="card-img-top" alt="pochette" style="width: 20rem"> <a class="btn btn-dark btn-sm" href="modifvin.php?id=<?= $artist->disc_id ?>">Modifier<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-vinyl-fill" viewBox="0 0 16 16"></svg></a>
    <?php endforeach;?>
    <?php endforeach;?>
        </table>
</div>


<a class="btn btn-dark btn-sm" href="script_disc_delete.php?id=<?= $artist->disc_id ?>">Supprimer<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-vinyl-fill" viewBox="0 0 16 16"></svg></a>
<?php
include "partials/footer.php";
?>