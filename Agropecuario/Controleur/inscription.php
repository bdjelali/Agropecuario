<?php

include('Modele/inscription.php');

if(isset($_GET['cible']) && $_GET['cible']=="verifinscription") {
    
if(isset($_POST['forminscription'])) 
{
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prénom']);
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    $mdp = sha1($_POST['mdp']);
    $mdp2 = sha1($_POST['mdp2']);
    $address = htmlspecialchars($_POST['adresse']);
    $city = htmlspecialchars($_POST['ville']);
    $zip = htmlspecialchars($_POST['code_postal']);
    $country = htmlspecialchars($_POST['pays']);
    $phone = htmlspecialchars($_POST['numero_tel']);
    
    

   if($pseudo!="" AND $nom!="" AND 
      $prenom!="" AND $mail!="" AND $mail2!=""
      AND $mdp!="" AND $mdp2!="" AND $address!=""
      AND $city!="" AND $zip!="" AND $country!=""
      AND $phone!="") {
      
       include("Modele/utilisateur.php");
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 255) {
         if($mail == $mail2) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {            
               $mailDoesntExist = reqmail($db,$mail);
               if($mailDoesntExist) 
               {
                  if($mdp == $mdp2) 
                  {
                      if (isset($_POST['cgu']))
                      
                     insertutilisateur($db, $pseudo, $nom, $prenom, $mail, $mdp, $address, $city, $zip, $country, $phone);

                      echo"<script>alert('Votre compte a bien été créé, veuillez maintenant vous connecter');document.location.href='index.php'</script>";
        
                  } 
                   else 
                    {
                
                       echo"<script>alert('Vos mots de passe ne correspondent pas');document.location.href='Vue/inscription.php'</script>";
                    }
               } 
                else 
                {
                 echo"<script>alert('Adresse mail déjà utilisée !');document.location.href='Vue/inscription.php'</script>";
                }
            } 
             else 
             {
               echo"<script>alert('Votre adresse mail n'est pas valide !') document.location.href='Vue/inscription.php'</script>";

             }
         } 
          else 
          {
            echo"<script>alert('Vos adresses mail ne correspondent pas');document.location.href='Vue/inscription.php'</script>";

          }
      } 
       else
       {
        echo"<script>alert('Votre pseudo ne doit pas dépasser 255 caractères !');document.location.href='Vue/inscription.php'</script>";

       }
   }
    else
    {
      echo"<script>alert('Todos los campos no están rellenos');document.location.href='Vue/inscription.php'</script>";
        
          }
}
}
?>