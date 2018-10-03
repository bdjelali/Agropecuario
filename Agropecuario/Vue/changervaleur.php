<?php
    require 'Modele/gestioncapteur.php';

    $capteur = getCapteur($_GET['id']);
    $entete = entete();
    $contenu = valeurcapteur($capteur);
    $pied = pied();

    include 'gabarit.php';
?>
