<!DOCTYPE html>
<html>
    <head>    <link rel="stylesheet" href="../css/topsoft.css"></head>
<body>

<?php
include_once 'dbconn.php';


$target_dir = "img/";
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
$nx=$_POST['nam'];
 $blog=$_POST['bl'];
 $bg= htmlentities($blog);
$image=$_FILES["blog"]["name"]; 
              $img="img/".$_FILES["blog"]["name"];
$pic=$_FILES["blog2"]["name"]; 
              $pix="img/".$_FILES["blog2"]["name"];


    $sql = "INSERT INTO blog (nam,blog,pic,pic2,tim)
            VALUES ('$nx','$bg','$img','$pix',CURDATE())";

if ($conn->query($sql) === TRUE) {
    echo"<div style='font-family:arial;'>
<a class='btn btn-primary link' role='button' href='../blog.php'>Click to contune</a>
<script>alert('Your post has beeen uploaded success fuly');</script>
</div>";

  } else {
    echo"<div style='font-family:arial;'>
    <img src='../img/er.jpg' class='col-12'>
    <a class='btn btn-primary link' role='button' href='../post.php'>Retry</a>
     " . $sql . "<br>" . $conn->error;"
    <script>alert('Sorry, there was an error uploading your file.');</script>
    </div>";
  }
  
  $conn->close();




    } else {

        echo"<div style='font-family:arial;'>
        <img src='../img/er.jpg' class='col-12'>
        <a class='btn btn-primary link' role='button' href='../post.php'>Click to contune</a>
        " . $sql . "<br/>" . $conn->error;"
        <script>alert('Sorry, there was an error uploading your file');</script>
        </div>";
        
    }
}



?>


</body>
</html>