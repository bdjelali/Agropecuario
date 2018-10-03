<?php

 function insertcapteur($piece,$type,$numero_serie,$valeur)
 {
    require("connexion.php");
    $req = $db->prepare('INSERT INTO capteur(id_piece,type,numero_serie,valeur) VALUES(?, ?, ?, ?)');
    $req->execute(array($piece, $type,$numero_serie, $valeur));
    return $req;
 }

function changervaleurcapteur($id, $valeur) {
    require("connexion.php");
    $req = $db->prepare("UPDATE capteur set valeur = ? WHERE id = ?");
    $req->execute(array($valeur, $id));
    return $req;
	
}
  
function getUserCapteurs()
{
    require("connexion.php");
    $capt = $db->prepare("SELECT capteur.id id,capteur.type typecapteur, capteur.valeur valeur, logement.nom nomlogement,piece.nom nompiece FROM logement,piece,capteur where logement.id = piece.id_logement and piece.id = capteur.id_piece and id_utilisateur = ?");
    $capt->execute(array($_SESSION['userID']));
    $capteur = $capt->fetchAll();
    return $capteur;
}

function getCapteur($id)
{
    require("connexion.php");
    $capt = $db->prepare("SELECT 
	capteur.id id,
	capteur.type typecapteur, 
	capteur.valeur valeur, 
	logement.nom nomlogement,
	piece.nom nompiece 
	FROM logement,piece,capteur where logement.id = piece.id_logement and piece.id = capteur.id_piece and capteur.id = ?");
    $capt->execute(array($id));
    $capteur = $capt->fetchAll();
    return $capteur;
	
}
function supprimercapteur($numero_serie, $db)
{
    $req = $db->prepare('DELETE FROM capteur WHERE numero_serie LIKE :id');
    $req -> execute(array('id' => $numero_serie));
}
?>
