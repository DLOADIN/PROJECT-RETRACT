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
  <title>MEMBERS PAGE</title>
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
          <h1>MEMBERS AREA</h1>
        </div>
        <div class="user-info">
          <h1 class="my-account-header"></h1>
        <img src="./images/Rwanda 🇷🇼.jpg" alt="">
        </div>
      </div>

    <div class="tabular-wrapper">
      <div class="header-title">
        <h3>EMAIL US</h3>
      </div>
    
    <div class="table-container">
      <table>
        <thead>
          <tr>
            
            <th>FULL NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>CONFIRMED PASSWORD</th>
            <th>PASSPORT NUMBER</th>
            <th>MODIFY</th>
            <th>DELETE</th>
          </tr>
          <tbody>
            <?php
            $sql=mysqli_query($con,"SELECT * FROM user");
            $row=mysqli_num_rows($sql);
            if($row){
              while($row=mysqli_fetch_array($sql)){
            ?>
          <tr>
            
            <td><?php echo $row['u_name']?></td>
            <td><?php echo $row['u_email']?></td>
            <td><?php echo $row['u_password']?></td>
            <td><?php echo $row['u_passcodes']?></td>
            <td><?php echo $row['u_passportnumber']?></td>
            <td>
              <button>
              <a href="updateaccountmember.php?id=<?php echo $row['id']?>">
              UPDATE</a></button>
            </td>
            <td>
              <button onclick="alert('Are You Really Sure You Want To Delete This')"> <a href="deleteaccountmember.php?id=<?php echo $row['id']?>">DELETE</a></button>
            </td>
            <?php
            }
          }
            ?>
          </tr></tbody>
        </thead>
      </table>
    </div></div>
  </div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>