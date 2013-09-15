<?php
 session_start(); // start the session
 $message = $_SESSION['message']; // check if we have a message to display
 $_SESSION['message'] = "";  // clear the message for next time
?>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/suscribe.js"></script>

<div class="container">
	<br/>
	<div class="jumbotron">
		<h1>Nous sommes de retour !</h1>
		<p>Cet hiver, l'UTT Arena fait son comeback ! Nouvelle formule, nouvelles activités, plus de fun, plus de liberté, et comme toujours des lots à gagner...</p>
		<p><a class="btn btn-primary btn-lg">Découvrez l'événement</a></p>
	</div>
	
	<div class="row">
		<div class="col-lg-6">
			<p class="lead" style="text-align: center">
				Rejoignez nous sur les réseaux sociaux !
			</p>
			
			<p style="text-align: center">
				<a href="https://www.facebook.com/UA2K12?fref=ts"><img src="images/social/facebook.round.png" alt="facebook" /></a>
				<a href="https://twitter.com/UTTNetGroup"><img src="images/social/twitter.round.png" alt="twitter" /></a>
				<a href="http://www.youtube.com/channel/UCm8nToPe0gc0zlUa-gAxvEA"><img src="images/social/youtube.round.png" alt="youtube" /></a>
			</p>
		</div>
		
		<div class="col-lg-6">
			<p>
				<div id="compte_a_rebours">
					<noscript>Fin de l'évènement le 1er janvier 2013.</noscript>	
					<script type="text/javascript">
						function compte_a_rebours(){
							var compte_a_rebours = document.getElementById("compte_a_rebours");

							var date_actuelle = new Date();
							var date_evenement = new Date("Oct 1 12:00:00 2013");
							var total_secondes = (date_evenement - date_actuelle) / 1000;

							var prefixe = "Les inscriptions seront lançées dans :<br />";
							if (total_secondes < 0)
							{
								prefixe = "Les inscriptions ont commençé.";

							}

							if (total_secondes > 0)
							{
								var jours = Math.floor(total_secondes / (60 * 60 * 24));
								var heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 * 60));
								minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);
								secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes * 60)));

								var et = ", et";
								var mot_jour = "jours,";
								var mot_heure = "heures,";
								var mot_minute = "minutes";
								var mot_seconde = "secondes";

								if (jours == 0)
								{
									jours = '';
									mot_jour = '';
								}
								else if (jours == 1)
								{
									mot_jour = "jour,";
								}

								if (heures == 0)
								{
									heures = '';
									mot_heure = '';
								}
								else if (heures == 1)
								{
									mot_heure = "heure,";
								}

								if (minutes == 0)
								{
									minutes = '';
									mot_minute = '';
								}
								else if (minutes == 1)
								{
									mot_minute = "minute";
								}

								if (secondes == 0)
								{
									secondes = '';
									mot_seconde = '';
									et = '';
								}
								else if (secondes == 1)
								{
									mot_seconde = "seconde";
								}

								if (minutes == 0 && heures == 0 && jours == 0)
								{
									et = "";
								}

								compte_a_rebours.innerHTML = prefixe + jours + ' ' + mot_jour + ' ' + heures + ' ' + mot_heure + ' ' + minutes + ' ' + mot_minute + et + ' ' + secondes + ' ' + mot_seconde;
							}
							else
							{
								compte_a_rebours.innerHTML = 'Les inscriptions ont commençé.';
							}

							var actualisation = setTimeout("compte_a_rebours();", 1000);
						}

						compte_a_rebours();
						</script>
				</div>
			</p>
	
		
			<div class="form-group">
				<form action="./add.php" method="POST" id="subscribe">
					<label class="control-label" for="email">Nous pouvons vous avertir dès l'ouverture des inscriptions :</label>
					<div class="input-group">
						<span class="input-group-addon">Email</span>
						<input type="text" class="form-control">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">OK</button>
						</span>
				
					</div>
				</form>
			</div>
	
			<p class="message"></p>
			<?php if(strlen($message) > 0){ ?><h2 class="stat"><?php echo '<br />'. $message ?></h2><?php } ?>
		</div>
	</div>
</div>
