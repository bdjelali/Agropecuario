<?php

if(isset($_GET['cible']) && $_GET['cible']=="ajoutercapteur") {
if(isset($_SESSION['userID'])) {
if(isset($_POST['formcapteur'])) {
    include ('Modele/gestioncapteur.php');

    if(isset($_POST['piece'])
       AND isset($_POST['type'])
       AND isset($_POST['nserie'])
       AND $_POST['piece']!=""
       AND $_POST['type']!=""
       AND $_POST['nserie']!="")
    {
		$type = $_POST['type'];
		switch($type)
		{
		 case 'Lumière':
		  $valeur =1;
		  break;

		 case 'Température':
		  $valeur = 20;
		  break;

		 case 'Humidité':
		  $valeur = 15;
		  break;

		 default :
		  $valeur = null;
		  break;
		}

        insertcapteur($_POST['piece'],$_POST['type'],$_POST['nserie'], $valeur);
        echo"<script>alert('Votre capteur a été ajouté avec succès');document.location.href='index.php';</script>";
    }
    else
    {
        echo"<script>alert('Tous les champs ne sont pas remplis');document.location.href='Vue/ajoutercapteur.php';</script>";
    }
    echo"?<script>document.location.href='index.php?cible=ajoutercapteur'</script>";
  }
}
}
?>