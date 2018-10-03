<?php

if(isset($_GET['cible']) && $_GET['cible']=="changervaleur") {
if(isset($_SESSION['userID'])) {
if(isset($_POST['formvaleur'])) {
    include ('Modele/gestioncapteur.php');

    if(isset($_POST['valeur']))
    {
        changervaleurcapteur($_POST['id'], $_POST['valeur']);
        echo"<script>alert('La valeur de votre capteur a été changé avec succès');document.location.href='index.php';</script>";
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