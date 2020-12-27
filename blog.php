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
                    <a href=href="topsoft.sql" class="download">Download database</a>
                </li>
              
            </ul>
</div>

        <!-- Page Content  -->
        <div id="content">


          
<div class="xx ck">
<div class="ct"><i><b>
        <button id="myBtn" class="btn btn-warning">Sign In</button>
        <div id="tym"></div></b><i>
</div>

<div id="myModal" class="modal">

  <div class="modall">
    <span class="close">&times;</span>

    <!-- <img scr="img/pp.svg" class="mb-4 lg"> -->
    <i class="bi-person-circle bg"></i>
    <p>Enter your name</p>
    <input type="text" class="inpu" id="nam"><br/>
    <button class="btn btn-danger" onclick="namx();">Sign</button>
  </div>

</div> 

        <div class="container">
        <div class='row'> 



<?php
 $dt = "SELECT * FROM blog;" ;
 $res = mysqli_query($conn, $dt);
 $rescheck = mysqli_num_rows($res);

if ( $rescheck > 0) {
   while ($row = mysqli_fetch_assoc($res)) {
     $send=$row['Id'];
       echo "
       
       <div class='blog'>
       <div id='id'>".$row['Id']."</div>
      <div class='bheader'> <i class='bi-person-circle'></i> <div id='nax'>".$row['nam']."</div></div><br/>
      <div class='container'>
      <div class='row'> 

      <div class='col'>
     
      <div class='gg'><img src='conn/".$row['pic']."'>
      </div> 
       
    </div>
         <div class='col'>
         <div class='cxt'>".$row['blog']."</div><br/>
        </div>
     </div>
       
       <div class='bfooter'>
       <small>".$row['tim']."</small>"?>

<a href="view.php?id=<?php echo $send;?>" class="btn btn-outline-success" role="button"><i class="bi-eye-fill"></i> View</a>
   
<a href="view.php?id=<?php echo $send;?>" class="btn btn-outline-primary" role="button"><i class="bi-chat-right-dots-fill"></i>Comment</a>
<a class="btn btn-outline-info" id="edit" role="button"><i class="bi-pencil-square"></i>Edit</a>
<a  class="btn btn-outline-danger" id="del" onclick="del()" role="button"><i class="bi-trash"></i>Delete</a>
    <?php echo " 
    </div>
       </div></div>
       <div class='line'></div> <br/>";
   }
}
$conn->close();

?>
        </div>
</div></div>

<a class="btn btn-primary postbt" id="post" role="button">Post</a>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/top.js"></script>

<script type="text/javascript">
   


    </script>
</body>
</html>