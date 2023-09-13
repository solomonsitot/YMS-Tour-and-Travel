<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <!-- header section starts  -->

   <section class="header">

      <a href="home.php" class="logo">YMS Tour and Travel</a>

      <nav class="navbar">
         <a href="home.php">home</a>
         <a href="package.php">Tour Site</a>
         <a href="book.php">Reservation</a>
         <a href="about.php">about</a>
         <a href="admin.php">Agent</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <!-- header section ends -->

   <div class="heading" style="background:url(images/trip\ bg.webp) no-repeat">
      <h1>start visiting</h1>
   </div>

   <!-- booking section starts  -->

   <section class="booking">



      <form action="reserve_form.php" method="post" class="book-form">

         <div class="flex">
            <div class="inputBox">
               <span>name :</span>
               <input type="text" placeholder="enter your name" name="name" required>
            </div>
            <div class="inputBox">
               <span>email :</span>
               <input type="email" placeholder="enter your email" name="email" required>
            </div>
            <div class="inputBox">
               <span>phone :</span>
               <input type="tel" placeholder="enter your number" name="phone" required>
            </div>
            <div class="inputBox">
               <span>where to :</span>
               <input type="text" placeholder="place you want to visit" name="location" required>
            </div>
            <div class="inputBox">
               <span>Acomodation :</span>
               <input type="text" placeholder="hotel,resort,camping" name="acomodation" required>
            </div>
            <div class="inputBox">
               <span>Mode of transportation :</span>
               <input type="text" placeholder="plane,cars,etc." name="transport" required>
            </div>
            <div class="inputBox">
               <span>arrivals :</span>
               <input type="date" name="arrivals" required>
            </div>
            <div class="inputBox">
               <span>leaving :</span>
               <input type="date" name="leaving" required>
            </div>
         </div>

         <input type="submit" value="submit" class="btn" name="send">

      </form>

   </section>

   <!-- booking section ends -->

















   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> Tour site</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i>Reservation</a>
            <a href="admin.php"><i class="fas fa-angle-right"></i> Agent</a>
         </div>


         <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +251-991132272 </a>
            <a href="#"> <i class="fas fa-phone"></i> +251-910133245 </a>
            <a href="YMStourandtravel@gmail.com"> <i class="fas fa-envelope"></i> YMStourandtravel@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> Arbaminch, Ethiopia</a>
         </div>

         <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         </div>

      </div>

      <div class="credit"> created by <span>software engineering students</span> | all rights reserved! </div>

   </section>

   <!-- footer section ends -->









   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>