<?php
require_once("functions/functions.php"); // include the functions and the config file
$email = $_POST['email']; // get the email
	
	if($email == ""){ // if its empty the user just clicked submit
		$error = "Ce n'est pas votre adresse e-mail!";
		reply(1, $error);
		die();
	}
	
	if (!preg_match('/^[a-z0-9]+([_\.-][a-z0-9]+)*@([a-z0-9]+([.-][a-z0-9]+)*)+\.[a-z]{2,}$/i', $email)) { // make sure it valid
        $error = "Ce n'est pas une adresse e-mail valide.";  // set a message
        reply(1, $error); // set an error
        die(); // die and stop running the script
	}
 
	if( add_email_to_database($email) ){ // if we added the user
		reply(0, "Merci ! On vous tiendra au courant."); // set no error
	}else{
		reply(1, "Vous nous avez déjà communiqué votre adresse."); // else, the user was found alreay
	};