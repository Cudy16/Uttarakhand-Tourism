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
    <title>Tour Website</title>


<style type="text/css">
    
    .loc{
      
  border-color: white;
    border-style-color:white;
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
        
        <a href="#packages">packages</a>
        <a href="#services">services</a>
        <a href="#gallery">gallery</a>
        <a href="#contact">contact</a>
        <a href="login.php">Admin</a>
    </nav>

</header>




<section class="home" id="home">

    <div class="content">
        <h3>Welcome To Uttarakhand</h3>
        <p>discover new places with us</p>
        <a href="#packages" class="btn">Book Now</a>
    </div>


    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>


<!-- <section class="book" id="book">

    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1> -->

    <div class="row">

        <div class="image">
            <img src="images/book-img.svg" alt="">
        </div>

        
    </div>

</section>


<section class="packages" id="packages">

    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Tehri </h3>
                <p></p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 4000.00  <span> 6,999.00 </span> </div>
                <a href="Tehri.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> pauri </h3>
                <p></p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">  3500.00  <span> 5,999.00 </span> </div>
                <a href="Pauri.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Haridwar </h3>
                <p></p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 5000.00 <span>9,999.00</span> </div>
                <a href="Haridwar.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/4.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Chamoli </h3>
                <p></p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">  3000.00  <span> 4,999.00 </span> </div>
                <a href="Chamoli.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/5.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Rishikesh </h3>
                <p></p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">  4500.00  <span> 7,999.00 </span> </div>
                <a href="Rishikesh.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Nainital </h3>
                <p></p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">  4700.00  <span> 9,999.00 </span> </div>
                <a href="Nainital.php" class="btn">book now</a>
            </div>
        </div>

    </div>

</section>



<section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p></p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p></p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safty guide</h3>
            <p></p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around the india</h3>
            <p></p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
            <p></p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>adventures</h3>
            <p></p>
        </div>

    </div>

</section>


<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/005.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p></p>
            
            </div>
        </div>
        <div class="box">
            <img src="images/454.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p></p>
             
            </div>
        </div>
        <div class="box">
            <img src="images/33.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p></p>
              
            </div>
        </div>
        <div class="box">
            <img src="images/rd1.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p></p>
              
            </div>
        </div>
        <div class="box">
            <img src="images/tehri6.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p></p>
               
            </div>
        </div>
        <div class="box">
            <img src="images/uttarkashi.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p></p>
               
            </div>
        </div>
        <div class="box">
            <img src="images/tungnath.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p></p>
               
            </div>
        </div>
        <div class="box">
            <img src="images/d4.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p></p>
             
            </div>
        </div>
        <div class="box">
            <img src="images/dehradun.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p></p>
               
            </div>
        </div>

    </div>

</section>



<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>

        <form action="" method="post">
            <div class="inputBox">
                <input type="text" placeholder="name"  name="name" maxlength="25">
                <input type="email" placeholder="email" name="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number" name="number" maxlength="10">
                <input type="text" placeholder="subject" name="subject">
            </div>
            <textarea placeholder="message" name="msg" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" name="Submit" value="send message">
        </form>

    </div>
    
</section>


<?php
if(isset($_POST['Submit'])){{
   

 $name =$_POST['name'];
 
  $email =$_POST['email'];
 
 
  $number =$_POST['number'];
 
  $subject=$_POST['subject'];
  $msg =$_POST['msg'];
 

}


  $sql =  "insert into  contact (name,email,number,subject,msg) values('$name', '$email', '$number','$subject','$msg')";

  $run =mysqli_query($conn,$sql);

    if($run==1){
        ?>
         <script>
        alert('send successfully');
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