<?php
    require("connexion.php");

    // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
    function mdp($db,$mail){
        //require("connexion.php");
        $reponse = $db->query('SELECT id, mdp FROM utilisateur WHERE mail="'.$mail.'" OR pseudo="'.$mail.'"' );
        return $reponse;
    }

    // fonction qui cherche le mail d'un utilisateur avec un identifiant dans la base de données
    function utilisateur($db){
        //require("connexion.php");
        $reponse = $db->query('SELECT mail FROM utilisateur');
        return $reponse;
    }


?>