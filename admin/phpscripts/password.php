<?php
require_once("config.php");

  function genPassword ($size) {
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $genPassword = substr(str_shuffle($characters), 0, $size);
    return $genPassword;
    // echo $genPassword;
  }

  function hashPassword($password) {
    $hashPas = password_hash($password, PASSWORD_DEFAULT);
    return $hashPas;
  }

   function verifyPassword($password, $hashPas) {
     if (password_verify($password, $hashPas)) {
          $hashed = true;
     }
     else {
       $hashed = false;
     }
     return $hashed;
   }


 ?>
