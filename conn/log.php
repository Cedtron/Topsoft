
<html>
<head>
	<title></title>
</head>
<body>
	<?php
$usr=$_GET['user'];
$pasd=$_GET['pass'];

$use=htmlentities($usr);
 $pas=htmlentities($pasd);

$us="topsoft";
$pa="top";

// echo $usr ."and ".$pasd;

if ($use==$us && $pas==$pa) {
	header("Location: ../dashb.php?success");
}
else
{
	header("Location: ../index.php?Error");}

?>
</body>
</html>