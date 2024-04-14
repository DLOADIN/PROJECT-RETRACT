<?php
  require "connection.php";
  if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $check = mysqli_query($con,"SELECT * FROM `user` WHERE id=$id ");
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
  <title>COMMUNICATION</title>
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
          <h1>LET'S COMMUNICATE</h1>
        </div>
        <div class="user-info">
          <h1 class="my-account-header"></h1>
        <img src="./images/Rwanda 🇷🇼.jpg" alt="">
        </div>
      </div>
      <div class="card">
      <h2>Emergency Contacts</h2>  
      <p>(+250) 781481656</p>
      </div>
      <div class="card-holder">
        <div class="carded-1">
          <h2>
            UPDATED NEWS
          </h2>
          <p>
          <ul>
            <li>Rwanda had ordered the mandatory evacuation of all civillians from 37 settlements<br>
          in the north as Kenya steps up its attacks there</li>
            <li>Rwanda had ordered the mandatory evacuation of all civillians from 37 settlements<br>
          in the north as Kenya steps up its attacks there</li>
            <li>Rwanda had ordered the mandatory evacuation of all civillians from 37 settlements<br>
          in the north as Kenya steps up its attacks there</li>
            <li>Rwanda had ordered the mandatory evacuation of all civillians from 37 settlements<br>
          in the north as Kenya steps up its attacks there</li>
          </ul>
          </p>
        </div>
        <div class="carded-2">
        <h2>
            INSTRUCTIONS AND GUIDELINES
          </h2>
          <p>
          <ul>
            <li>Keep yourself informed about the situation through official communication <br>
                channels such as emergency alerts, local news or notifications from <br>
                authorities.</li>
            <li>Familiarize yourself with designated evacuation routes. Follow the prescribed<br>
                paths to reach safe locations.</li>
            <li>Follow recommended procedures to secure your home before leaving, such as<br>
                turning off utilities(gas, water, electricity) and looking doors and windows.</li>
            <li>Head to pro-determined assembly points. These locations are chosen for safety<br>
                and serve as meeting points for evacuees</li>
            <li>
              Stay away from flooded areas, and do not attempt to cross flooded roads or<br>
              bridges, Water levels can be deceptive and swift currents pose significant risks.
            </li>
          </ul>
          </p>
        </div>
      </div>
      

  </div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>