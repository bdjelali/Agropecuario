<?php

// Génère le code HTML du formulaire de connexion
function connexion(){

    ob_start();
    ?>  

        <h1 style="text-align:center">PAGE DE CONNEXION</h1><br><br>
        <div class="connexion">
        <fieldset>
            <legend><B>Connexion</B></legend> <br>
            <form method="POST" action="index.php?cible=verif">
        
                <p>
                    <label for="email">Adresse mail ou pseudo :
                    </label><br>
                    <input type="text" name="mail" placeholder="Mail " />
                
                
                <br>
                    <label for="password">Mot de passe :
                    </label><br>
                    <input type="password" name="mdp" placeholder="Mot de passe " />
                
                
                <p>
                    <input type="submit" value="Se connecter"/>
                </p>
                
                <p>
                    <a href="http://localhost:8888/Agropecuario/Vue/inscription.php">Première connexion ?</a>
                </p>
                  
                </form>
                <?php
                    if(isset($erreur)) {
                    echo '<font color="red">'.$erreur."</font>";
                    }
                ?>
                
            </fieldset>
            </div>
    <?php
    $formulaire = ob_get_clean();
    return $formulaire;
}

function affichagecapteur($capteurs)
{
	ob_start();?>

<h1 style="text-align:center">GEREZ VOS LOGEMENTS</h1><br><br>
  <p style="margin-left:20%"><a href="http://localhost:8888/Agropecuario/index.php?cible=ajoutercapteur"><img src="http://localhost:8888/Agropecuario/img/ajoutercapteur.png"> </a> &nbsp;
        <a href="http://localhost:8888/Agropecuario/index.php?cible=ajouterpiece"> <img src="http://localhost:8888/Agropecuario/img/ajouterpiece.png"></a> &nbsp;
        <a href="http://localhost:8888/Agropecuario/index.php?cible=ajouterlogement"> <img src="http://localhost:8888/Agropecuario/img/ajouterlogement.png"></a> &nbsp;</p>
<br> <br>
<p style="text-align:center">(Cliquez sur votre logement pour changer les données du capteur associé)</p><br>
	<table style="margin-left:25%">
		<tr>
			<th>Logement</th>
			<th>Pièce</th>
			<th>Type Capteur</th>
			<th>Valeur</th>   
		</tr>
		<?php
           foreach ($capteurs as $key => $value){?>
				 <tr>
				 <td> <a href="http://localhost:8888/Agropecuario/index.php?cible=changervaleur&id=<?=$value[0]?>"><?=$value[3]?></a></td>
				 <td> <?=$value[4]?></td>
				 <td> <?=$value[1]?></td>
				 <td> <?php
				 switch($value[1])
				{
				 case 'Lumière':
				  if ($value[2]==1)
					  echo "ON";
				  else
					  echo "OFF";
				  break;

				 case 'Température':
					echo $value[2];
					echo " °C";
				  break;

				 case 'Humidité':
					echo $value[2];
					echo " %";
				  break;

				 default :
					echo "vide";
				  break;
				}

				 ?></td>
				 </tr>
        
			 <?php 
			 }
		?>
        
	</table>
	<?php
    $affiche = ob_get_clean();
    return $affiche;
}

