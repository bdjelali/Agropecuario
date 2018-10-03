<?php
    require ("Modele/utilisateur.php");

    $entete = entete();
    $contenu = ajouterlogement();
    $pied = pied();

    include 'gabarit.php';
  
?>
