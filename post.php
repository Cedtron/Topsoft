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

    <title>Topsoft blog</title>
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
          <?php
        $nam=$_GET['nam'];
 
   ?>
<div id="dude">  <?php echo $nam ;?>
</div>

 <div class="bone">
     <form  action="conn/pos.php" method="POST" enctype="multipart/form-data">
     <div class="mb-3">
  <input class="form-control" type="text" id="nax" name="nam" readonly>
</div>
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
<a class="btn btn-primary " href="post.php" role="button">Post</a>
<button>post</button>

<!-- <a href="conn/post.php?id=<?php echo $row['Id'];?>" class="btn btn-outline-primary" role="button">Post</a> -->
     </form>
 </div>




<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/top.js"></script>

<script type="text/javascript">
var namy=document.getElementById("dude").textContent;
if(namy==null){
  document.getElementById("nax").value= "User";
} else{
   document.getElementById("nax").value= namy;
}

    </script>
</body>
</html>