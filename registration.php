<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/fire.css">
  <link rel="shortcut icon" href="./images/3D-realistic-pennant-with-flag-of--nigeria-on-transparent-background-PNG.png" type="image/x-icon">
  <title>REGISTRATION PAGE</title>
</head>
<body>
  <section>
    <div class="form-box">
      <div class="form-value">
        <form method="POST" action="">
          <h2>REGISTRATION FORM</h2>
          <div class="inputbox">
            <ion-icon name="people-outline"></ion-icon>
            <input type="text" name="u_name" required>
            <label for="">FULL NAME</label>
          </div>

          <div class="inputbox">
            <ion-icon name="mail-outline"></ion-icon>
            <input type="email" name="u_email" required>
            <label for="">EMAIL</label>
          </div>
          <div class="inputbox">
          <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="text" name="u_password" required>
            <label for="">PASSWORD</label>
          </div>

          <div class="inputbox">
          <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="text" name="u_passcodes"required>
            <label for="">CONFIRM PASSWORD</label>
          </div>

          <div class="inputbox">
            <ion-icon name="id-card-outline"></ion-icon>
            <input type="number" name="u_passportnumber"required>
            <label for="">PASSPORT NUMBER</label>
             
           
          </div>

          <div class="forget">
          </div>
          <button name="submit" type="submit">REGISTER</button>
          <div class="register">
            <p>Already Having an account &nbsp;&nbsp;&nbsp;<a href="loginform.php">SIGN IN</a></p>
          </div>
        </form>
      </div>
    </div>
  </section>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html> 
<?php
  require 'connection.php';
  
  if(isset($_POST['submit'])){
    $name = $_POST['u_name'];
    $email = $_POST['u_email'];
    $password = $_POST['u_password'];
    $passcodes = $_POST['u_passcodes'];
    $passportnumber = $_POST['u_passportnumber'];
    $sql=mysqli_query($con,"INSERT INTO `user` VALUES('','$name','$email','$password','$passcodes','$passportnumber')");
    
    if($sql){
      echo "<script>alert('Registered Successfully| Please Head to the Login ')</script>";
    }
    else{
      echo "<script>alert('failed to register')</script>";
    }
  }
?>