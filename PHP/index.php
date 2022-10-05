<?php
include "db/db.php";
$db = connectionBase();
$tableau = findDiscs();
$arti = findArtists();

include "partials/header.php";
?>
<div class="container">
    <h1>Nous avons  <span class="text-primary"><?= count($tableau) ?></span>  disques en stock : </h1>
    <a class="btn btn-dark btn-sm" href="disc_new.php">Ajouter un nouveau disque<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-vinyl-fill" viewBox="0 0 16 16"></svg></a>
    <table class="table table-striped">
        <tr>
            <th>Pochette</th>
            <th>Disques</th>
            <th>Label</th>
            <th>Année</th>
            <th>Genre</th>
        </tr>
      

        <?php foreach ($tableau as $disc) : ?>
          
            <tr> 

                <td class=""> <img src="<?= "images/".$disc->disc_picture?>" class="card-img-top" alt="pochette" style="width: 12rem" ></td>
                
                <td class=""><?= $disc->disc_title ?></td>
                <td class=""><?= $disc->disc_label ?></td>
                <td class=""><?= $disc->disc_year ?></td>
                <td class=""><?= $disc->disc_genre ?></td>
                <td class=""> <a class="btn btn-dark btn-sm" href="detail.php?id=<?= $disc->disc_id ?>&&name=<?=$disc->disc_title ?>">Détails<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-vinyl-fill" viewBox="0 0 16 16"> 
                          
                         
                        </svg></a> </td>
            </tr>
      
        <?php endforeach; ?>

    </table>
</div>

<?php include "partials/footer.php"; ?>