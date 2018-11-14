<?php

if(isset($_GET['cible']) && $_GET['cible']=="ajouterpiece") { 

if(isset($_SESSION['userID'])) {
    include ('Modele/piece.php');   
    
if(isset($_POST['formpiece'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $superficie = htmlspecialchars($_POST['superficie']);
    $direccion = htmlspecialchars($_POST['direccion']);
    $ciudad = htmlspecialchars($_POST['ciudad']);
    $logement = $_POST['logement']; 
    if(!empty($_POST['nom']) AND !empty($_POST['superficie'])) {
      $nomlength = strlen($nom);
      if($nomlength <= 255) {
            insertpiece($nom,$superficie,$logement);
            echo"<script>alert('Tu parte ha sido creada');document.location.href='index.php';</script>";

      }
       else
        {
            echo"<script>alert('Su nombre de parte no debe exceder los 255 caracteres!');document.location.href='Vue/ajouterpiece.php';</script>";
        }
   }
        else
        {
            echo"<script>alert('Todos los campos no están rellenos!');document.location.href='Vue/ajouterpiece.php';</script>";
        }
}
}
}
?>