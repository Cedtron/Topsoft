<!DOCTYPE html>
<html lang="en">
  <head>    <link rel="stylesheet" href="../css/topsoft.css"></head>
<head>
   
</head>
<body>

<?php

include_once 'dbconn.php';

$nam=$_POST['nam'];
$na= htmlentities($nam);
$emp=$_POST['sat'];
$em= htmlentities($emp);
$stt=$_POST['stat'];
$st= htmlentities($stt);

$sdat=$_POST['date'];



$sql = "INSERT INTO employees (Nam, Emplo_status, Statu, Start_dat )
VALUES ('$na','$em','$st','$sdat')";

if ($conn->query($sql) === TRUE) {
    echo"<div style='font-family:arial;'>
<a class='btn btn-primary link' role='button' href='../dashb.php'>Click to contune</a>
<script>alert('Your post has beeen uploaded success fuly');</script>
</div>";

  } else {
    echo"<div style='font-family:arial;'>
    <img src='../img/er.jpg' class='col-12'>
    <a class='btn btn-primary link' role='button' href='../dashb.php'>Retry</a>
     " . $sql . "<br>" . $conn->error;"
    <script>alert('Sorry, there was an error uploading your file.');</script>
    </div>";
  }
  
  $conn->close();


?>    
</body>
</html>