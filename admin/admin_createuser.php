<?php
  require_once('phpscripts/config.php');
  // confirm_logged_in();

  if(isset($_POST['submit'])){
    $fname = trim($_POST['fname']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $lvllist = $_POST['lvllist'];

    if(empty($lvllist)){
      $message = "Please select a user level";
    } else {
      $result = createUser($fname, $username, $password, $email, $lvllist);
      $message = $result;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/main.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <title>Create User</title>
</head>
<body>
  <img src="images/header.jpg" alt="header image" id="header-img">
  <div id="admin-container">
  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
</head>
<body>
  <h2>Create User</h2>
  <?php if(!empty($message)) { echo $message;} ?>

  <div id="user-container">
  <form action="admin_createuser.php" method="post">
    <label>First Name</label>
    <input type="text" name="fname" value="">
    <label>Username</label>
    <input type="text" name="username" value="">
    <!-- <label>Password</label> -->
    <!-- <input type="password" name="password" value= <?php echo $genPassword;?>>
    <div class="gen-pas admin-button" <?php if(isset($_POST['user_pass'])){
       $genPassword;}?> >Generate New Password</div> -->
    <label class="email">Email</label>

    <input type="text" name="email" value="">
    <br>
      <select name="lvllist">
        <option value="">Select User Level</option>
        <option value="2">Web Admin</option>
        <option value="1">Web Master</option>
      </select>
      <br><br>
      <input type="submit" name="submit" value="SUBMIT" class="button">

  </form>
</div>

  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
  </div>
  <img src="images/footer.jpg" alt="footer image" id="footer-img">
  </body>
  </html>


</body>
</html>
