<?php
    require 'Modele/gestioncapteur.php';

    $capteurs = getUserCapteurs();
    $entete = entete();
    $contenu = affichagecapteur($capteurs);
    $pied = pied();

    include 'gabarit.php';
?>
