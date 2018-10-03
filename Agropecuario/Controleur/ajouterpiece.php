<?php

if(isset($_GET['cible']) && $_GET['cible']=="ajouterpiece") { 

if(isset($_SESSION['userID'])) {
    include ('Modele/piece.php');   
    
if(isset($_POST['formpiece'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $superficie = htmlspecialchars($_POST['superficie']); 
    $logement = $_POST['logement']; 
    if(!empty($_POST['nom']) AND !empty($_POST['superficie'])) {
      $nomlength = strlen($nom);
      if($nomlength <= 255) {
            insertpiece($nom,$superficie,$logement);
            echo"<script>alert('Votre piece a bien été créé');document.location.href='index.php';</script>";


      }
       else
        {
            echo"<script>alert('Le nom de votre pièce ne doit pas dépasser 255 caractères !');document.location.href='Vue/ajouterpiece.php';</script>";
        }
   }
        else
        {
            echo"<script>alert('Tous les champs doivent être completés !');document.location.href='Vue/ajouterpiece.php';</script>";
        }
}
}
}
?>