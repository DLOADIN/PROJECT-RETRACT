<?php
require 'connection.php';

if(isset($_POST['submit'])){
  $name= $_POST['u_name'];
  $password = $_POST['u_password'];
  $sql=mysqli_query($con,"SELECT * FROM `user` WHERE u_name = '$name' AND u_password = '$password' ");
  $query=mysqli_fetch_array($sql);

  if(mysqli_num_rows($sql) > 0){
    if($password===$query["u_password"]);
    $_SESSION["login"] = true;
    $_SESSION["id"] = $query["id"];
    header('location:index.php');
  }

  else{
    echo "<script>alert('failed to login')</script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/form.css">
  <link rel="shortcut icon" href="./images/3D-realistic-pennant-with-flag-of--nigeria-on-transparent-background-PNG.png" type="image/x-icon">
  <title>LOGIN PAGE</title>
</head>
<body>
  <section>
    <div class="form-box">
      <div class="form-value">

        <form action="" method="POST" autocomplete="off">
          <h2>LOGIN FORM</h2>
          <div class="inputbox">
            <ion-icon name="people-outline"></ion-icon>
            <input type="text" name="u_name" required>
            <label for="">Name</label>
          </div>

          <div class="inputbox">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="password" name="u_password" required>
            <label for="">Password</label>
          </div>

          <div class="forget">
            <label for="">
              <input type="checkbox">Remember Me
            </label>
          </div>
          <button name="submit" type="submit">Log In</button>
          <div class="register">
            <p>Create An Account &nbsp;&nbsp; <a href="registration.php">SIGN-UP</a></p>
          </div>
        
        </form>
      </div>
    </div>
  </section>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>