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
		 case 'Agua':
		  $valeur =1;
		  break;

		 case 'Temperatura':
		  $valeur = 20;
		  break;

		 case 'Humidad':
		  $valeur = 15;
		  break;

		 default :
		  $valeur = null;
		  break;
		}

        insertcapteur($_POST['piece'],$_POST['type'],$_POST['nserie'], $valeur);
        echo"<script>alert('Su sensor ha sido añadido con éxito');document.location.href='index.php';</script>";
    }
    else
    {
        echo"<script>alert('Todos los campos no están rellenos');document.location.href='Vue/ajoutercapteur.php';</script>";
    }
    echo"?<script>document.location.href='index.php?cible=ajoutercapteur'</script>";
  }
}
}
?>