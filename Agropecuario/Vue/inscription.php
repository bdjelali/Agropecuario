<?php
    
    include ('commun.php');

    $entete = entete("MySmartHouse / Inscription");
    $contenu = forminscription();
    $pied = pied();

    include '../gabarit.php';
?>