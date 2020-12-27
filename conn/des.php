<!DOCTYPE html>
<html lang="en">
  <head>    <link rel="stylesheet" href="../css/topsoft.css"></head>
<body>
    <?php
include_once 'dbconn.php';

$max=$_POST['nam'];


   
$des=$_POST['des'];
$bl= htmlentities($des);

$role=$_POST['role'];
$bo= htmlentities($role);


$sqk = "SELECT  * FROM employees WHERE Nam='$max';" ;
$result = mysqli_query($conn, $sqk);


if (mysqli_num_rows($result) >0) {

  while($row = mysqli_fetch_assoc($result)) {

$eds=$row['EmpoID'];
global $eds;


$sql = "INSERT INTO designation (EmpoID ,designat ,roles )
VALUES ('$eds','$bl','$bo');
";
$raq= mysqli_query($conn,$sql);

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

  }
 
}




mysqli_close($conn);
  ?>


</body>
</html>