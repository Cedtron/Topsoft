<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/topsoft.css">
</head>
<body>
<?php
include_once 'dbconn.php';

    $Id=$_GET['id'];
    $del=" DELETE FROM designation WHERE Id='$Id' ";

     $res= mysqli_query($conn,$del);

if($res){
    mysqli_close($conn);

    echo"<div style='font-family:arial;'>
    <a class='btn btn-primary link' role='button' href='../dashb.php'>Click to contune</a>
    <script>alert('Data was delleted successly');</script>
    </div>";

     header("Location: ./gald.php?signup=success in deleting");
     exit;
    }
    else{

        echo"<div style='font-family:arial;'>
        <img src='../img/er.jpg' class='col-12'>
        <a class='btn btn-primary link' role='button' href='../dashb.php'>Retry</a>
        <script>alert('Error in deleting please try again');</script>
        </div>";

       
    }
?>

</body>
</html>

