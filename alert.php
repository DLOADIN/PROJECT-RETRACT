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
  <title>ALERT</title>
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
          <h1>ALERT</h1>
        </div>
        <div class="user-info">
          <h2 class="my-account-header"></h2>
        <img src="./images/Rwanda 🇷🇼.jpg" alt="">
        </div>
      </div>
      <div class="alerted-message">
        <div class="alerted-perl"></div>
        <h3>IMPORTANT NOTICE</h3>
        <p>
          Heavy flood warning today at Rubavu issued January 10 at 3.30pm<br>
          Kigali time Reported...
        </p>
        <i class="fa-solid fa-triangle-exclamation" id="tray"></i>
      </div>

      <div class="alerted-message">
        <div class="alerted-perls"></div>
        <h3>WEATHER NOTICE</h3><br><br>
        <p>
          Severe Thunderstorm today and cold weather today, Please be safe<br>
          and aware the love ones to be careful of today bad weather...
        </p>
        <i class="fa-solid fa-triangle-exclamation" id="zar"></i>
      </div>

      <div class="alerted-message">
        <div class="alerted-perl"></div>
        <h3>IMPORTANT NOTICE</h3><br><br>
        <p>
          We're sorry to announce the passed away of our good leader and <br>
          great member of Nigeria, Mr Salomon Musa is one of the older <br> 
          Nigerian citizen of Rwanda for over 15 years and his....
        </p>
        <i class="fa-solid fa-triangle-exclamation" id="tray"></i>
      </div>

      <div class="alerted-message">
        <div class="alerted-perls"></div>
        <h3>PASSPORT RENEW </h3><br><br>
        <p>
          Dear Citizens of Nigeria, We pleased to inform you that passport are <br>
          ready to be collected at the embassy from Monday at 10:00am to 4:30pm <br>
          till Friday from 8:00am to 12:00pm...
        </p>
        <i class="fa-solid fa-triangle-exclamation" id="zar"></i>
      </div>

      <div class="alerted-message">
        <div class="alerted-perled"></div>
        <h3>GENERAL PUBLIC </h3><br><br>
        <p>
          Today is a public holiday for world wide, The embassy will be closed till <br>
          tomorrow for any emergency or any other activities you may need from the <br>
          embassy, Please you can communicate theough system for assistance...
        </p>
        <i class="fa-solid fa-triangle-exclamation" id="zari"></i>
      </div>
        
  </div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>