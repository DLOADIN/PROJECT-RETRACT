<?php
  require "connection.php";
  if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $check = mysqli_query($con,"SELECT * FROM `user`WHERE id=$id ");
  $row = mysqli_fetch_array($check);
  }
  else{
  header('location:loginform.php');
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/output.css">
  <link rel="shortcut icon" href="./images/3D-realistic-pennant-with-flag-of--nigeria-on-transparent-background-PNG.png" type="image/x-icon">
  <script src="https://kit.fontawesome.com/14ff3ea278.js" crossorigin="anonymous"></script>
  <title>MODIFY PAGE</title>
</head>
<body>
    <div class="sidebar">
      <div class="logo"></div>
        <ul class="menu">
          <li>
            <a href="index.php">
              <i class="fa-solid fa-house"></i>
              <span>HOME</span>
            </a>
          </li>
          <li>
            <a href="alert.php">
            <i class="fa-solid fa-bell"></i>
              <span>ALERT</span>
            </a>
          </li>
          <li>
            <a href="communication.php">
            <i class="fa-solid fa-tower-cell"></i>
              <span>COMMUNICATE</span>
            </a>
          </li>
          <li>
            <a href="email.php">
              <i class="fa-solid fa-envelope-circle-check"></i>
              <span>EMAIL US</span>
            </a>
          </li>
          <li>
            <a href="account.php">
              <i class="fa-solid fa-user"></i>
              <span>MEMBERS</span>
            </a>
          </li>
          <li class="logout">
            <a href="logout.php">
              <i class="fa-solid fa-arrow-right-from-bracket"></i>
              <span>LOGOUT</span>
            </a>
          </li>
      </ul>
    </div>


    <div class="main-content">
      <div class="header-wrapper">
        <div class="header-title">
          <h3>UPDATE AREA</h3>
        </div>
        <div class="user-info">
          <h3 class="my-account-header"></h3>
        <img src="./images/Rwanda 🇷🇼.jpg" alt="">
        </div>
      </div>

    <div class="tabular-wrapper">
      <div class="header-title">
        <h3>MODIFY DATA</h3>
      </div>
    <section class="sectioned">
    <div class="form-boxed">
      <div class="form-value">
        <?php
        if(isset($_GET['id'])){
        $id=$_GET['id'];
        }
        $sql=mysqli_query($con,"SELECT * FROM user WHERE id='$id' ");
        $row=mysqli_fetch_array($sql);
        ?>
        <form method="POST" action="">
          <h2>REGISTRATION FORM</h2>
          <div class="inputboxed">
            <ion-icon name="people-outline"></ion-icon>
            <input type="text" name="u_name" required value="<?php echo $row['u_name']?>">
          </div>

          <div class="inputboxed">
            <ion-icon name="mail-outline"></ion-icon>
            <input type="email" name="u_email" required value="<?php echo $row['u_email']?>">
          </div>
          <div class="inputboxed">
          <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="text" name="u_password" required value="<?php echo $row['u_password']?>">
          </div>

          <div class="inputboxed">
          <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="text" name="u_passcodes"required value="<?php echo $row['u_passcodes']?>">
          </div>

          <div class="inputboxed">
            <ion-icon name="id-card-outline"></ion-icon>
            <input type="number" name="u_passportnumber"required value="<?php echo $row['u_passportnumber']?>">
             
           
          </div>
          <button name="submit" type="submit">UPDATE</button>
        </form>
        <?php
    if(isset($_POST['submit'])){
    $name = $_POST['u_name'];
    $email = $_POST['u_email'];
    $password = $_POST['u_password'];
    $passcodes = $_POST['u_passcodes'];
    $passportnumber = $_POST['u_passportnumber'];
    $sql=mysqli_query($con,"UPDATE user SET u_name='$name', u_email='$email', u_password='$password', u_passcodes='$passcodes', u_passportnumber='$passportnumber' WHERE id='$id' ");
    header('location:account.php');
    }
    ?>
      </div>
    </div>
  </section>
    </div>
  </div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
