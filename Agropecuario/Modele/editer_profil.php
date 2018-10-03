<?php

function getUserData(){
        require("connexion.php");
        $requser = $db -> prepare ('SELECT * FROM utilisateur WHERE id =?');
        $requser -> execute(array($_SESSION ['userID']));
        $user = $requser -> fetch();
        return $user;
    }

function editPseudo($db, $pseudo, $id){
    $reponse = $db->prepare("UPDATE utilisateur SET pseudo = ? WHERE id = ?");
    $reponse->execute(array($pseudo, $id)); 
}

function editMail($db, $mail, $id){
    $reponse = $db->prepare("UPDATE utilisateur SET mail = ? WHERE id = ?");
    $reponse->execute(array($mail, $id));
}

function editmdp($db, $mdp, $id)
	{
		$reponse= $db->prepare("UPDATE utilisateur SET mdp = ? WHERE id = ?");
		$reponse -> execute(array($mdp, $id));
	}
?>