<?php
    require 'Modele/logement.php';

    $pieces = getUserPieces();
    $entete = entete();
    $contenu = ajoutercapteur($pieces);
    $pied = pied();

    include 'gabarit.php';
?>
