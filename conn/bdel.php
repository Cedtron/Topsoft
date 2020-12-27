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
    $nam=$_GET['nam'];
 
    $dt = "SELECT  * FROM employees WHERE Nam='$nam';" ;
    $res = mysqli_query($conn, $dt);
    $rescheck = mysqli_num_rows($res);
    
    if ( $rescheck > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
//   echo "You ar called".$row['Nam']."and your status z ".$row['Statu'];
$namx= $row['Nam'];
// echo $namx
if ($namx==$nam){
    $del=" DELETE FROM blog WHERE Id='$Id' ";

     $res= mysqli_query($conn,$del);

if($res){
    mysqli_close($conn);

    echo"<div style='font-family:arial;'>
    <a class='btn btn-primary link' role='button' href='../blog.php'>Click to contune</a>
    <script>alert('Data was deleted successly');</script>
    </div>";

     exit;
    }
    else{

        echo"<div style='font-family:arial;'>
        <img src='../img/er.jpg' style='width:100%;'>
        <a class='btn btn-primary link' role='button' href='../blog.php'>Retry</a>
        <script>alert('Error in deleting please try again');</script>
        </div>"; }
      }  else
        {
echo"<img src='../img/er.jpg' style='width:100%;'> <div class='erro'>Failed to delete</div>";

        }

       
    } }
    echo"<img src='../img/er.jpg' style='width:100%;'> <div class='erro'>Failed to delete</div>";

?>

</body>
</html>
