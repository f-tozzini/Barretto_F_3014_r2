<?php

require_once("config.php");

function submitMessage($fname, $username, $generatePas, $email) {
  $to = $email;
  $subj = "Your Login Information";
  $msg = "Name: " .$fname."\n\nUsername: ".$username."\n\nPassword: ".$generatePas;
  mail($to,$subj,$msg);
}

 ?>
