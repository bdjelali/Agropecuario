<?php

// Génère le code HTML du formulaire de connexion
function connexion(){

    ob_start();
    ?>  

        <h1 style="text-align:center">PAGINA DE CONNEXION</h1><br><br>
        <div class="connexion">
        <fieldset>
            <legend><B>Connexion</B></legend> <br>
            <form method="POST" action="index.php?cible=verif">
        
                <p>
                    <label for="email">Correo electronico o pseudo :
                    </label><br>
                    <input type="text" name="mail" placeholder="Mail " />
                
                
                <br>
                    <label for="password">Contrasena :
                    </label><br>
                    <input type="password" name="mdp" placeholder="Mot de passe " />
                
                
                <p>
                    <input type="submit" value="Se connecter"/>
                </p>
                
                <p>
                    <a href="http://localhost:8888/Agropecuario/Vue/inscription.php">Primera connexion ?</a>
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


<h1 style="text-align:center">Administra tus campos </h1><br><br>
  <p style="margin-left:20%"><a href="http://localhost:8888/Agropecuario/index.php?cible=ajoutercapteur"><img src="http://localhost:8888/Agropecuario/img/sensor.png"> </a> &nbsp;
        <a href="http://localhost:8888/Agropecuario/index.php?cible=ajouterpiece"> <img src="http://localhost:8888/Agropecuario/img/parte.png"></a> &nbsp;
        <a href="http://localhost:8888/Agropecuario/index.php?cible=ajouterlogement"> <img src="http://localhost:8888/Agropecuario/img/campo.png"></a> &nbsp;</p>

<br> <br>
<p style="text-align:center">(Haga clic en sus campos para cambiar los datos del sensor asociado)</p><br>
	<table style="margin-left:25%">
		<tr>
			<th>Campo</th>
			<th>Sensor</th>
			<th>Tipo de sensor</th>
			<th>Valor</th>   
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
               
            <h1 style="text-align:center">PAGINA DE REGISTRO</h1>
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
                     <input type="text" placeholder="Tu pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                    </td>
                </tr>
                    
                
                <tr>
                  <td align="left">
                     <label for="birth">Fecha de nacimiento :</label>
                  </td>
                  <td>
                     <input type="date" placeholder="Nacimiento" id="birth" name="birth" value="<?php if(isset($birth)) { echo $birth; } ?>" />
                  </td>
                </tr>
                       
                
                <tr>
                  <td align="left">
                     <label for="surname">Nombre* :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Nombre" id="prénom" name="prénom" value="<?php if(isset($prénom)) { echo $prénom; } ?>" />
                  </td>
                </tr>
                   
                <tr>
                  <td align="left">
                     <label for="name">Apellido* :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Apellido" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" />
                  </td>
                </tr>
            
                
                <tr>
                  <td align="left">
                     <label for="address">Direccion* :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Direccion" id="adresse" name="adresse" value="<?php if(isset($address)) { echo $address; } ?>" />
                  </td>
                </tr>
                 
                <tr>
                  <td align="left">
                     <label for="city">Ciudad* :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Ciudad" id="ville" name="ville" value="<?php if(isset($city)) { echo $city; } ?>" />
                  </td>
                </tr>
                        
                
                <tr>
                  <td align="left">
                     <label for="zip">Numero de barrio* :</label>
                  </td>
                  <td>
                     <input type="tel" placeholder="Codigo postal" id="code_postal" name="code_postal" value="<?php if(isset($zip)) { echo $zip; } ?>" />
                  </td>
                </tr>
              
                <tr>
                  <td align="left">
                     <label for="country">Pais* :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Pais" id="pays" name="pays" value="<?php if(isset($country)) { echo $country; } ?>" />
                  </td>
                </tr>
                
                <tr>
                  <td align="left">
                     <label for="phone">Telefono* :</label>
                  </td>
                  <td>
                     <input type="tel" placeholder="Telefono" id="numero_tel" name="numero_tel" value="<?php if(isset($phone)) { echo $phone; } ?>" />
                  </td>
                </tr>
              
               <tr>
                  <td align="leftt">
                     <label for="mail">Correo electronico* :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Correo" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                  </td>
               </tr>
              
               <tr>
                  <td align="left">
                     <label for="mail2">Confirmacion de correo electronico* :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Confirmar el correo" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                  </td>
               </tr>
              
               <tr>
                  <td align="left">
                     <label for="mdp">Contrasena* :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Contraseña" id="mdp" name="mdp" />
                  </td>
               </tr>
              
               <tr>
                  <td align="left">
                     <label for="mdp2">Confirmacion del contrasena* :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Confirmar la contraseña" id="mdp2" name="mdp2" />
                  </td>
               </tr>
                </table> 
                        <br>
                    <p align="center">
                        <input type="checkbox" name="cgu"/>  He leído y acepto <a href="http://localhost:8888/Agropecuario/Vue/conditions.php">los condiciones generales de uso</a>
                        </p>    
                           
                        
                  <p style="text-align:center">
                      <br>
                       <a href="http://localhost:8888/Agropecuario/index.php">
                   <input type="button" value="Retour">
                     <input type="submit" name="forminscription" value="Me inscribo"/>
                    </a>
                      </p>
                        
                <p style="text-align:left"><i>
                        *Campos obligatorios</i></p>
                    
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
            <p><img src= "http://localhost:8888/Agropecuario/img/logoa.png" class="logoentreprise" alt="Logo entreprise"/></p>
            <a href="http://localhost:8888/Agropecuario/index.php?cible=accueil">Inicio</a>
            <a href="http://localhost:8888/Agropecuario/Vue/qui_sommes_nous.php">Quienes somos ?</a>
            <a href="http://localhost:8888/Agropecuario/Vue/contact.php">Contact</a>
            <a href="http://localhost:8888/Agropecuario/Vue/FAQ.php">Preguntas</a>
            <?php
            if (isset ($_SESSION["userID"]))
            {
                echo '<a href="index.php?cible=verifedition">Editar su perfil</a>';
                echo '<a href="index.php?cible=deconnexion">Deconnexion</a>';
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

<p style="color:black">Agropecuario - <a href="http://localhost:8888/Agropecuario/Vue/conditions.php" style="color:black"><I>condiciones generales de uso</I></a></p>
        

    <?php
    $pied = ob_get_clean();
    return $pied;
}

function quisommesnous(){
    ob_start();
    ?>
            <h1 style="text-align: center">PRESENTACION DE LA EMPRESA</h1> <br>

            
            <h2 style="color: #2874A6"><img src="http://localhost:8888/Agropecuario/img/historique.jpg" class="historique" alt="Livre" align="top" height="40" width="40"/><I>Historia</I></h2> 
            
            <p style="font-size: 17">Agropecuario es une empresa Creciendo, que se creó en 2018. Desde un equipo de estudiantes multiculturales del Universidad de Belgrano.
            </p> 
            <br> 

            <h2 style="color:#2874A6"><img src="http://localhost:8888/Agropecuario/img/Objectif.jpg" class="objectif" alt="objectif" align="top" height="40" width="40"/><I>Objectivos</I></h2>
            
            <p style="font-size: 17">Su objetivo es ayudar al agricultor y automatizar los puntos repetitivos, mientras se monitorea la calidad del suelo para las plantas que produce. Estábamos planeando comenzar en Argentina, siendo un país bien orientado hacia la agricultura.
            </p>
            <br> 

            <h2 style="color:#2874A6"><img src="http://localhost:8888/Agropecuario/img/equipe.jpg" class="equipe" alt="bonhomme" align="top" height="40" width="40"/>  <I>Equipo</I></h2>
            
           <br>
        
            <?php
            $quisommesnous = ob_get_clean();
            return $quisommesnous;
    
}

function contact(){
    ob_start();
    ?>
            <div class="contacteznous">
        
            <h1 style="text-align:center">CONTACTENOS</h1><br><br>
            </div>

                <fieldset>
                    <br>
                <div class="logocontact">
                <p><a href="mailto:Agropecuario.contact@gmail.com" class="logoemail" target="_blank"><img src="http://localhost:8888/Agropecuario/img/email.jpg" alt="Email"><p>Enviar un mail</p></a>
                <p>
                </div>   
                <div class="logocontact">
                <p><img src="http://localhost:8888/Agropecuario/img/telephone.jpg" class="logotelephone" alt="telephone"/></p>
                <p><I><B>+33 1 23 45 67 89</B></I></p>
                </div>
                <div class="logocontact">
                <p><a href="https://www.facebook.com/My-Smart-House-1021275438007096/?fref=ts" class="logofacebook" target="_blank"><img src="http://localhost:8888/Agropecuario/img/facebook.png" alt="Facebook" ><p>
                <p>Like nuestra pagina</p></a>
               </div>
               </fieldset>
               <br>
               <br>
               <br>
               <h1 style="text-align:center;">Donde estamos</h1><br>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9572.270443609903!2d-58.438576904989866!3d-34.56787053104029!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5c8936d7be3%3A0x864ef69ee3e2d3f!2sUniversit%C3%A9+de+Belgrano!5e0!3m2!1sfr!2sar!4v1542213505956" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>            <br><br><br>
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
            <legend><B>Preguntas</B></legend>

       <dl>
            <dt><B>Pregunta 1 : Cómo cambiar el nombre de usuario y la contraseña de mi cuenta ?</B></dt>
           <dd><I>Una vez conectado, simplemente vaya al área "editar perfil". </I> </dd>
            <dt><B>Pregunta 2 : ¿Cómo instalar mis sensores?</B></dt>
           <dd><I>Una vez que haya iniciado sesión, simplemente vaya a su perfil y haga clic en la sección "agregar sensor".</I></dd>
            <dt><B>Pregunta 3 : ¿Cómo encontrar los números de serie de mis sensores?</B></dt>
           <dd><I>Están en el empaque o directamente en la etiqueta en la parte posterior de los sensores.</I></dd>
           <dt><B>Pregunta 4 : ¿Cuánto tardan en ejecutarse los cambios?</B></dt>
           <dd><I></I></dd>
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

<div><h1 align="center">Notas legales</h1><br>

<p>Gracias por leer detenidamente las diversas formas de usar este sitio antes de navegar por sus páginas. Al conectarse a este sitio, acepta sin reservas estos términos y condiciones. Asimismo, de acuerdo con el artículo n ° 6 de la Ley n ° 2004-575 del 21 de junio de 2004 para la confianza en la economía digital, los responsables del sitio web www.homeg4.com son:
Editor del Sitio</p>

<p>Agropecuario Número SIRET: 12345678901234 Director editorial: Agropecuario 10 rue des Vanves <br> Teléfono: +33 (0) 1 49 54 52 00 - Fax: +33 (0) 1 49 54 02 01 Correo electrónico: Agropecuario.contact@gmail.com Sitio web: www.Agropecuario.com
Alojamiento:</p>


<p>Agropecuario Dirección: Federico Lacroze 1955. Buenos Aires Sitio web: www.Agropecuario.com
Condiciones de uso :</p>

<p>Este sitio se propone en diferentes idiomas web (HTML, HTML5, Javascript, CSS, etc.) para una mayor comodidad de uso y gráficos más agradables. Recomendamos utilizar navegadores modernos como Internet Explorer, Safari, Firefox, Google Chrome, etc ... Los avisos legales se generaron en el Sitio del Generador de menciones legales, ofrecido por Welye. Agropecuario implementa todos los medios a su disposición para garantizar información confiable y una actualización confiable de sus sitios web. Sin embargo, pueden ocurrir errores u omisiones. Por lo tanto, el usuario debe garantizar la exactitud de la información e informar sobre cualquier cambio en el sitio que considere útil. no es en modo alguno responsable por el uso que se haga de esta información, y cualquier daño directo o indirecto que pueda resultar. Cookies: El sitio web www.Agropecuario.com puede haberle pedido que acepte cookies con fines estadísticos y de visualización. Una cookie es información almacenada en su disco duro por el servidor del sitio que está visitando. Contiene varios datos que se almacenan en su computadora en un simple archivo de texto al que un servidor accede para leer y guardar información. Es posible que algunas partes de este sitio no funcionen sin la aceptación de cookies. Es posible que algunas partes de este sitio no funcionen sin la aceptación de cookies. Enlaces de hipertexto: Los sitios web de pueden ofrecer enlaces a otros sitios web u otros recursos disponibles en Internet. Agropecuario no tiene forma de controlar los sitios en relación con sus sitios web. no responde ni garantiza la disponibilidad de dichos sitios y fuentes externos. No puede ser responsable por ningún daño, de cualquier naturaleza, que resulte del contenido de estos sitios o fuentes externas, incluida la información, los productos o servicios que ofrecen, o cualquier uso que pueda hacerse. estos elementos Los riesgos asociados con este uso son responsabilidad total del usuario, que debe cumplir con sus condiciones de uso. Los usuarios, suscriptores y visitantes de sitios web no pueden configurar un hipervínculo a este sitio sin el consentimiento previo expreso de Agropecuario. En el caso de que un usuario o visitante desee configurar un hipervínculo a uno de los sitios web de Agropecuario, será su responsabilidad enviar un correo electrónico accesible en el sitio para formular su solicitud para configurar un hipervínculo. Agropecuario se reserva el derecho de aceptar o rechazar un hipervínculo sin tener que justificar su decisión.
Servicios prestados:</p>

<p> Todas las actividades e información de la compañía están disponibles en nuestro sitio web www.Agropecuario.com. </ p>

<p> Agropecuario se esfuerza por proporcionar el sitio web www.Agropecuario.com con la información más precisa posible. La información en el sitio web www.Agropecuario.com no es exhaustiva y las fotos no son contractuales. Están sujetos a modificaciones ya que se hicieron desde que se conectaron. Además, toda la información indicada en el sitio www.Agropecuario.com se proporciona como una indicación, y es probable que cambie o evolucione sin previo aviso. </ P>


<p> Limitaciones del contrato sobre los datos: </ p>


<p>LLa información contenida en este sitio es lo más precisa posible y el sitio se actualizó en diferentes épocas del año, pero puede contener imprecisiones u omisiones. Si observa una brecha, un error o lo que parece ser un mal funcionamiento, le agradecemos que lo informe por correo electrónico a contact@homega.com, describiendo el problema con la mayor precisión posible (página problemática, tipo de computadora y navegador utilizado, ...). Cualquier contenido descargado es bajo el propio riesgo del usuario y bajo su exclusiva responsabilidad. En consecuencia, no se puede responsabilizar por ningún daño a la computadora del usuario o cualquier pérdida de datos luego de la descarga. Además, el usuario del sitio acepta acceder al sitio utilizando equipos recientes, que no contengan virus y con un navegador de última generación actualizado. Los enlaces de hipertexto configurados como parte de este sitio Internet a otros recursos en Internet no compromete la responsabilidad de Agropecuario.
Propiedad intelectual :</p>

<p>Todos los contenidos del presente en el sitio www.Agropecuario.com, incluidos, de forma no limitativa, los gráficos, imágenes, textos, videos, animaciones, sonidos, logotipos, gifs e íconos, así como su formato, son propiedad exclusiva de la empresa, excepto las marcas, los logotipos o el contenido de otras empresas asociadas o autores. Cualquier reproducción, distribución, modificación, adaptación, retransmisión o publicación, incluso parcial, de estos elementos está estrictamente prohibida sin el consentimiento expreso por escrito de Agropecuario. Esta representación o reproducción, por cualquier proceso, constituye una infracción punible por los artículos L.335-2 y siguientes del Código de propiedad intelectual. El incumplimiento de esta prohibición constituye una infracción que puede incurrir en la responsabilidad civil y penal del infractor. Además, los propietarios de Contenido copiado pueden demandarlo.
Declaración a la CNIL:</p>

<p>De conformidad con la Ley 78-17 de 6 de enero de 1978 (modificada por la Ley 2004-801 de 6 de agosto de 2004 sobre la protección de las personas con respecto al procesamiento de datos personales) relativa a las computadoras, los archivos. y las libertades, este sitio fue objeto de una declaración 0000000000 cerca de la Comisión Nacional de informática y libertades (www.cnil.fr).
Litigios:</p>

<p>Las presentes condiciones del sitio www.homeg4.com se rigen por las leyes francesas y cualquier disputa o litigio que pueda surgir de la interpretación o la ejecución de las mismas será competencia exclusiva de los tribunales de los que depende el domicilio social de la sociedad. El idioma de referencia para la solución de posibles conflictos es el francés. </p></div>
    



<?php
            $contact = ob_get_clean();
            return $contact;
}


function editer_profil($user){
    ob_start();
    ?>
    
        <h1 style="text-align: center">EDITAR SU PERFIL</h1> <br> <br>
            <fieldset>
            <form method="POST" action="http://localhost:8888/Agropecuario/index.php?cible=verifedition" enctype="multipart/form-data">  
             
            <table>
            <br>
            <tr>
               <td align="left">
               <label>Nuevo pseudo :</label>
               </td>
               <td>
               <input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>" />
               </td>
            </tr>

            <tr>
               <td align="left">
               <label>Nuevo correo electronico :</label>
               </td>
               <td>
               <input type="text" name="newmail" placeholder="Mail" value ="<?php echo $user['mail']; ?>" />
               </td>

            <tr>
               <td align="left">
               <label>Nueva contraseña :</label>
               </td>
               <td>
               <input type="password" name="newmdp1" placeholder="Mot de passe">
               </td>
            </tr>

            <tr>
               <td align="left">
               <label>Confirmacion - nueva contraseña :</label>
               </td>

               <td>
               <input type="password" name="newmdp2" placeholder="Confirmation du mot de passe" />
               </td>
            </tr>

               </table>
               <br>
               <p style="text-align: center">
                <input type="submit" value="Actualizar mi perfil !"> 
               </p>
            </form>
            <?php if(isset($msg)) { echo $msg; } ?>
                <form>
                    <p style="text-align:center">
                    <a href="http://localhost:8888/Agropecuario/index.php?">
                   <input type="button" value="Regreso">
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
        <h1 style="text-align:center" >CAMBIAR EL VALOR DE UN SENSOR</h1>
         <br /><br />               
		 <fieldset>
         <form method="POST" action="http://localhost:8888/Agropecuario/index.php?cible=changervaleur">
			<table>
               <tr>
                  <td align="right">Nombre del campo :</td>
                  <td align="left"><?=$capteur[0]["nomlogement"]?></td>
                </tr>

				<tr>
                  <td align="right">Nombre de la parte :</td>
                  <td align="left"><?=$capteur[0]["nompiece"]?></td>
                </tr>

                <tr>
                  <td align="right">Tipo de sensor :</td>
				  <td align="left"><?=$capteur[0]["typecapteur"]?></td>
                </tr>
            

                <tr> 
                  <td align="right">Valor del sensor :
                  <td align="left">
                     <input type="text" placeholder="values" id="valeur" name="valeur" value="<?=$capteur[0]["valeur"]?>">
                  </td>
                </tr>
                  </table>
                
                  <p align="center">
                     <br />
                      <a href="http://localhost:8888/Agropecuario/index.php?">
                        <input type="button" value="Regreso" /></a>
                        <input type="submit" name="formvaleur" value="Validar" />
             </p>
             <p align="center">Por la agua : 0=OFF 1=ON</p>
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
            <h1 style="text-align:center">AGREGAR SENSORS</h1>
         <br /><br />
         <div class="capteur">
		 <fieldset>
         <form method="POST" action="http://localhost:8888/Agropecuario/index.php?cible=ajoutercapteur">
                <table>
               <tr>
                  <td align="right">
                     <label for="n_piece">Nombre de la parte :</label>
                  </td>
                  <td>
                     <SELECT name="piece" size="1">
                        <?php
                        foreach ($pieces as $key => $value){
                            ?><OPTION value='<?=$value[0]?>'>Campo : <?=$value[1]?> => Parte : <?=$value[2]?> </OPTION><?php
                        }
                        ?>
                      </SELECT>
                   </td>
                </tr>

                <tr>
                  <td align="right">
                     <label for="type">Tipo de sensor :</label>
                  </td>
				  <td>
				  <SELECT name="type" size="1">
					<option selected>Agua</option>
					<option>Temperatura</option>
					<option>Humedad</option>
				  </SELECT>
                  </td>
                </tr>

                <tr> 
                  <td align="right">
					<label for="n_piece">Numero de serie :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="N° de série" id="nserie" name="nserie" >
                  </td>
                </tr>
             </table>
                 
                 
                
                       <p style="text-align:center">
                    <a href="http://localhost:8888/Agropecuario/index.php?">
                   <input type="button" value="Regreso"></a>
                    <input type="submit" name="formcapteur" value="Validar" />    
                    </p> 
            </form>
            </fieldset>
             </div>
   
    <?php
    }
    else
        echo"<script>alert('Tienes que crear partes antes de asignar sensores !');document.location.href='index.php?cible=ajouterpiece'</script>";
        
    $ajoutercapteur = ob_get_clean();
    return $ajoutercapteur;
}

