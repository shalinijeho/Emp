<!DOCTYPE html>
<html lang="en">
<head>
<title> Sign Up </title>
  <script type="text/javascript">
  function validateForm()
  {
    var a=document.forms["reg"]["ename"].value;
    var b=document.forms["reg"]["enumber"].value;
    var c=document.forms["reg"]["password"].value;
    var d=document.forms["reg"]["desig"].value;
    var e=document.forms["reg"]["serviceline"].value;
    var f=document.forms["reg"]["role"].value;
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
    {
      alert("All Field must be filled out");
      document.getElementById("ename").focus();
      return false;
    }
    if (a==null || a=="")
    {
      alert("Employee name must be filled out");
      document.getElementById("ename").focus();
      return false;
    }
    if( /[^a-zA-Z\-\/]/.test( a ) )
    {
      alert("Please Enter Only Characters");
      document.getElementById("ename").focus();
      return false;
    }
    if (b==null || b=="")
    {
      alert("Employee number must be filled out");
      document.getElementById("enumber").focus();
      return false;
    }
    if( /[^a-zA-Z0-9\-\/]/.test( a ) )
    {
      alert("Please Enter Only Characters");
      document.getElementById("enumber").focus();
      return false;
    }
    if (c==null || c=="")
    {
      alert("Password must be filled out");
      document.getElementById("password").focus();
      return false;
    }
    if(password.length<6)
    {
      alert("Password must be at least 6 characters long");
      document.getElementById("password").focus();
      return false;
    }
    if (d==null || d=="")
    {
      alert("Designation must be filled out");
      return false;
    }
    if (e==null || e=="")
    {
      alert("Service Line must be filled out");
      return false;
    }
    if (f==null || f=="")
    {
      alert("Role must be filled out");
      return false;
    }	
  }
</script>
<link rel = "stylesheet"
   type = "text/css"
   href = "SignUp.css" />
   <style type="text/css">
    input, textarea { color: #C0C0C0; }
    div {    
    box-shadow: 0.01px 2px 7px grey;
    
    
}
input{

}
   .container {
    border-style:solid ;
   border-bottom: 1px solid silver;
   border-left: 1px solid silver;
   border-right: 1px solid silver ;
   border-top:1px solid silver ; 
   
              width: 25%;  
              height: 90vh;
        margin-left: 250px; 
         
       
}

.vl {
   background-color: #000;
    bottom: 0;
    left: 535px;
    position: fixed;
    transform: transitionX(-50%);
    top: 25px;

    width: 4px;
    height: 450px;
}

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    font-size: 14px;
    color: white;
    padding: 12px 45px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    cursor: pointer;
    width: 150px;
       box-shadow: 0px 0px 10px 0px #888888;
}
</style>
<meta charset="ISO-8859-1">      
</head>
<body>
 <div class="container" align="center" >
  <h1>SIGN UP</h1>
   <form name="reg" action="register_submit.php" onsubmit="return validateForm()" method="post">
     <div align="center">
      <?php
 		if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
	    header('Location: login.php');
          }  
       ?>  
     </div>
     <input type="text" name="ename" placeholder="Employee Name" /><br/>
     <br></br>
     <input type="text"  name="enumber" placeholder="Employee Number"  /><br/>
     <br></br>
     <input type="password"  name="password" placeholder="Password"  /><br/>
     <br></br><input type="text"  name="desig" placeholder="Designation"  /><br/>
     <br></br><input type="text"  name="serviceline" placeholder="Service Line"  /><br/>
     <br></br><input type="text"  name="role" placeholder="Role"  /><br/>
     <br></br>
     <button class="button">SIGN UP</button>
	 <br></br>
	 <a href="login.php">Already registered? Sign In Here...</a>
     <div class="vl"></div>
   </form>
  </div>
 </body>
</html>

