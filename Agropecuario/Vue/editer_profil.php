<?php

    require ("Modele/utilisateur.php");
    $user= getUserData();
    $entete = entete();
    $contenu = editer_profil($user);
    $pied = pied();

    include ('gabarit.php');
?>

