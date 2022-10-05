

<?php

/**
 * @throws Exception
 */
function getBillet($idBillet){
    $bdd= getBdd();
    $billet=$bdd->prepare('SELECT BIL_ID as id, BIL_DATE as date, BIL_TITRE as titre, BIL_CONTENU as contenu FROM T_BILLET WHERE BIL_ID =?;');
    $billet->execute(array($idBillet));

    if($billet->rowCount() == 1){
        return $billet->fetch();
    }
    else{
        throw new Exception("Aucun billet ne correspond à cet identifiant");
    }
}

function getBillets()
{
    $bdd = getBdd();
    return $bdd->query('SELECT BIL_ID as id, BIL_DATE as date, BIL_TITRE as titre, BIL_CONTENU as contenu FROM T_BILLET order by BIL_ID desc');
}

function getBdd(): PDO
{
    return new PDO("mysql:host=localhost;dbname=blig;charset=utf8", 'dylan', 'mariadb5880',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

function getCommentaires($id)
{
    $bdd = getBdd();
    $comments = $bdd->prepare('SELECT COM_ID as id, COM_DATE as date, COM_AUTEUR as auteur, COM_CONTENU as contenu FROM T_COMMENTAIRE WHERE BIL_ID =?');
    $comments->execute(array($id));
    return $comments;
}