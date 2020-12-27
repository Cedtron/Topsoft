<?php
$servename="localhost";
$user = "root";
$password = ""; 
$database = "topsoft";
$conn = new mysqli($servename, $user, $password, $database);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Topsoft blog Edit</title>
    <link href="img/favicon.ico" rel="shortcut icon"/>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/mx.css">
    <link rel="stylesheet" href="css/topsoft.css">
</head>
<body>

<header class="sticky-top">

<nav class="navbar navbar-expand-lg navbar-light cl">
<img src="img/top.png">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item"><a href="index.php" class="text-light"><i class="bi-people-fill"></i> Employee <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
      <a href="blog.php" class="text-dark"><i class="bi-newspaper"></i> Blog</a>
      </li>
      <li class="nav-item">
        <a href="log.php" class="text-light"><i class="bi-wrench"></i> Dashbroad</a>
      </li>

    </ul>
  </div>
</nav>



</header>

<div class="wrapper">
        <!-- Sidebar  -->
        <div id="sidebar">
            <div class="sidebar-header">
                <h3>TOP SOFT INC</h3>
            </div>
<div class="about">
Topsoft inc is one best software develop companies in Uganda<br/>
We are located in Kampala.<br/>
We begun on 1st Jan 2012. We develop Websites and web apps,<br/>
though coding, We also make mobile apps, computer programs and many more.


</div>
           

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="topsoft.sql" class="download">Download database</a>
                </li>
              
            </ul>
</div>

        <!-- Page Content  -->
        <div id="content">
        <h3>Edit Blog</h3>
        <?php
        
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
        
        ?>
 <div class="bone">
  
     <form  action="<?php $_SERVER["PHP_SELF"]?>" method="POST" enctype="multipart/form-data">

<textarea class="form-control" name="bl" id="FormControlTextarea1" rows="3" type='text' placeholder="Write your blog here...."></textarea>
<br/>
<div class="mb-3">
  <label for="formFile" class="form-label">Upload a image</label>
  <input class="form-control" type="file" id="formFile" name="blog">
</div>

<div class="mb-3">
  <label for="formFile" class="form-label">Upload a image</label>
  <input class="form-control" type="file" id="formFile" name="blog2">
</div>
<input class="btn btn-primary" type="submit" value="Submit">
     </form>
 </div>
<?php
if(isset($_POST['bl'],$_POST['blog'],$_POST['blog2'])){
  

$target_dir = "conn/img/";
$target_file = $target_dir . basename($_FILES["blog"]["name"]);
$target_file2 = $target_dir . basename($_FILES["blog2"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
If(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    If($check !== false) {
        Echo "File is an image – " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        Echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
If ((file_exists($target_file)) && (file_exists($target_file2))) {
    Echo "Sorry, file already exists.";
    $uploadOk = 0;
}
 //Check file size
else If (($_FILES["blog"]["size"] > 50000000) && ($_FILES["blog2"]["size"] > 50000000) ){
    Echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
else If(($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) && ($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
&& $imageFileType2 != "gif" )) {
    Echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
else If ($uploadOk == 0) {
    Echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    If ((move_uploaded_file($_FILES["blog"]["tmp_name"], $target_file)) && (move_uploaded_file($_FILES["blog2"]["tmp_name"], $target_file2)) ){


// $nt=$_POST['det'];
//  $nx= htmlentities($nt);
$nx="test";
 $blog=$_POST['bl'];
 $bg= htmlentities($blog);
$image=$_FILES["blog"]["name"]; 
              $img=$_FILES["blog"]["name"];
$pic=$_FILES["blog2"]["name"]; 
              $pix=$_FILES["blog2"]["name"];

              $sql = "UPDATE `blog` SET
              `blog`='$bg' ,`pic` = '$pix' ,`pic2` = '$pix' WHERE `Id` = ";              

$res= mysqli_query($conn,$sql);
}
else
{
  echo "error in updating";
}
}

}}
else{
echo "<img src='img/exx.jpg' class='col-12'>
<script>alert('Wrong name please sign again');</script>";
}
}}

 

?>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/top.js"></script>

<script type="text/javascript">
   


    </script>
</body>
</html>