//Génère le code HTML de l'inscription
function forminscription(){
    ob_start();
    ?>
        <div class="bienvenue">
               
            <h1 style="text-align:center">PAGE D'INSCRIPTION</h1>
        </div>
         <br/>
             <fieldset>
                    <form method="POST" action="http://localhost:8888/Agropecuario/index.php?cible=verifinscription">
                <table>        
                <tr>
                    <td align="left">
                     <label for="pseudo">Pseudo* :</label>
                    </td>
                    <td>
                     <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                    </td>
                </tr>
                    
                
                <tr>
                  <td align="left">
                     <label for="birth">Date de naissance :</label>
                  </td>
                  <td>
                     <input type="date" placeholder="Votre date de naissance" id="birth" name="birth" value="<?php if(isset($birth)) { echo $birth; } ?>" />
                  </td>
                </tr>
                       
                
                <tr>
                  <td align="left">
                     <label for="surname">Prénom* :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre prénom" id="prénom" name="prénom" value="<?php if(isset($prénom)) { echo $prénom; } ?>" />
                  </td>
                </tr>
                   
                <tr>
                  <td align="left">
                     <label for="name">Nom* :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre nom" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" />
                  </td>
                </tr>
            
                
                <tr>
                  <td align="left">
                     <label for="address">Adresse* :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre adresse" id="adresse" name="adresse" value="<?php if(isset($address)) { echo $address; } ?>" />
                  </td>
                </tr>
                 
                <tr>
                  <td align="left">
                     <label for="city">Ville* :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre ville" id="ville" name="ville" value="<?php if(isset($city)) { echo $city; } ?>" />
                  </td>
                </tr>
                        
                
                <tr>
                  <td align="left">
                     <label for="zip">Code postal* :</label>
                  </td>
                  <td>
                     <input type="tel" placeholder="Votre code postal" id="code_postal" name="code_postal" value="<?php if(isset($zip)) { echo $zip; } ?>" />
                  </td>
                </tr>
              
                <tr>
                  <td align="left">
                     <label for="country">Pays* :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre pays" id="pays" name="pays" value="<?php if(isset($country)) { echo $country; } ?>" />
                  </td>
                </tr>
                
                <tr>
                  <td align="left">
                     <label for="phone">Téléphone* :</label>
                  </td>
                  <td>
                     <input type="tel" placeholder="Votre n° de téléphone" id="numero_tel" name="numero_tel" value="<?php if(isset($phone)) { echo $phone; } ?>" />
                  </td>
                </tr>
              
               <tr>
                  <td align="leftt">
                     <label for="mail">Mail* :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                  </td>
               </tr>
              
               <tr>
                  <td align="left">
                     <label for="mail2">Confirmation du mail* :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                  </td>
               </tr>
              
               <tr>
                  <td align="left">
                     <label for="mdp">Mot de passe* :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                  </td>
               </tr>
              
               <tr>
                  <td align="left">
                     <label for="mdp2">Confirmation du mot de passe* :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
                  </td>
               </tr>
                </table> 
                        <br>
                    <p align="center">
                        <input type="checkbox" name="cgu"/>  J'ai lu et j'accepte les <a href="http://localhost:8888/Agropecuario/Vue/conditions.php">conditions générales d'utilisation</a>
                        </p>    
                           
                        
                  <p style="text-align:center">
                      <br>
                       <a href="http://localhost:8888/Agropecuario/index.php">
                   <input type="button" value="Retour">
                     <input type="submit" name="forminscription" value="Je m'inscris"/>
                    </a>
                      </p>
                        
                <p style="text-align:left"><i>
                        *Champs obligatoires</i></p>
                    
            </form>
           </fieldset>

    <?php
    $forminscription = ob_get_clean();
    return $forminscription;
}


// Génère le code HTML de l'entête
function entete(){
    ob_start();
    ?>

        <div class="topnav">
            <p><img src= "http://localhost:8888/Agropecuario/img/logo.png" class="logoentreprise" alt="Logo entreprise"/></p>
            <a href="http://localhost:8888/Agropecuario/index.php?cible=accueil">Accueil</a>
            <a href="http://localhost:8888/Agropecuario/Vue/qui_sommes_nous.php">Qui sommes-nous ?</a>
            <a href="http://localhost:8888/Agropecuario/Vue/contact.php">Contact</a>
            <a href="http://localhost:8888/Agropecuario/Vue/FAQ.php">FAQ</a>
            <?php
            if (isset ($_SESSION["userID"]))
            {
                echo '<a href="index.php?cible=verifedition">Editer son profil</a>';
                echo '<a href="index.php?cible=deconnexion">Déconnexion</a>';
            }
            ?>
        </div>
    <?php
    $entete = ob_get_clean();
    return $entete;
}


