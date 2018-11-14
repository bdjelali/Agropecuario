<?php
    $entete = entete("Agropecuario / Pagina principal");
    $contenu = connexion();
    $contenu .= $erreur;
    $pied = pied();

    include 'gabarit.php';
?>