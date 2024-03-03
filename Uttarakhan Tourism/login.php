<?php
 
 

 session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: adminp.php");
    exit;
}
require_once "db.php";
?>


 

<?php
if(isset($_POST['submit']))
{
   
    $username=$_POST['username'];
    $password=$_POST['password'];
    $qry="SELECT * FROM `login` WHERE `username`='$username' AND `password`='$password'";
    $run=mysqli_query($conn,$qry);
    $row=mysqli_num_rows($run);
    if($row<1)
    {
        ?>
        <script>
        alert('Username or Password Not Match');
        window.open('login.php','_self');
        </script>
       <?php
    }
    else
    {
         
          session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: adminp.php");
                            
    }
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>login page</title>
  <style type="text/css">
    body{
      margin:0px;
      padding: 0px;
      width: 100%;
         background-color:#F0F2F5;
    }
           main  .log_page{
           display: flex;
           justify-content: center;
           align-items: center;
           
           width: 100%;
           height: 657px;

         }
          .log_page form{
          width: 40%;
          height: 300px;
          background: white;
          border-radius: 10px;
          font-family: sans-serif;
          display: flex;
          flex-direction: column;
       align-items: center;
         box-shadow: 0 0 30px 0 #D7DBDD;


         }
         .log_page form label input{
      height: 30px; 
      width: 300px;
  margin-top: 40px;
              border-radius: 4px;    
             }

         .log_page form .log{
  background: red;
  border-style:hidden;
  cursor: pointer;
  border-radius: 7px;
  font-weight: bold;
  color: #fff;
  font-size: 20px;
  width: 160px;
  height: 40px;
}
.log_page form .log:hover{
  background: blue;
}

  </style>
</head>
<body>
<main>
  <div class="log_page">
    <form method="post" action="" >
      <label><input type="text" name="username" placeholder="Username"></label> 
 
      <label><input type="password"  name="password" placeholder="password"  ></label>
      <br><br>
     <label><input type="submit"  name="submit" class="log" value="Log In">
      </label> 
    </form>
  </div>
</main>
</body>
</html>