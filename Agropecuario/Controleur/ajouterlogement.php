<?php

if(isset($_GET['cible']) && $_GET['cible']=="ajouterlogement") { 

    if(isset($_SESSION['userID'])) {
    include ('Modele/logement.php');
        
if(isset($_POST['formlogement'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $superficie = htmlspecialchars($_POST['superficie']);
    $n_piece = htmlspecialchars($_POST['n_piece']);
    $direccion = htmlspecialchars($_POST['direccion']);
    $ciudad = htmlspecialchars($_POST['ciudad']);
    $codigo = htmlspecialchars($_POST['codigo_postal']);


   if(!empty($_POST['nom']) AND !empty($_POST['superficie']) AND !empty($_POST['direccion']) AND !empty($_POST['ciudad']) AND !empty($_POST['codigo_postal']) AND !empty($_POST['n_piece'])) {
      $nomlength = strlen($nom);
      if($nomlength <= 255) {
            
            insertlogement($nom,$superficie,$direccion,$ciudad,$codigo,$n_piece);
            echo"<script>alert('Tu campo ha sido creada');document.location.href='index.php'</script>";

      }
       else
        {
            echo"<script>alert('Su nombre de campo no debe exceder los 255 caracteres!');document.location.href='Vue/ajouterlogement.php'</script>";
        }
   }
        else
        {
            //$erreur = "Tous les champs doivent être complétés !";
            echo"<script>alert('Todos los campos no están rellenos!') document.location.href='Vue/ajouterlogement.php'</script>";

        }
}
}
}
?>