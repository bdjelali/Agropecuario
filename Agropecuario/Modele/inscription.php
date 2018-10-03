<?php

	function reqmail($db, $mail)
		{              
			$reponse= $db->query("SELECT utilisateur.mail FROM utilisateur");
            while($donnee = $reponse->fetch())
            {          

                if($donnee['mail']==$mail)
                { 
                    return false;
                }
            }
		    return true;
		}

	function insertutilisateur($db, $pseudo, $nom, $prenom, $mail, $mdp, $address, $city, $zip, $country, $phone)
		{
			$reponse = $db -> prepare('INSERT INTO utilisateur(pseudo, nom, prénom, mail, mdp, adresse, ville, code_postal, pays, numero_tel) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
			$reponse -> execute(array($pseudo, $nom, $prenom, $mail, $mdp, $address, $city, $zip, $country, $phone));
            return $reponse;
		}


?>