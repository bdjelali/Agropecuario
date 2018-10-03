<?php

if(isset($_GET['cible']) && $_GET['cible']=="ajouterlogement") { 

    if(isset($_SESSION['userID'])) {
    include ('Modele/logement.php');
        
if(isset($_POST['formlogement'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $superficie = htmlspecialchars($_POST['superficie']);
    $n_piece = htmlspecialchars($_POST['n_piece']);


   if(!empty($_POST['nom']) AND !empty($_POST['superficie']) AND !empty($_POST['n_piece'])) {
      $nomlength = strlen($nom);
      if($nomlength <= 255) {
            
            insertlogement($nom,$superficie, $n_piece);
            echo"<script>alert('Votre logement a bien été créé');document.location.href='index.php'</script>";

      }
       else
        {
            echo"<script>alert('Votre nom de logement ne doit pas dépasser 255 caractères !');document.location.href='Vue/ajouterlogement.php'</script>";
        }
   }
        else
        {
            //$erreur = "Tous les champs doivent être complétés !";
            echo"<script>alert('Tous les champs doivent être completés !') document.location.href='Vue/ajouterlogement.php'</script>";

        }
}
}
}
?>