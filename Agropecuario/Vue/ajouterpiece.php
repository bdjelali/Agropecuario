<?php
    require 'Modele/logement.php';

    $Logements = getUserLogements();
    $entete = entete();
    $contenu = ajouterpiece($Logements);
    $pied = pied();

    include 'gabarit.php';
  
?>
