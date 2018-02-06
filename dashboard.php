<?php
session_start();
include('connection.php');
$perpage = 10;
$start=0;
if (isset($_GET['page'])){ $curpage  = $_GET['page']; } else { $curpage=1; };
$start = ($curpage-1)*$perpage;
$res= mysqli_query($bd,"select * from empinfo LIMIT $start,10");
?>
<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet"
   type = "text/css"
   href = "SignUp.css" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<style>
              table {
                  border-collapse: collapse;
                  width: 78%;
                  align-content: center;
                  margin-top:20px;
                  margin-right:48px;
                            
              }        
              th, td {
                  text-align: center;
                  padding: 5px;
              }
            div {    
    box-shadow: 0.01px 2px 7px grey;
}
              tr:nth-child(even){background-color: #f2f2f2}
              
              th {
                  background-color: #000000;
                  color: white;
              }

              .container {
           border-style:solid ;
           border-bottom: 1px solid silver;
           border-left: 1px solid silver;
                 border-right: 1px solid silver ;
                 border-top:1px solid silver ; 
   
              width: 75%;  
              height: 90vh;
        margin-left: 20px; 
         
       
}


 h1 {
      font-family: Arial; text-shadow: 0px 1px silver ;
    left: 100px;
    position: absolute;
}
h2 {
       font-family: Arial;
     text-shadow: 0px 1px silver ; 
     left: 100px;   
     
} 

button {
    background-color: #008CBA; 
    border: none;
    font-size: 14px;
    color: white;
       padding: 5px 5px; 
    text-align: center;
    cursor: pointer;
    width: 100px;
       box-shadow: 0px 0px 10px 0px #888888;
       
       
}

#br{
position:absolute;
top:100px;
left: 750px;
}

#br1{
position:absolute;
top:100px;
left: 100px;
}

hr {
  height: 10px;
  border: 0;
  box-shadow: 0 10px 5px -10px #8c8c8c inset;
  margin-top: 1.5em;
}

/* Pagination links */
.pagination{
	display:inline-block;
	position:absolute;
	top: 490px;
	align-content:center;
	left:490px;
	
}

.pagination a {
    color: black;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
}

/* Style the active/current link */
.pagination a.active {
    background-color: #4CAF50;
    color: white;
}

/* Add a grey background color on mouse-over */
.pagination a:hover:not(.active) {background-color: #ddd;}

</style>
</head>
<body>
              <div class="container" align="center" >
            <h1>                          
                            <b><font style="" size="3" color="black">DASHBOARD</font>                     
                            </b>
                           
              </h1>    
                    <br></br>
                  <hr width="85%" >
                  
                
             <!--   style="float: right;" -->
              <h2>
              
            <b><font style="" id="br1" size="2" color="#101010">EMPLOYEE INFORMATION</font></b>
                            
                  <button onclick="location.href = 'index.php';" id="br" class="button" >Sign Out
				  </button>           
              </h2>
              <br></br>
              
              <form action="index.php" method="post">
                             <table >               
                                           <tr>
                                           <th>SERIAL</th>
                                           <th>EMPLOYEE ID</th>
                                           <th>EMPLOYEE NAME</th>
                                           <th>DESIGNATION</th>
                                           <th>SERVICE LINE</th>
                                           <th>ROLE</th>
                                           </tr>                                                
                                           <tr>
                                           <th>NO.</th>
                                           <th></th>
                                           <th></th>
                                           <th></th>
                                           <th></th>
                                           <th></th>
                                           </tr>     

	<?php
          while( $row = mysqli_fetch_assoc($res)){
            echo "<tr>";
            echo "<td>".$row['sno']."</td>";
            echo "<td>".$row['enumber']."</td>";
            echo "<td>".$row['ename']."</td>";
            echo "<td>".$row['desig']."</td>";
            echo "<td>".$row['serviceline']."</td>";
            echo "<td>".$row['role']."</td>" ;
            echo "</tr>";
          }
        ?>				
							</table>
	<?php  
		$sql = "SELECT COUNT(sno) FROM empinfo";  
		$rs_result = mysqli_query($bd,$sql);  
		$row = mysqli_fetch_row($rs_result);  
		$total_records = $row[0];  
		$total_pages = ceil($total_records / $perpage);  
		$pagLink = "<div align = 'bottom' class='pagination'>";  
		for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<a href='dashboard.php?page=".$i."'>".$i."</a>";  
};  
echo $pagLink . "</div>";  
?>
</form>
</div>
</body>
</html>