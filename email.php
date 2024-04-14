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
  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <title>EMAIL US</title>
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
          <h1>EMAIL US</h1>
        </div>
        <div class="user-info">
          <h2 class="my-account-header"></h2>
        <img src="./images/Rwanda 🇷🇼.jpg" alt="">
        </div>
      </div>

    <div class="tabular-wrapper">
      <div class="header-title">
        <h3>MAIN CONTACT FORM AREA</h3>
      </div>
      <div class="form">
        <form action="#" class="form-inputs">
          <div class="names">
          <input type="text" id="firstname" placeholder="YOUR FIRST NAME" required>
          <input type="text" id="lastname" placeholder="YOUR SECOND NAME" required><br><br>
          </div>
          <input type="text" id="email" placeholder="YOUR EMAIL" required><br><br>
          <div class="named-form">
          <textarea name="" id="textarea" placeholder="YOUR MESSAGE" required></textarea>
          <input class="btn-button" id="submit" type="submit">
        </div>
        </form>
    </div>
  </div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
  const fname = document.getElementById('firstname');
  const lname = document.getElementById('lastname');
  const email = document.getElementById('email');
  const textarea = document.getElementById('textarea');
  const submitBtn = document.getElementById('submit'); // Select the submit button

  submitBtn.addEventListener('click', (e) => {
    e.preventDefault();

    let ebody = `
      <b>firstname:</b> ${fname.value}<br>
      <b>lastname:</b> ${lname.value}<br>
      <b>email:</b> ${email.value}<br>
      <b>textarea:</b> ${textarea.value}
    `;

    Email.send({
      SecureToken: "2e150db4-8872-4e34-9f49-c1ef1155e97b",
      To: 'nembassy265@gmail.com',
      From: "nembassy265@gmail.com",
      Subject: "An Email From " + email.value, // Added a space after "From"
      Body: ebody
    }).then(
      message => alert(message)
    );
  });
</script>
</body>
</html>