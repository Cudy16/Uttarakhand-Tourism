<?php 

include 'db.php';
session_start();

if(isset($_POST['Submit'])){{
   

 $name =$_POST['name'];
  $contact =$_POST['contact'];
  $email =$_POST['email'];
 
 
    $arrivals =$_POST['arrivals'];
  $leaving =$_POST['leaving'];
  $pass1=$_POST['pass1'];
  $price =$_POST['price'];
  $locs =$_POST['locs'];

}


  $sql =  "insert into  form (name,contact,email, arrivals,leaving,locs,pass1,price) values('$name','$contact','$email', '$arrivals','$leaving','$locs','$pass1','$price')";

  $run =mysqli_query($conn,$sql);

    if($run==1){
        ?>
         <script>
        alert('submited successfully');
 window.open('index.php','_self');        </script>
        <?php 

      }else{
         ?>
      
        <script>
        alert('Unable to submit data . Please try again');
             
        </script>
        <?php
      }

}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive tour and travel agency website design tutorial</title>


<style type="text/css">
    
    .loc{
      
  border-color: white;
    border-style-color:white;
    }

    .form{
        margin-top: 130px;
       margin-left: -250px;
       margin-right: 230px;
    }

</style>


    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

   
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    


<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>T</span>ourism</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#book">book</a>
        <a href="#packages">packages</a>
        <a href="#services">services</a>
        <a href="#gallery">gallery</a>
        <a href="#contact">contact</a>
    </nav>

</header>




 


<section class="book" id="book">

 

    <div class="row">

        <div class="image">
            <img src="images/book-img.svg" alt="">
        </div>

        <form action=""  method="POST"  class="form" >
           
               <div class="inputBox">
                <h3> Location</h3><input type="text" value="Nainital" 
 name="locs"  class="loc"  readonly=""  >
              
 
 
                           </div> 
                        <div class="inputBox">
                             <h3>Choose Passenger </h3>
 <div id="button">
                  

         <div class="quantity">
        <button class="btn minus-btn disabled" type="button">-</button>
        <input type="text" id="quantity" value="1" name="pass1">
        <button class="btn plus-btn" type="button">+</button>
    </div>
            

<h3 class="Payments">Payment Bus
    <br>

        Rs.<input type="" id="price" value="4700" name="price" class="price" readonly="" required >  


  </h3>
            <div class="inputBox">
                <h3>Name</h3>
                <input type="text" name="name" placeholder=" name"maxlength="25" required>
            </div>
            <div class="inputBox">
                <h3>Contact No.</h3>
                <input type="text" name="contact" placeholder="Contact no"maxlength="10" required>
            </div>
            <div class="inputBox">
                <h3>Email Id</h3>
                <input type="email"  name="email" placeholder="Email Id" required>
            </div>
            
            
            <div class="inputBox">
                <h3>arrivals</h3>
                <input type="date" name="arrivals" min="2022-01-14" required>
            </div>
            <div class="inputBox">
                <h3>leaving</h3>
                <input type="date" name="leaving" min="2022-01-14" required>
            </div>
            <input type="submit" class="btn" name="Submit" value="book now">
        </form>

    </div>

</section>


 

<script>
     //setting default attribute to disabled of minus button
        document.querySelector(".minus-btn").setAttribute("disabled", "disabled");

        //taking value to increment decrement input value
        var valueCount

        //taking price value in variable
        var price = document.getElementById("price").value;

        //price calculation function
        function priceTotal() {
            var total = valueCount * price;
            document.getElementById("price").value = total
        }

        //plus button
        document.querySelector(".plus-btn").addEventListener("click", function() {
            //getting value of input
            valueCount = document.getElementById("quantity").value;

            //input value increment by 1
            valueCount++;

            //setting increment input value
            document.getElementById("quantity").value = valueCount;

            if (valueCount > 1) {
                document.querySelector(".minus-btn").removeAttribute("disabled");
                document.querySelector(".minus-btn").classList.remove("disabled")
            }

            //calling price function
            priceTotal()
        })

        //plus button
        document.querySelector(".minus-btn").addEventListener("click", function() {
            //getting value of input
            valueCount = document.getElementById("quantity").value;

            //input value increment by 1
            valueCount--;

            //setting increment input value
            document.getElementById("quantity").value = valueCount

            if (valueCount == 1) {
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled")
            }

            //calling price function
            priceTotal()
        })
</script>

</body>
</html>