<?php

session_start();
 
include('connection.php');

  $enumber = trim($_POST['enumber']);
  $password = trim($_POST['password']);

   $res=mysqli_query($bd,"SELECT sno, enumber, ename, password,desig, serviceline, role FROM empinfo WHERE enumber='$enumber'");
   $row=mysqli_fetch_array($res);
   $count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
   if( $count == 1 && $row['password']==$password ) {
    $_SESSION['user'] = $row['sno'];
    
    echo "<script>window.open('dashboard.php', '_self')</script>";
   } else {
	echo "<script>alert('Incorrect Credentials, Try again...'),
		 window.open('login.php', '_self')</script>";
   }
  
 
mysqli_close($bd);

?>