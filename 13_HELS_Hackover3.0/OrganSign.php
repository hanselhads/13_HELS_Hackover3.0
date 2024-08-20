<?php
session_start();

  include("connection.php");
  include("Functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
   //something was posted
   $username = $_POST['username'];
   $password = $_POST['password'];


   if(!empty($username) &&!is_numeric($username) && !empty($password))
   {
      //save to database
 	$user_id = random_num(20);
      $query = "insert into organ (user_id,username,password) values ('$user_id','$username','$password')";

      mysqli_query($con,$query);

      header("Location: Dash.html");
      die;
   }else
   {
      echo "Please enter valid information";
   }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Organizer SignUp</title>
    <link rel="stylesheet" href="CSS/l_style.css">
  </head>
  <body>
    <div class="Center">
      <h1>Organizer Sign Up</h1>
      <form method="post">
        <div class="Field">
          <input name="username" value="" >
          <span></span>
          <label>Username</label>
        </div>
        <div class="Field">
          <input name="password" value="">
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" name="" value="SignUp">
        <div class="SignUp">
          Already A Member? <a href="http://localhost/Event/Organ.php">Login</a>
        </div>
      </form>
    </div>
  </body>
</html>