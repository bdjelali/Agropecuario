<?php

function insertlogement ($nom, $superficie, $n_piece){
    require("connexion.php");
    $insertlgmnt = $db->prepare("INSERT INTO logement (nom, superficie, n_piece, id_utilisateur) VALUES(?, ?, ?, ?)");
    $insertlgmnt->execute(array($nom, $superficie, $n_piece, $_SESSION['userID']));
    return $inserlgmnt;
}

function getUserLogements(){
    require("connexion.php");
    
    $log = $db->prepare("SELECT id, nom FROM logement where id_utilisateur = ?");
    $log->execute(array($_SESSION['userID']));

    $Logements = $log->fetchAll();

    return $Logements;
}

function getUserPieces(){
    require("connexion.php");
    
    $pie = $db->prepare("SELECT piece.id id,logement.nom nomlogement,piece.nom nompiece FROM logement,piece where logement.id = piece.id_logement and id_utilisateur = ?");
    $pie->execute(array($_SESSION['userID']));

    $pieces = $pie->fetchAll();

    return $pieces;
}
?>