// Génère le code HTML du pied de page
// même code pour toutes les pages
function pied(){
    ob_start();
    ?>  

<p style="color:black">Agropecuario - <a href="http://localhost:8888/Agropecuario/Vue/conditions.php" style="color:black"><I>Conditions d'utilisation</I></a></p>
        

    <?php
    $pied = ob_get_clean();
    return $pied;
}

function quisommesnous(){
    ob_start();
    ?>
            <h1 style="text-align: center">PRESENTATION DE L'ENTREPRISE</h1> <br>

            
            <h2 style="color: #2874A6"><img src="http://localhost:8888/Agropecuario/img/historique.jpg" class="historique" alt="Livre" align="top" height="40" width="40"/><I>Historique</I></h2> 
            
            <p style="font-size: 17">Agropecuario est une entreprise grandissante qui a été créée en 2017. Issue d'une équipe d'étudiants pluriculturels de l'ISEP, elle a su trouvé au travers de son premier client DOMISEP un défit à la hauteur des attentes de l'equipe qui en est à la tête.
            </p> 
            <br> 

            <h2 style="color:#2874A6"><img src="http://localhost:8888/Agropecuario/img/Objectif.jpg" class="objectif" alt="objectif" align="top" height="40" width="40"/><I>Objectif</I></h2>
            
            <p style="font-size: 17">Fermez les yeux, et imaginez un monde où votre maison répond à vos besoins. Luminosité, température, humidité, sécurité... Tout est sous votre contrôle et ce en un seul un clic ! Agropecuario est un outil qui vous permettra d’être connecté à votre domicile depuis n’importe où et à n’importe quel moment. Grâce à notre base de données et à notre plateforme Web Agropecuario.fr, le client pourra avoir accès au contrôle de sa maison à distance.
            </p>
            <br> 

            <h2 style="color:#2874A6"><img src="http://localhost:8888/Agropecuario/img/equipe.jpg" class="equipe" alt="bonhomme" align="top" height="40" width="40"/>  <I>Derrière Agropecuario ?</I></h2>
            
           <br>
        
            <?php
            $quisommesnous = ob_get_clean();
            return $quisommesnous;
    
}

function contact(){
    ob_start();
    ?>
            <div class="contacteznous">
        
            <h1 style="text-align:center">CONTACTEZ-NOUS</h1><br><br>
            </div>

                <fieldset>
                    <br>
                <div class="logocontact">
                <p><a href="mailto:Agropecuario.contact@gmail.com" class="logoemail" target="_blank"><img src="http://localhost:8888/Agropecuario/img/email.jpg" alt="Email"><p>Envoyez un mail</p></a>
                <p>
                </div>   
                <div class="logocontact">
                <p><img src="http://localhost:8888/Agropecuario/img/telephone.jpg" class="logotelephone" alt="telephone"/></p>
                <p><I><B>+33 1 23 45 67 89</B></I></p>
                </div>
                <div class="logocontact">
                <p><a href="https://www.facebook.com/My-Smart-House-1021275438007096/?fref=ts" class="logofacebook" target="_blank"><img src="http://localhost:8888/Agropecuario/img/facebook.png" alt="Facebook" ><p>
                <p>Likez notre page</p></a>
               </div>
               </fieldset>
               <br>
               <br>
               <br>
               <h1 style="text-align:center;">TROUVEZ-NOUS FACILEMENT</h1><br>
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d656.6883495279876!2d2.280302766448461!3d48.82476644102272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe0d3eb2ad501cb27!2sISEP!5e0!3m2!1sfr!2sfr!4v1494930808024" width="900" height="600" frameborder="1"></iframe>
            <br><br><br>
            <?php
            $contact = ob_get_clean();
            return $contact;
    
}

