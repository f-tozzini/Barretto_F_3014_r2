<?php
    function createUser($fname, $username, $generatePas, $email, $lvllist) {
      include('connect.php');

      $userstring = "INSERT INTO tbl_user (user_fname, user_name, user_pass, user_email,
        user_date, user_ip, user_level) VALUES ('${fname}', '${username}',
        '${generatePas}', '${email}', NOW(), 'no', '${lvllist}')";

        // echo $userstring;
        $userquery = mysqli_query($link, $userstring);
        if($userquery) {
          $generatePas = genPassword ($size = 8);
          $sendMail = submitMessage($fname, $username, $generatePas, $email);
          redirect_to('admin_index.php');
        } else {
          $message = "User error";
          return $message;

        }
        mysqli_close($link);

    }

 ?>
