<!DOCTYPE html>
<html lang="en">
<head>
  <script type="text/javascript">
  function validateForm()
  {
    var a=document.forms["reg"]["enumber"].value;
    var b=document.forms["reg"]["password"].value;

    if ((a==null || a=="") && (b==null || b==""))
    {
      alert("All Field must be filled out");
      return false;
    }
    if (a==null || a=="")
    {
      alert("Employee number must be filled out");
      return false;
    }
    if (b==null || b=="")
    {
      alert("Password must be filled out");
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
              height: 50vh;
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
    height: 250px;
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
  <h1>SIGN IN</h1> 
   <form name="reg" action="login_submit.php" onsubmit="return validateForm()" method="post">
     <input type="text"  name="enumber" placeholder="Employee Number"  /><br/>
     <br></br>
     <input type="password"  name="password" placeholder="Password"  /><br/>
     <br></br>
     <button class="button">SIGN IN</button>
     <br></br>
      <a href="index.php">Not yet registered? Sign Up Now...</a>
    <div class="vl"></div>
  </form>
</body>
</html>