function FAQ(){
    ob_start();
    ?>
           <div class="foireauxquestions">
    
            <h1 style="text-align:center">FAQ</h1><br><br>
        </div>
            
        <fieldset>
            <legend><B>Foire aux questions</B></legend>

       <dl>
            <dt><B>Question 1 : Comment modifier l'identifiant et le mot de passe de mon compte ?</B></dt>
           <dd><I>Une fois connecté, il vous suffit de vous rendre dans l'espace "éditer profil". </I> </dd>
            <dt><B>Question 2 : Comment installer mes capteurs?</B></dt>
           <dd><I>Une fois connecté, il vous suffit de vous rendre sur votre profil et de cliquer sur la section "ajouter capteur".</I></dd>
            <dt><B>Question 3 : Comment trouver les numéros de série de mes capteurs?</B></dt>
           <dd><I>Ils se trouvent sur l'emballage ou bien directement sur l'étiquette situé au dos des capteurs.</I></dd>
           <dt><B>Question 4 : Combien de temps les modifications prennent-elles à être éxécutées ?</B></dt>
           <dd><I>L'apport de modification s'effectue quasi-instantanément, il faut néanmoins prendre en compte le temps d'activation de certains actionneurs.</I></dd>
        </dl>


        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <script type="text/javascript">

        $(document).ready(function() {

            $("dd").hide();
            $("dt").css("cursor", "pointer");
            $("dt").click(function() {
        
            if($(this).next().is(":visible") == false) {
                $("dd").slideUp();
                $(this).next().slideDown();
            }
            });
        });

    </script>
        </fieldset>
            <?php
            $FAQ = ob_get_clean();
            return $FAQ;
    
}

