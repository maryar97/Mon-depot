<?php
// TODO: Valeurs à modifier

use PhpParser\Node\Expr\Cast\Object_;

define('URL' , 'mysql:host=localhost;dbname=record;charset=utf8');
define('USER' , 'admin');
define('PASS' , 'Maryline');

/**
 * fonction de connexion
 *
 * @return void
 */
function connectionBase() 
{
    try 
    {
        $connection = new PDO(URL,USER ,PASS );
        $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $connection;
    } catch (Exception $e)
    {
        echo 'Erreur : ' . $e->getMessage() . '<br />';
        echo 'N° : ' . $e->getCode();
        die('Fin du script');
    }
}

function findArtists(){
    try {
        $db = connectionBase();
        $requete = $db->query("SELECT DISTINCT * FROM artist JOIN disc ON disc.artist_id = artist.artist_id");
        $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();
    } catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage() . '<br />';
        echo 'N° : ' . $e->getCode();
        die('Fin du script');
    }
    return $tableau;
}

// fonction de récupération
function findDiscs()
{
    $db = connectionBase();
    $requetePrep = $db->query("SELECT * FROM disc");    
    $result = $requetePrep->fetchAll(PDO::FETCH_OBJ);
    $requetePrep->closeCursor();
    //  var_dump($result);
    
    return $result;
}

function artistid() 
{
    $db = connectionBase();
    $id = $_GET["id"];
    $requeteind = $db->prepare("SELECT artist_name FROM artist INNER JOIN disc ON disc.artist_id = artist.artist_id WHERE disc_id=?");
    $requeteind->execute(array($id));
    $artist = $requeteind->fetchAll(PDO::FETCH_OBJ);
    $requeteind->closeCursor();

    return $artist;
}                      


function idartist()
{
    $db = connectionBase();
    $id = $_GET["id"];
    $requete = $db->prepare("SELECT * FROM disc WHERE disc_id=?");
    $requete->execute(array($id));
    $myArtist = $requete->fetchALL(PDO::FETCH_OBJ);
    $requete->closeCursor();

    return $myArtist;
}

function modifid()
{
    $db = connectionBase();
    $id = $_GET["id"];
    $requete = $db->prepare("SELECT * FROM disc WHERE disc_id=?");
    $requete->execute(array($id));
    $myArtist = $requete->fetch(PDO::FETCH_OBJ);
    $requete->closeCursor();

    return $myArtist;
}

function ajoutart()
{
    $db = connectionBase();
    $id = $_GET["id"];
    $requete = $db->prepare("SELECT * FROM artist");
    $requete->execute(array($id));
    $myArtist = $requete->fetchALL(PDO::FETCH_OBJ);
    $requete->closeCursor();

    return $myArtist;
}

function listd()
{
    $db = connectionBase();
    $requete = $db->prepare("SELECT * FROM artist");
    $myArtist = $requete->fetchALL(PDO::FETCH_OBJ);
    $requete->closeCursor();

    return $myArtist;
}