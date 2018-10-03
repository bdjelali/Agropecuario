<?php
    $entete = entete("MySmartHouse / Accueil non connecté");
    $contenu = connexion();
    $contenu .= $erreur;
    $pied = pied();

    include 'gabarit.php';
?>