function conditions() {
    ob_start();
    ?> 

<div><h1 align="center">MENTIONS LEGALES</h1><br>

<p>Merci de lire avec attention les différentes modalités d’utilisation du présent site avant d’y parcourir ses pages. En vous connectant sur ce site, vous acceptez sans réserves les présentes modalités. Aussi, conformément à l’article n°6 de la Loi n°2004-575 du 21 Juin 2004 pour la confiance dans l’économie numérique, les responsables du présent site internet www.homeg4.com sont :
Editeur du Site :</p>

<p>Agropecuario Numéro de SIRET : 12345678901234 Responsable editorial : Agropecuario 10 rue des Vanves <br>Téléphone :01 49 54 52 00 - Fax : 01 49 54 02 01 Email : Agropecuario.contact@gmail.com Site Web : www.Agropecuario.com 
Hébergement :</p>


<p>Agropecuario Adresse : 10 rue Vanves 92130 Issy-les-Moulineaux Site Web : www.Agropecuario.com 
Conditions d’utilisation :</p>

<p>Ce site est proposé en différents langages web (HTML, HTML5, Javascript, CSS, etc…) pour un meilleur confort d'utilisation et un graphisme plus agréable, nous vous recommandons de recourir à des navigateurs modernes comme Internet explorer, Safari, Firefox, Google Chrome, etc… Les mentions légales ont été générées sur le site Générateur de mentions légales, offert par Welye. Agropecuario met en œuvre tous les moyens dont elle dispose, pour assurer une information fiable et une mise à jour fiable de ses sites internet. Toutefois, des erreurs ou omissions peuvent survenir. L'internaute devra donc s'assurer de l'exactitude des informations auprès de , et signaler toutes modifications du site qu'il jugerait utile. n'est en aucun cas responsable de l'utilisation faite de ces informations, et de tout préjudice direct ou indirect pouvant en découler. Cookies : Le site www.Agropecuario.com peut-être amené à vous demander l’acceptation des cookies pour des besoins de statistiques et d'affichage. Un cookies est une information déposée sur votre disque dur par le serveur du site que vous visitez. Il contient plusieurs données qui sont stockées sur votre ordinateur dans un simple fichier texte auquel un serveur accède pour lire et enregistrer des informations . Certaines parties de ce site ne peuvent être fonctionnelles sans l’acceptation de cookies. Liens hypertextes : Les sites internet de peuvent offrir des liens vers d’autres sites internet ou d’autres ressources disponibles sur Internet. Agropecuario ne dispose d'aucun moyen pour contrôler les sites en connexion avec ses sites internet. ne répond pas de la disponibilité de tels sites et sources externes, ni ne la garantit. Elle ne peut être tenue pour responsable de tout dommage, de quelque nature que ce soit, résultant du contenu de ces sites ou sources externes, et notamment des informations, produits ou services qu’ils proposent, ou de tout usage qui peut être fait de ces éléments. Les risques liés à cette utilisation incombent pleinement à l'internaute, qui doit se conformer à leurs conditions d'utilisation. Les utilisateurs, les abonnés et les visiteurs des sites internet de ne peuvent mettre en place un hyperlien en direction de ce site sans l'autorisation expresse et préalable de Agropecuario. Dans l'hypothèse où un utilisateur ou visiteur souhaiterait mettre en place un hyperlien en direction d’un des sites internet de Agropecuario, il lui appartiendra d'adresser un email accessible sur le site afin de formuler sa demande de mise en place d'un hyperlien. Agropecuario se réserve le droit d’accepter ou de refuser un hyperlien sans avoir à en justifier sa décision. 
Services fournis :</p>

<p>L'ensemble des activités de la société ainsi que ses informations sont présentés sur notre site www.Agropecuario.com.</p>

<p>Agropecuario s’efforce de fournir sur le site www.Agropecuario.com des informations aussi précises que possible. les renseignements figurant sur le site www.Agropecuario.com ne sont pas exhaustifs et les photos non contractuelles. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne. Par ailleurs, tous les informations indiquées sur le site www.Agropecuario.com sont données à titre indicatif, et sont susceptibles de changer ou d’évoluer sans préavis.</p>


<p>Limitation contractuelles sur les données :</p>

<p>Les informations contenues sur ce site sont aussi précises que possible et le site remis à jour à différentes périodes de l’année, mais peut toutefois contenir des inexactitudes ou des omissions. Si vous constatez une lacune, erreur ou ce qui parait être un dysfonctionnement, merci de bien vouloir le signaler par email, à l’adresse contact@homega.com, en décrivant le problème de la manière la plus précise possible (page posant problème, type d’ordinateur et de navigateur utilisé, …). Tout contenu téléchargé se fait aux risques et périls de l'utilisateur et sous sa seule responsabilité. En conséquence, ne saurait être tenu responsable d'un quelconque dommage subi par l'ordinateur de l'utilisateur ou d'une quelconque perte de données consécutives au téléchargement. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour Les liens hypertextes mis en place dans le cadre du présent site internet en direction d'autres ressources présentes sur le réseau Internet ne sauraient engager la responsabilité de Agropecuario. 
Propriété intellectuelle :</p>

<p>Tout le contenu du présent sur le site www.Agropecuario.com, incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive de la société à l'exception des marques, logos ou contenus appartenant à d'autres sociétés partenaires ou auteurs. Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l'accord exprès par écrit de Agropecuario. Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la propriété intellectuelle. Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. En outre, les propriétaires des Contenus copiés pourraient intenter une action en justice à votre encontre. 
Déclaration à la CNIL :</p>

<p>Conformément à la loi 78-17 du 6 janvier 1978 (modifiée par la loi 2004-801 du 6 août 2004 relative à la protection des personnes physiques à l'égard des traitements de données à caractère personnel) relative à l'informatique, aux fichiers et aux libertés, ce site a fait l'objet d'une déclaration 0000000000 auprès de la Commission nationale de l'informatique et des libertés (www.cnil.fr). 
Litiges :</p>

<p>Les présentes conditions du site www.homeg4.com sont régies par les lois françaises et toute contestation ou litiges qui pourraient naître de l'interprétation ou de l'exécution de celles-ci seront de la compétence exclusive des tribunaux dont dépend le siège social de la société. La langue de référence, pour le règlement de contentieux éventuels, est le français. </p></div>
    



<?php
            $contact = ob_get_clean();
            return $contact;
}


function editer_profil($user){
    ob_start();
    ?>
    
        <h1 style="text-align: center">EDITER SON PROFIL</h1> <br> <br>
            <fieldset>
            <form method="POST" action="http://localhost:8888/Agropecuario/index.php?cible=verifedition" enctype="multipart/form-data">  
             
            <table>
            <br>
            <tr>
               <td align="left">
               <label>Nouveau pseudo :</label>
               </td>
               <td>
               <input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>" />
               </td>
            </tr>

            <tr>
               <td align="left">
               <label>Nouveau mail :</label>
               </td>
               <td>
               <input type="text" name="newmail" placeholder="Mail" value ="<?php echo $user['mail']; ?>" />
               </td>

            <tr>
               <td align="left">
               <label>Nouveau mot de passe :</label>
               </td>
               <td>
               <input type="password" name="newmdp1" placeholder="Mot de passe">
               </td>
            </tr>

            <tr>
               <td align="left">
               <label>Confirmation - nouveau mot de passe :</label>
               </td>

               <td>
               <input type="password" name="newmdp2" placeholder="Confirmation du mot de passe" />
               </td>
            </tr>

               </table>
               <br>
               <p style="text-align: center">
                <input type="submit" value="Mettre à jour mon profil !"> 
               </p>
            </form>
            <?php if(isset($msg)) { echo $msg; } ?>
                <form>
                    <p style="text-align:center">
                    <a href="http://localhost:8888/Agropecuario/index.php?">
                   <input type="button" value="Retour">
                    </a>
                    </p>    
                </form>
            </fieldset>
   
    <?php
    $editer_profil = ob_get_clean();
    return $editer_profil;
}

function valeurcapteur($capteur)
{
	
	ob_start();
	?>
        <h1 style="text-align:center" >MODIFIER LA VALEUR D'UN CAPTEUR</h1>
         <br /><br />               
		 <fieldset>
         <form method="POST" action="http://localhost:8888/Agropecuario/index.php?cible=changervaleur">
			<table>
               <tr>
                  <td align="right">Nom du logement :</td>
                  <td align="left"><?=$capteur[0]["nomlogement"]?></td>
                </tr>

				<tr>
                  <td align="right">Nom de la pièce :</td>
                  <td align="left"><?=$capteur[0]["nompiece"]?></td>
                </tr>

                <tr>
                  <td align="right">Type de capteur :</td>
				  <td align="left"><?=$capteur[0]["typecapteur"]?></td>
                </tr>
            

                <tr> 
                  <td align="right">Valeur du capteur :
                  <td align="left">
                     <input type="text" placeholder="values" id="valeur" name="valeur" value="<?=$capteur[0]["valeur"]?>">
                  </td>
                </tr>
                  </table>
                
                  <p align="center">
                     <br />
                      <a href="http://localhost:8888/Agropecuario/index.php?">
                        <input type="button" value="Retour" /></a>
                        <input type="submit" name="formvaleur" value="Valider" />
             </p>
             <p align="center">Pour les lumières : 0=OFF 1=ON</p>
				<input type="hidden" value="<?=$capteur[0]["id"]?>" name="id" id="id"/>
            </form>
            </fieldset>
 	<?php
    $affiche = ob_get_clean();
    return $affiche;
}

function ajoutercapteur($pieces){
    ob_start();
    if (count($pieces)>0) {
    ?>
            <h1 style="text-align:center">AJOUTER DES CAPTEURS</h1>
         <br /><br />
         <div class="capteur">
		 <fieldset>
         <form method="POST" action="http://localhost:8888/Agropecuario/index.php?cible=ajoutercapteur">
                <table>
               <tr>
                  <td align="right">
                     <label for="n_piece">Nom de la pièce :</label>
                  </td>
                  <td>
                     <SELECT name="piece" size="1">
                        <?php
                        foreach ($pieces as $key => $value){
                            ?><OPTION value='<?=$value[0]?>'>Logement : <?=$value[1]?> => Piece : <?=$value[2]?> </OPTION><?php
                        }
                        ?>
                      </SELECT>
                   </td>
                </tr>

                <tr>
                  <td align="right">
                     <label for="type">Type de capteur :</label>
                  </td>
				  <td>
				  <SELECT name="type" size="1">
					<option selected>Lumière</option>
					<option>Température</option>
					<option>Humidité</option>
				  </SELECT>
                  </td>
                </tr>

                <tr> 
                  <td align="right">
					<label for="n_piece">Numéro de série :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="N° de série" id="nserie" name="nserie" >
                  </td>
                </tr>
             </table>
                 
                 
                
                       <p style="text-align:center">
                    <a href="http://localhost:8888/Agropecuario/index.php?">
                   <input type="button" value="Retour"></a>
                    <input type="submit" name="formcapteur" value="Valider" />    
                    </p> 
            </form>
            </fieldset>
             </div>
   
    <?php
    }
    else
        echo"<script>alert('Il faut créer des pièces avant de leur affecter des capteurs !');document.location.href='index.php?cible=ajouterpiece'</script>";
        
    $ajoutercapteur = ob_get_clean();
    return $ajoutercapteur;
}

function ajouterlogement(){
    ob_start();
    ?>
    <h1 style="text-align: center">EDITION DU LOGEMENT</h1>

         <br /><br />
         <form method="POST" action="http://localhost:8888/Agropecuario/index.php?cible=ajouterlogement">
             <div class="logement">
             <fieldset>
             <br>
                <table>
               <tr>
                  <td align="left">
                     <label for="nom">Nom du logement :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Nom du logement" id="nom" name="nom" value="" />
                  </td>
                </tr>

                <tr>
                  <td align="left">
                     <label for="superficie">Superficie :</label>
                  </td>
                  <td>
                     <input type="phone" placeholder="Superficie en m2" id="superficie" name="superficie" value="" />
                  </td>
                </tr>

                <tr>
                  <td align="left">
                     <label for="n_piece">Nombre de pièces :</label>
                  </td>
                  <td>
                     <input type="phone" placeholder="Nombre de pièces" id="n_piece" name="n_piece" value="" />
                  </td>
                </tr>

                <tr>
                  <td></td>
                  </table>
                  <br>
                  <p style="text-align:center">
                    <a href="http://localhost:8888/Agropecuario/index.php?">
                   <input type="button" value="Retour">
                    </a>
                        <input type="submit" name="formlogement" value="Valider" >
                  <p>
            </fieldset>
                 </div>

         </form>

    <?php
    $ajouterlogement = ob_get_clean();
    return $ajouterlogement;
}

function ajouterpiece($Logements){
    ob_start();
    if (count($Logements)>0) {
    ?>
        <h1 style="text-align: center">EDITION DE LA PIECE</h1>
        
         <br /><br />
         <form method="POST" action="http://localhost:8888/Agropecuario/index.php?cible=ajouterpiece">
             <div class="piece">
             <fieldset>
                <table>
                    
                <tr>
                  <td align="right">
                     <label for="n_logement">Nom du logement :</label>
                  </td>
                  <td>
                      <SELECT name="logement" size="1">
                        <?php
                        foreach ($Logements as $key => $value){
                            ?><OPTION value='<?=$value[0]?>'><?=$value[1]?></OPTION><?php
                        }
                        ?>
                      </SELECT>
                  </td>
                </tr>
    
               <tr>
                  <td align="right">
                     <label for="n_piece">Nom de la pièce :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Nom de la pièce" id="nom" name="nom" value="" />
                  </td>
                </tr>

                <tr>
                  <td align="right">
                     <label for="superficie">Superficie :</label>
                  </td>
                  <td>
                     <input type="phone" placeholder="Superficie en m2" id="superficie" name="superficie" value="" />
                  </td>
                </tr>
                <tr>
                 </table>
                       <p style="text-align:center">
                    <a href="http://localhost:8888/Agropecuario/index.php?">
                   <input type="button" value="Retour">
                    </a>
                        <input type="submit" name="formpiece" value="Valider" />
                 </p>
            </fieldset>
                 </div>

         </form>



    <?php
    }
    else
        echo"<script>alert('Il faut créer des logements avant de leur affecter des pièces !!!');document.location.href='index.php?cible=ajouterlogement'</script>";
        
    $ajouterpiece = ob_get_clean();
    return $ajouterpiece;
}


?>