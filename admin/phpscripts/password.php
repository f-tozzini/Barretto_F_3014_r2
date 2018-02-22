<?php
require_once("config.php");

  function genPassword ($size = 8) {
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $genPassword = substr(str_shuffle($characters), 0, $size);
  }
 ?>
