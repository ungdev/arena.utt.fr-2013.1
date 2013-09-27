<?php
session_start();    // start session
require_once("config.php"); // require our config.php file
 
function reply($type, $message){ // function to reply to the javascript
        $replying = array("error"=>"{$type}", "message"=>"$message");
        echo(json_encode($replying)); // json encode the responce
}
 
function add_email_to_database($email){ // adding the email address to the datbase

    $email = mysql_real_escape_string($email); // make sure it OK
    $sql = "SELECT * FROM `subscribers` WHERE email = '{$email}' LIMIT 1"; // select all subsribers that has the email and only return (if there is) one
    $qry = mysql_query($sql); // run the query
    if( mysql_num_rows($qry) != 0){ // if that user was found they are not new so return false
        return false;
    }else{ // user was not found 
        // insert the values
        $sql = "INSERT INTO `subscribers`(`id`, `email`) VALUES (NULL,'{$email}')";
 
        mysql_query($sql); // run the query
        return true; // return true as we added the user
    }
} 
