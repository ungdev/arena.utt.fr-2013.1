<?php
 session_start(); // start the session
 if (isset($_SESSION['message'])){
	 $message = $_SESSION['message']; // check if we have a message to display
	 $_SESSION['message'] = "";  // clear the message for next time
} else {
	$message = "";
}

include 'functions/config.php';

//if ($now >= $launch) {
//	header('Location: ../');
//	exit;
//}

$diff = $launch - $now;

$interval = new stdClass();

$interval->days = floor($diff / (24 * 3600));
$days = $interval->days * 24 * 3600;

$interval->h = floor(($diff - $days) / 3600);
$hours = $interval->h * 3600;

$interval->i = floor(($diff - $days - $hours) / 60);
$minutes = $interval->i * 60;

$interval->s = $diff - $days - $hours - $minutes;

?>
<div class="container">
	<br/>
	<div class="jumbotron">
		<h1>Nous sommes de retour !</h1>
		<p>Cet hiver, du 29 novembre au 1er décembre 2013, l'UTT Arena fait son comeback ! Nouvelle formule, nouvelles activités, plus de fun, et comme toujours des lots à gagner...</p>
		<p><a class="btn btn-primary btn-lg" href="description.php">Découvrez l'événement</a></p>
	</div>

	<div class="row">
		<div class="col-md-6">
			<p class="lead" style="text-align: center">
				Rejoignez nous sur les réseaux sociaux !
			</p>

			<p style="text-align: center">
				<a href="https://www.facebook.com/UA2K12?fref=ts"><!--
				 --><img src="images/social/facebook.round.png" alt="Facebook" title="Suivez-nous sur Facebook !" /><!--
			 --></a>
				<a href="https://twitter.com/UTTArena"><!--
				 --><img src="images/social/twitter.round.png" alt="Twitter" title="Suivez-nous sur Twitter !" /><!--
			 --></a>
				<a href="http://www.youtube.com/user/UTTNetGroup"><!--
				 --><img src="images/social/youtube.round.png" alt="YouTube" title="Suivez-nous sur YouTube !" /><!--
			 --></a>
			</p>

			<br />
		</div>

		<div class="col-md-6">
			<p>Ouverture des inscriptions dans :</p>
			<div class="row">
				<div class="col-xs-6 col-sm-3">
					<div class="days date-element">
						<h2 id="days"><?php echo $interval->days; ?></h2>
						<span class="infos">jour<span id="s_days">s</span></span>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="hours date-element">
						<h2 id="hours"><?php echo $interval->h; ?></h2>
						<span class="infos">heure<span id="s_hours">s</span></span>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="minutes date-element">
						<h2 id="minutes"><?php echo $interval->i; ?></h2>
						<span class="infos">minute<span id="s_minutes">s</span></span>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="seconds date-element">
						<h2 id="seconds"><?php echo $interval->s; ?></h2>
						<span class="infos">seconde<span id="s_seconds">s</span></span>
					</div>
				</div>
			</div>

			<br />

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

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/subscribe.js"></script>
<script type="text/javascript" src="js/launch.js"></script>

<script type="text/javascript">
	var interval = <?php echo json_encode($interval); ?>;
	refreshDisplay(interval);
	setInterval(function() { refreshDisplay(interval); }, 1000);
</script>
