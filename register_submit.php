<?php

session_start();

include('connection.php');

  $ename = trim($_POST['ename']);
  $enumber = trim($_POST['enumber']);
  $password = trim($_POST['password']);
  $desig = trim($_POST['desig']);
  $serviceline = trim($_POST['serviceline']);
  $role = trim($_POST['role']);
 
mysqli_query($bd, "INSERT INTO empinfo(ename, enumber, password, desig, serviceline, role)VALUES('$ename','$enumber', '$password', '$desig', '$serviceline', '$role')");

$val=mysqli_insert_id($bd);
$x=0;

while($val>0 && $x==0){
	echo "<script>window.open('login.php', '_self')</script>";
	$x++;
}  
echo "<script>window.open('index.php', '_self')</script>";

mysqli_close($bd);

?>
