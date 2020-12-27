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
    <meta name="keywords" content="Topsoft inc,Topsoft ,Bestsoft comp,TP inc">
    <meta name="description" content="Topsoft is the best software company in Uganda we 
    develop diffrent kind of software like web Application,Web sites,
    Moblie apps and many more">
    <title>Home</title>
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
      <li class="nav-item active"><a href="index.php" class="text-dark"><i class="bi-people-fill"></i> Employee <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
      <a href="blog.php" class="text-light"><i class="bi-newspaper"></i> Blog</a>
      </li>
      <li class="nav-item">
        <a href="log.php" class="text-light"><i class="bi-wrench"></i> Dashbroad</a>
      </li>

    </ul>
  </div>
</nav>



</header>
<div class="loadx">
<div class="loader"><img src="img/top.png"></div><br/>

</div>
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
         
<div class="xx">

                    <table >
    <tr class="hd">
    <th>ID</th>
    <th>NAME</th>
    <th>STAFF STATUS</th>
    <th>DESIGNATION</th>
    <th>ROLE</th>
    <th>TIME</th>
    <th>VIEW</th>
    </tr>


<?php

// $sql = "SELECT  * FROM designation
//  INNER JOIN employees  ON designation.EmpoID=EmpoID.employees" ;

$sql ="SELECT  *,* FROM designation ,employees
 WHERE designation EmpoID=employees EmpoID" ;

// $sql="SELECT  * FROM employees"; 

if($res =$conn->query($sql)){


  while($row = mysqli_num_rows($res)) { 

    // $sq="SELECT  * FROM designation"; 
    // if($re =$conn->query($sq)){


    //   while($ro = mysqli_num_rows($re)) { 


    // $dt= $row['Start_dat'];
    
    // $yr=$dt- CURDATE();
    // echo $yr;
    ?>
 

<tr>
<td> <?php echo $row['EmpoID'];?> </td>
<td> <?php echo $row['Nam'];?> </td>
<td> <?php echo $row['Statu'];?> </td>
<td> <?php echo $ro['designat'];?> </td>
<td><?php echo $ro['roles'];?> </td>
<td> <?php echo $row['Start_dat '];?>

</td>
<td><button id="myBtn">Open Modal</button></td>
           
</tr>
                    </table>
            <div class="line"></div>



<div id="myModal" class="modal">

  <div class="modal-content">
    <span class="close">&times;</span>
    <i class="bi-person-circle bg"></i> <?php echo $row['Nam'];?> 
    <p>Roles:<u> <?php echo $ro['roles'] ;?></u>
     DESIGNATION:<u> <?php echo $ro['designat'];?> <u></p>
  </div>

</div> 


</div>
<?php
    }
  }


?>   



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<script type="text/javascript" src="js/top.js"></script>
<script type="text/javascript">
   


    </script>
</body>
</html>