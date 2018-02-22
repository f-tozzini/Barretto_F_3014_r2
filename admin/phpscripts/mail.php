<?php

require_once("config.php");

function submitMessage($fname, $username, $password, $email) {
  $to = $email;
  $subj = "Your Login Information";
  $msg = "Name: " .$fname."\n\nUsername: ".$username."\n\nPassword: ".$password;
  mail($to,$subj,$msg);
}

 ?>
