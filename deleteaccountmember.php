<?php
require "connection.php";
$id=$_GET['id'];
$sql=mysqli_query($con,"DELETE FROM `user` WHERE id='$id'");
header('location:account.php');
?>