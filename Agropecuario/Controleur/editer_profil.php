<?php

if (isset ($_GET ['cible']) && $_GET ['cible'] == "verifedition"){
    
if(isset($_SESSION['userID'])) {
    include ('Modele/editer_profil.php');
    $user = getUserData();
    
   if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo']) {
      $newpseudo = htmlspecialchars($_POST['newpseudo']);
      $reponse = editpseudo($db,$newpseudo, $_SESSION ['userID']);
       echo"<script>alert('Votre pseudo a bien été modifié');document.location.href='index.php'</script>";
   }

   if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail']) {
      $newmail = htmlspecialchars($_POST['newmail']);
      $reponse = editmail ($db, $newmail, $_SESSION ['userID']);
      echo"<script>alert('Votre adresse mail a bien été modifié');document.location.href='index.php'</script>";
   }

   if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
      $mdp1 = sha1($_POST['newmdp1']);
      $mdp2 = sha1($_POST['newmdp2']);
      
       if($mdp1 == $mdp2) {
         $reponse= editmdp ($db, $mdp1, $_SESSION ['userID']);
          echo"<script>alert('Votre mot de passe a bien été modifié');document.location.href='index.php'</script>"; 
      } else {
           
         echo"<script>alert('Vos deux mots de passe ne correspondent pas');document.location.href='http://localhost:8888/MySmartHouse%20-%20MVC/index.php?cible=verifedition'</script>";
      }
       
   }

}
    header('Location : ../index.php');

}

?>
