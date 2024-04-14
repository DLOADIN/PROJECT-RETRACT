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
  <link rel="stylesheet" href="./style/output2.css">
  <link rel="shortcut icon" href="./images/3D-realistic-pennant-with-flag-of--nigeria-on-transparent-background-PNG.png" type="image/x-icon">
  <script src="https://kit.fontawesome.com/14ff3ea278.js" crossorigin="anonymous"></script>
  <title>DASHBOARD</title>
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
          <h1>Dashboard</h1>
        </div>
        <div class="user-info">
          <h1 class="my-account-header">My Account</h1>
        <img src="./images/Rwanda 🇷🇼.jpg" alt="">
        </div>        
      </div>
      <div class="blocked-county">
        <div class="facted">
        <h1>GET TO KNOW NIGERIA</h1>
        <a href="#facts">
          <div class="arrow-down">
            <i class="fa-solid fa-arrow-down"></i>
          </div>
        </a>
        </div>
      </div>
      <H1 class="facts" id="facts">FACTS ABOUT NIGERIA</H1>
      <div class="division">
      <div class="long-line"></div></div>
      <div class="craby-patty">
          <div class="carder">
          <i class="fa-solid fa-people-group"></i>
          <p>200 MILLION IN POPULATION</p>
          </div>
          <div class="carder">
          <i class="fa-solid fa-oil-well"></i>
          <p>12TH IN OIL PRODUCTION</p>
          </div>
          <div class="carder">
          <i class="fa-solid fa-language"></i>
          <p>OVER 500 LANGUGES</p>
          </div>
          <div class="carder">
          <i class="fa-solid fa-money-bill-trend-up"></i>
          <p>AFRICA'S LARGEST ECONOMY</p>
          </div>
          <div class="carder">
          <i class="fa-solid fa-microchip"></i>
          <p>AFRICA'S LARGEST TECH HUB</p>
          </div>
        </div>
      <div class="craby-patty-2">
          <div class="carder">
          <i class="fa-solid fa-city"></i>
          <p>THE LARGEST CITY LAGOS</p>
          </div>
          <div class="carder">
          <i class="fa-solid fa-music"></i>
          <p>AFRICA'S GREATEST ENTERTAINMENT HUB</p>
          </div>
          <div class="carder">
          <i class="fa-solid fa-film"></i>
          <p>3RD LARGEST FILM INDUSTRY</p>
          </div>
          <div class="carder">
          <i class="fa-solid fa-plane-up"></i>
          <p>AFRICA'S LARGEST AIR TRANSPORTATION SERVICE</p>
          </div>
          <div class="carder">
          <i class="fa-solid fa-user-astronaut"></i>
          <p>NIGERIA SAT-1<br>
          AFRICA'S FIRST SATELLITE</p>
          </div>
        </div>


  </div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>