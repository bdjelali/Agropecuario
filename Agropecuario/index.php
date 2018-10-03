
<?php 
    session_start();
    require("Modele/connexion.php");
    require("Vue/commun.php");
    
    if(isset($_GET['cible']) && $_GET['cible']=='verifinscription')
    {
        
        include("Controleur/inscription.php");
    }

    if(!isset($_SESSION["userID"])){ // L'utilisateur n'est pas connecté
        
        include("Controleur/connexion.php"); // On utilise un controleur secondaire pour éviter d'avoir un fichier index.php trop gros
    
    } else { // L'utilisateur est connecté
        
        if(isset($_GET['cible'])) { // on regarde la page où il veut aller
            if($GET['cible']=='conditions'){
                include('Vue/conditions.php');
            }
            if($_GET['cible'] == 'accueil'){
                include ('Vue/accueil.php');
            } else if ($_GET['cible'] == "verifinscription"){
                include("Controleur/inscription.php");
                include("Modele/inscription.php");
                $reponse = insertutilisateur($bdd, $pseudo, $nom, $prénom, $mail, $mdp, $address, $city, $zip, $country, $phone);
            } else if ($_GET['cible'] == "contact"){
                echo "<script>document.location.href='http://localhost:8888/MySmartHouse%20-%20MVC/Vue/contact.php'</script>";
            } else if ($_GET['cible'] == "FAQ"){
                echo "<script>document.location.href='http://localhost:8888/MySmartHouse%20-%20MVC/Vue/FAQ.php'</script>";
             } else if ($_GET['cible'] == "quisommesnous"){
                echo "<script>document.location.href='http://localhost:8888/MySmartHouse%20-%20MVC/Vue/qui_sommes_nous.php'</script>";
            } else if ($_GET['cible'] == "verifedition"){
                include ("Controleur/editer_profil.php");
                include ("Vue/editer_profil.php");
             } else if ($_GET['cible'] == "ajoutercapteur"){
                   include("Controleur/ajoutercapteur.php");
                   include("Vue/ajoutercapteur.php");
                
            } else if ($_GET['cible'] == "changervaleur"){
                   include("Controleur/changervaleur.php");
                   include("Vue/changervaleur.php");

                
            } else if ($_GET['cible'] == "ajouterlogement"){
                   include("Controleur/ajouterlogement.php");
                   include("Vue/ajouterlogement.php");
                
            } else if ($_GET['cible'] == "ajouterpiece"){
                   include("Controleur/ajouterpiece.php");
                   include("Vue/ajouterpiece.php");
                
            } else if ($_GET['cible'] == "affichercapteur"){
                   //include("Controleur/affichercapteur.php");
                   include("Vue/affichercapteur.php");
                
           } else if ($_GET['cible'] == "deconnexion"){
                // Détruit toutes les variables de session
                $_SESSION = array();
                
                session_destroy();
                include("Vue/non_connecte.php");
            }
        } else { // affichage par défaut

                include("Vue/accueil.php");
        }
    }
?>