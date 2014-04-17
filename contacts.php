<?php 
	include "header.php";
?>

<h1 class="titleMenu"> <p> <?php echo $langs->trans("contacts"); ?> </p></h1>


	<div id="boxRound">
		<div class="txt txtContact">
			<p><?php echo $langs->trans("numTel");?>: +351 918 156 711 </p>
			<p><?php echo $langs->trans("Email");?>: <a href="mailto:someone@example.com" target="_top">someone@example.com</a> </p>
		</div>
		
		<div class="contactForm txt">
			<form method="post" action="<?php echo strip_tags($_SERVER['REQUEST_URI']); ?>">
				<table>
					<tr>
						<td></td>
						<td><h1>Contacter le webmaster</h1></td>
					</tr>
					
					<tr>
					  <th>Votre nom et prénom: </th>
					  <td><input type="text" name="nom" size="30" /></td>
					</tr>
					<tr>
					  <th>Votre email <span style="color:rgb(255,181,50);">*</span>: </th>
					  <td><input type="text" name="email" size="30" /></td>
					</tr>
					<tr>
					  <th>Message <span style="color:rgb(255,181,50);">*</span>:</th>
					  <td><textarea name="message" cols="60" rows="10"></textarea></td>
					 </tr>
					 <tr>
					  <td></td><td><input type="submit" name="submit" value="Envoyer" /></td>
					 </tr>
				</table>
			</form>
			
			<?php
			
			function cmd( $str, $report=true )
			{
				global $smtp;
				$ret = fwrite( $smtp, $str."\r\n" );
				if( $report === true )
					fread( $smtp, 512 );
			}
			
			
			// S'il y des données de postées
			if ($_SERVER['REQUEST_METHOD']=='POST') {
			  // Code PHP pour traiter l'envoi de l'email
			 
			  $nombreErreur = 0; // Variable qui compte le nombre d'erreur
			  // Définit toutes les erreurs possibles
			  if (!isset($_POST['email'])) { // Si la variable "email" du formulaire n'existe pas (il y a un problème)
				$nombreErreur++; // On incrémente la variable qui compte les erreurs
				$erreur1 = '<p>Il y a un problème avec la variable "email".</p>';
			  } else { // Sinon, cela signifie que la variable existe (c'est normal)
				if (empty($_POST['email'])) { // Si la variable est vide
				  $nombreErreur++; // On incrémente la variable qui compte les erreurs
				  $erreur2 = '<p>Vous avez oublié de donner votre email.</p>';
				} else {
				  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
					$nombreErreur++; // On incrémente la variable qui compte les erreurs
					$erreur3 = '<p>Cet email ne ressemble pas à un email.</p>';
				  }
				}
			  }
			 
			  if (!isset($_POST['message'])) {
				$nombreErreur++;
				$erreur4 = '<p>Il y a un problème avec la variable "message".</p>';
			  } else {
				if (empty($_POST['message'])) {
				  $nombreErreur++;
				  $erreur5 = '<p>Vous avez oublié de donner un message.</p>';
				}
			  }    // (3) Ici, il sera possible d'ajouter plus tard un code pour vérifier un captcha anti-spam.
			 
			  if ($nombreErreur==0) { // S'il n'y a pas d'erreur
				  // Récupération des variables et sécurisation des données
				  $nom     = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
				  $email   = htmlentities($_POST['email']);
				  $message = htmlentities($_POST['message']);
				 
				  // Variables concernant l'email
				 
				  $destinataire = 'gtorche@gmail.com'; // Adresse email du webmaster (à personnaliser)
				  $sujet = 'Email Jm Appart Hotel'; // Titre de l'email
				  $contenu = '<html><head><title>Email Jm Appart Hotel</title></head><body>';
				  $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
				  $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
				  $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
				  $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
				  $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
				 
				  // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
				  $headers = 'MIME-Version: 1.0'."\r\n";
				  $headers .= 'Content-type: text/html; charset=utf-8;'."\r\n";
				   
				  ini_set('sendmail_from', 'gtorche@gmail.com'); 
				
				  // Envoyer l'email
				  if(mail($destinataire, $sujet, $contenu, $headers)) // Fonction principale qui envoi l'email
				  {
					 echo '<h2>Message envoyé!</h2>';
				  }else{
					$nombreErreur++;
					$erreur6 = '<p>Une erreur s\'est produite lors de l\'envoi de votre email.</p>';
				  }
			  }
			  
			  if($nombreErreur>0){ // S'il y a un moins une erreur
				echo '<div class="frameErrorContact">';
				if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
				if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
				if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
				if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
				if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';
				if (isset($erreur6)) echo '<p>'.$erreur6.'</p>';
				// (4) Ici, il sera possible d'ajouter un code d'erreur supplémentaire si un captcha anti-spam est erroné.
				echo '</div>';
			  }
			}
			?>
		</div>
	</div>
	

			

<?php 
	include "footer.php";
?>