function ajouterlogement(){
    ob_start();
    ?>
    <h1 style="text-align: center">EDITAR EL CAMPO</h1>

         <br /><br />
         <form method="POST" action="http://localhost:8888/Agropecuario/index.php?cible=ajouterlogement">
             <div class="logement">
             <fieldset>
             <br>
                <table>
               <tr>
                  <td align="left">
                     <label for="nom">Nombre del campo :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Nombre del campo" id="nom" name="nom" value="" />
                  </td>
                </tr>

                <tr>
                  <td align="left">
                     <label for="superficie">Area :</label>
                  </td>
                  <td>
                     <input type="phone" placeholder="Area en m2" id="superficie" name="superficie" value="" />
                  </td>
                </tr>

                    <tr>
                  <td align="left">
                     <label for="direcion">Direccion :</label>
                  </td>
                  <td>
                     <input type="phone" placeholder="Direccion" id="direccion" name="direccion" value="" />
                  </td>
                </tr>
                    <tr>
                  <td align="left">
                     <label for="ciudad">Ciudad :</label>
                  </td>
                  <td>
                     <input type="phone" placeholder="Buenos Aires" id="ciudad" name="ciudad" value="" />
                  </td>
                </tr> <tr>
                  <td align="left">
                     <label for="codigo_postal">Codigo postal :</label>
                  </td>
                  <td>
                     <input type="phone" placeholder="Codigo Postal" id="codigo_postal" name="codigo_postal" value="" />
                  </td>
                </tr>
                <tr>
                  <td align="left">
                     <label for="n_piece">Numero de partes :</label>
                  </td>
                  <td>
                     <input type="phone" placeholder="Nombre de partes" id="n_piece" name="n_piece" value="" />
                  </td>
                </tr>

                <tr>
                  <td></td>
                  </table>
                  <br>
                  <p style="text-align:center">
                    <a href="http://localhost:8888/Agropecuario/index.php?">
                   <input type="button" value="Regreso">
                    </a>
                        <input type="submit" name="formlogement" value="Validar" >
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
        <h1 style="text-align: center">EDITAR LA PARTE</h1>
        
         <br /><br />
         <form method="POST" action="http://localhost:8888/Agropecuario/index.php?cible=ajouterpiece">
             <div class="piece">
             <fieldset>
                <table>
                    
                <tr>
                  <td align="right">
                     <label for="n_logement">Nombre del campo :</label>
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
                     <label for="n_piece">Nombre de la parte :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Nombre de la parte" id="nom" name="nom" value="" />
                  </td>
                </tr>

                <tr>
                  <td align="right">
                     <label for="superficie">Area :</label>
                  </td>
                  <td>
                     <input type="phone" placeholder="Area en m2" id="superficie" name="superficie" value="" />
                  </td>
                </tr>
                <tr>
                 </table>
                       <p style="text-align:center">
                    <a href="http://localhost:8888/Agropecuario/index.php?">
                   <input type="button" value="Regreso">
                    </a>
                        <input type="submit" name="formpiece" value="Validar" />
                 </p>
            </fieldset>
                 </div>

         </form>



    <?php
    }
    else
        echo"<script>alert('Tienes que crear campos antes de asignarles partes!');document.location.href='index.php?cible=ajouterlogement'</script>";
        
    $ajouterpiece = ob_get_clean();
    return $ajouterpiece;
}


?>