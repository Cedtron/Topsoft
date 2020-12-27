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

    <title>Dashboard</title>
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
      <a href="blog.php" class="text-light"><i class="bi-newspaper"></i> Blog</a>
      </li>
      <li class="nav-item">
        <a href="log.php" class="text-dark"><i class="bi-wrench"></i> Dashbroad</a>
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
                    <a href="topsoft.sql"class="download">Download database</a>
                </li>
              
            </ul>
</div>

        <!-- Page Content  -->
        <div id="content">
         
        <div class="container">
  <div class="row xx">
    <div class="col-md">
      <div class="emp">
<form action="conn/emp.php" method="POST">
<label>Insert data in the Employee Database</label><br/>
<input class="inpu" placeholder="name...." name="nam"><br/><br/>

<div class="input-group mb-3">

<select class="form-select" aria-label="Default select example" name="sat">
  <option selected>employee-status...</option>
    <option value="Employed">Employed</option>
    <option value="Unemployed">Unemployed</option>
</select>

</div>

<div class="input-group mb-3">
  
  <select class="form-select" aria-label="Default select" name="stat">
  <option selected>Choose the status..</option>
  <option value="Active">Active</option>
    <option value="Left">Left</option>
    <option value="Pending">Pending</option>
</select>

</div>

 <input type="date" class="inpu" name="date" id="dp"
 />

<br/>
<button class="btn btn-primary" type="submit">Submit</button>

</form>

      </div><br/>
    </div>
    <div class="col-md">
     
<!-- Designation -->

    <div class="dec">
<form action="conn/des.php" method="POST">
<label>Insert data in the designation Database</label><br/>
<input class="inpu" placeholder="name...." name="nam"><br/><br/>
<input class="inpu" placeholder="Designation...." name="des"><br/><br/>

<div class="input-group mb-3">
  <div class="input-group-prepend">

  <select class="form-select" aria-label="Default select example" name="role">
  <option selected>Choose a role...</option>
    <option value="Admin">Admin</option>
    <option value="Editor">Editor</option>
    <option value="Viewer">Viewer</option>
</select>

  </div>
 
</div>

<button class="btn btn-primary" type="submit">Submit</button>

</form>

      </div>

    </div>
    
  </div>
<div class="row">
<h3>Employee table control center</h3>
<div class="dasht heg">
<table >
    <tr class="hd">
    <th>ID</th>
    <th>Name</th>
    <th>Employee Status</th>
    <th>Status</th>
    <th>Time</th>
    <th>Del</th>
    </tr>
<?php
$dt = "SELECT  * FROM employees;" ;
$res = mysqli_query($conn, $dt);
$rescheck = mysqli_num_rows($res);

if ( $rescheck > 0) {
while ($row = mysqli_fetch_assoc($res)) {



    ?>

<tr>
<td><?php echo $row['EmpoID'] ;?></td>
<td><?php echo $row['Nam'];?></td>
<td><?php echo $row['Emplo_status'];?></td>
<td><?php echo $row['Statu'] ;?></td>
<td><?php echo $row['Start_dat'] ;?></td>
<td><button><a href="conn/del.php?id=<?php echo $row['EmpoID'];?>">Delete</a></button>
</td>
<?php
}}
?>

</table>
</div>
</div>


<div class="row">
<h3>Designation table control center</h3>
<div class="dasht heg">

<table >
    <tr class="hd">
    <th>ID</th>
    <th>EmpoID</th>
    <th>Designation</th>
    <th>Role</th>
    <th>Del</th>
    </tr>
<?php
$dt = "SELECT  * FROM designation;" ;

$resu = mysqli_query($conn, $dt);

if (mysqli_num_rows($resu) >0) {

  while($rox= mysqli_fetch_assoc($resu)) { 

    ?>

<tr>
<td><?php echo $rox['Id'] ;?></td>
<td><?php echo $rox['EmpoID'];?></td>
<td><?php echo $rox['designat'];?></td>
<td><?php echo $rox['roles'] ;?></td>
<td><button><a href="conn/delo.php?id=<?php echo $rox['Id'];?>">Delete</a></button>
</td>
<?php
}}

?>
</tr>
</table>

</div>

</div>

<div class="row">
<h3>Blog control center</h3>
<div class="dasht heg">

<table >
    <tr class="hd">
    <th>ID</th>
    <th>Name
    </th>
    <th>Blog
    </th>
    <th>Image</th>
    <th>Imagem 2</th>
    <th>Del</th>
    </tr>
<?php
$bt = "SELECT  * FROM blog;" ;

$rsu = mysqli_query($conn, $bt);

if (mysqli_num_rows($rsu) >0) {

  while($rox= mysqli_fetch_assoc($rsu)) { 

    ?>

<tr>
<td><?php echo $rox['Id'] ;?></td>
<td><?php echo $rox['nam'] ;?></td>
<td><?php echo $rox['blog'];?></td>
<td><?php echo $rox['pic'];?></td>
<td><?php echo $rox['pic2'] ;?></td>
<td><button><a href="conn/boy.php?id=<?php echo $rox['Id'];?>">Delete</a></button>
</td>
<?php
}}
$conn->close();
?>
</tr>
</table>

</div>

</div>



</div>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/top.js"></script>

<script type="text/javascript">
   


    </script>
</body>
</html>