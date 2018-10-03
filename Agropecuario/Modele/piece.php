<?php
function insertpiece ($nom, $superficie, $logement){
    require("connexion.php");
    $insertpiece = $db->prepare("INSERT INTO piece (nom, superficie,id_logement) VALUES(?, ?, ?)");
    $insertpiece->execute(array($nom, $superficie,$logement));
    return $insertpiece;
}
?>