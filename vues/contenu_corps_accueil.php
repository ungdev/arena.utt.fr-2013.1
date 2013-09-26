<?php
 session_start(); // start the session
 if (isset($_SESSION['message'])){
	 $message = $_SESSION['message']; // check if we have a message to display
	 $_SESSION['message'] = "";  // clear the message for next time
} else {
	$message = "";
}
?>
<head>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/subscribe.js"></script>
</head>
<div class="container">
	<br/>
	<div class="jumbotron">
		<h1>Nous sommes de retour !</h1>
		<p>Cet hiver, l'UTT Arena fait son comeback ! Nouvelle formule, nouvelles activités, plus de fun, et comme toujours des lots à gagner...</p>
		<p><a class="btn btn-primary btn-lg" href="description.php">Découvrez l'événement</a></p>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<p class="lead" style="text-align: center">
				Rejoignez nous sur les réseaux sociaux !
			</p>

			<p style="text-align: center">
				<a href="https://www.facebook.com/UA2K12?fref=ts">
					<img src="images/social/facebook.round.png" alt="Facebook" title="Suivez-nous sur Facebook !" />
				</a>
				<a href="https://twitter.com/UTTArena">
					<img src="images/social/twitter.round.png" alt="Twitter" title="Suivez-nous sur Twitter !" />
				</a>
				<a href="http://www.youtube.com/user/UTTNetGroup">
					<img src="images/social/youtube.round.png" alt="YouTube" title="Suivez-nous sur YouTube !" />
				</a>
			</p>
		</div>

		<div class="col-lg-6">

			<?php
				// On déclare le compteur, et on ajoute 12*60*60 pour rajouter 12h
				// Si besoin de modifier la date ne pas oublier de le faire également dans countdown.js
				$fincompteur = (strtotime('October 1, 2013') + (12*60*60));
				$today = time();

				// Si on est avant le lancement
				if (($today - $fincompteur) <= 0)
				{
					{ ?>
					<div id="countdown-blog" style=''>
					<p>
						Les inscriptions seront lancées dans :
					</p>
					</div>
					<?php }
				}
				else
				{
					echo "Les inscriptions ont commencé.";
				}
			?>


			<div class="form-group">
				<form action="./add.php" method="POST" id="subscribe">
					<label class="control-label" for="email">Nous pouvons vous avertir dès l'ouverture des inscriptions :</label>
					<div class="input-group">
						<span class="input-group-addon">Email</span>
						<input type="text" class="form-control" id="email">
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit">OK</button>
						</span>
					</div>
				</form>
			</div>

			<p class="message"></p>
			<?php if(strlen($message) > 0){ ?><h2 class="stat"><?php echo '<br />'. $message ?></h2><?php } ?>
		</div>
	</div>
</div>
