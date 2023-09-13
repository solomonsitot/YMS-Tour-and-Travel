<!DOCTYPE html>
<html lang="en">

<head>
    <title>home</title>
    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
</head>

<body>

    <!-- header section starts  -->

    <section class="header">

        <a href="home.php" class="logo">YMS tour and Travel</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="package.php">Tour site</a>
            <a href="book.php">Reservation</a>
            <a href="about.php">about</a>
            <a href="admin.php">Agent</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <section class="booking">
        <form action="auth.php" method="post" class="book-form">
            <h1 class="heading-title">Agent login page</h1>
            <div class="flex">
                <br>
                <div class="inputBox">
                    <label for="userid"><span>User ID:</span> </label>
                    <input type="text" id="userid" name="userid" placeholder="your ID">
                </div>
                <br><br>
                <div class="inputBox">
                    <label for=" password"><span>Password:</span></label>
                    <input type="password" id="password" name="password" placeholder="enter your password">
                </div>
            </div>
            <br><br>
            <input type="submit" value="Submit" class="btn" name="submit">
        </form>
        <h2>please only login if you are Agent !</h2>
    </section>
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

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>

</html>