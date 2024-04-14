<?php
  session_start();
  $con=mysqli_connect('localhost','root','','embassy');

  if (!$con){
  die (mysqli_error($con));
}
?>