<?php
  function logIn($username, $password, $ip) {
    require_once('connect.php');
    $username = mysqli_real_escape_string($link, $username);
    $password = mysqli_real_escape_string($link, $generatePas);
    $loginstring = "SELECT * FROM tbl_user WHERE user_name= '{$username}' AND user_pass='{$password}'";
    $user_set = mysqli_query($link, $loginstring);

    if(mysqli_num_rows($user_set)){
      $founduser = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
      $id = $founduser['user_id'];
      $_SESSION['user_id'] = $id;
      $_SESSION['user_name'] = $founduser['user_fname'];

      if(mysqli_query($link, $loginstring)){
        $update ="UPDATE tbl_user SET user_ip='{$ip}' WHERE user_id={$id}";
        $updatequery = mysqli_query($link, $update);
      }
      redirect_to("admin_index.php");
      // echo $id;
    }else{
      $message = "Wrong!";
      return $message;
    }
    // echo mysqli_num_rows($user_set);
    // echo $loginstring;

    mysqli_close($link);
  }

 ?>
