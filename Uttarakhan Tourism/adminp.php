<?php 
include 'db.php';
session_start();


 if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location:login.php");
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>PASSENGER DETAILS</title>
	<style type="text/css">
		body{
			margin:0px;
			padding: 0px;
			width: 100%;
			height: 100%;
			
		}
     nav .nav_c{
  width: 100%;
  height: 70px;
  background:#B77FD1;
  display: flex;
  align-items:center;
  justify-content: right; 
 
}
nav .nav_c ul li {
   margin: 0 10px;
    margin-right: 30px

}
nav li {
  display:inline-block;
}
 nav .nav_c ul li a{
     list-style: none;
    text-decoration: none;
    font-family: sans-serif;
    color: #fff;
    font-weight: bold;
}

		.can{
			display: flex;
			justify-content: center;
			flex-direction: column;
			align-items: center;
		}
		h1{
			color: red;
			text-align: center;
			font-family: sans-serif;
		}

		table{
  	border-collapse:collapse;
    width: 80%;
    text-align: center;
   
    
  }

th{
  	color:white;
  	background: red;

  }
   td, th  {
  	border:2px solid #dddddd;
   
  	height: 30px;
  		font-family: sans-serif;

  } 

  

  
  tr:nth-child(odd){
  	background-color: yellow;
  }
	</style>
</head>
<body>
  <nav>
     <div class="nav_c">
    <ul> 
     
    <li><a href="logout.php">Log Out</a></li>
    </ul> 
    </div>
  </nav>
	<main>
		<div class="can">
			 
			<h1>PASSENGER DETAILS</h1>

             <table>
             	<tr>
             		<th>S.no</th>
             		<th>NAME</th>
             		<th>CONTACT</th>
             		<th>EMAIL</th>
             		<th>ARRIVALS DATE</th>
             		 <th>LEAVING DATE</th>
                  <th>LOCATION</th>
                <th>PASSENGER</th>
                 <th>PRICE</th>
             	</tr>
          
			 	<?php 
              $i=1;
              $sql ="SELECT  * FROM  form;";
              $result =mysqli_query($conn,$sql);
              
              	while ($row = mysqli_fetch_assoc($result)){
              	?>	
              	  <tr>
        <td>  <?php echo $i++   ?>   </td>
        <td> <?php echo $row['name']   ?></td>
         <td><?php echo  $row['contact']   ?></td>
         <td><?php echo $row['email']    ?></td>
         <td><?php echo $row['arrivals']    ?></td>
         <td> <?php echo $row['leaving']    ?></td>
          <td><?php echo $row['locs']    ?></td>
         <td><?php echo $row['pass1']    ?></td>
         <td> <?php echo $row['price']    ?></td>
       </tr>
         
           <?php	 
              }
          

			  ?>
			 
  
			           
   	
			</table>
		</div>


<div class="can">
<h1>CONTACT DETAILS</h1>

             <table>
              <tr>
                <th>S.no</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>NUMBER</th>
                 <th>SUBJECT</th>
                  <th>MESSAGE</th>
                 
              </tr>
          
        <?php 
              $i=1;
              $sql ="SELECT  * FROM  contact;";
              $result =mysqli_query($conn,$sql);
              
                while ($row = mysqli_fetch_assoc($result)){
                ?>  
                  <tr>
        <td>  <?php echo $i++   ?>   </td>
        <td> <?php echo $row['name']   ?></td>
          <td><?php echo $row['email']    ?></td>
         <td><?php echo $row['number']    ?></td>
         <td> <?php echo $row['subject']    ?></td>
          <td><?php echo $row['msg']    ?></td>
          
       </tr>
         
           <?php   
              }
          

        ?>
       
  
                 
    
      </table>
    </div>
	</main>

</body>
</html>