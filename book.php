<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>



    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- custom css -->
<link rel="stylesheet" href="style.css">
</head>
<body>
<section class="header">
<!-- header section starts -->
<a href="home.php" class="logo">E LeArN.</a>

<nav class="navbar">
<a href="home.php">home</a>
<a href="about.php">about</a>
<a href="package.php">package</a>
<a href="book.php">book</a>

</nav>
<div id="menu-btn" class="fas fa-bars"></div>

<!--header section ends -->
    

</section>

<div class="heading" style="background:url('book.png') no-repeat">

<h1>
book now
</h1>
</div>

<!-- booking section starts -->

<section class="booking">
    <h1 class="heading-title">
        book Your course
    </h1>
    <form action="book_form.php" method="post" class="book-form">

<div class="flex">
    <div class="inputBox">
        <span>name:</span>
        <input type="text" placeholder="enter your name" name="name" >
    </div>
    <div class="inputBox">
        <span>email:</span>
        <input type="email" placeholder="enter your email" name="email" >
    </div>
    <div class="inputBox">
        <span>phone :</span>
        <input type="number" placeholder="enter your phone number" name="number" >
    </div>
    <div class="inputBox">
        <span>Course name:</span>
        <input type="text" placeholder="enter course name" name="courseName" >
    </div>
</div>

<input type="submit" value="Book Now!" class="btn" name="submit">
    </form>
</section>

<!-- booking section ends -->




















<!-- footer section starts -->

<section class="footer">

<div class="box-container">

<div class="box">
    <h3>Quick Links</h3>
<a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
<a href="about.php"><i class="fas fa-angle-right"></i> about</a>
<a href="package.php"><i class="fas fa-angle-right"></i> package</a>
<a href="book.php"><i class="fas fa-angle-right"></i> book</a>
</div>

<div class="box">
    <h3>Extra Links</h3>
<a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
<a href="#"> <i class="fas fa-angle-right"></i>About us</a>
<a href="#"> <i class="fas fa-angle-right"></i>Privacy</a>
<a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>

</div>

<div class="box">
    <h3>Contact Info</h3>
<a href="#"> <i class="fas fa-phone"></i>+91 8153 884459</a>
<a href="#"> <i class="fas fa-phone"></i>+91 8849 905718</a>
<a href="#"> <i class="fas fa-envelope"></i>meetp601efgh@gmail.com</a>
<a href="#"> <i class="fas fa-map"></i>Talavchora,india - 396521</a>

</div>

<div class="box">
    <h3>Follow Us</h3>
    <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
    <a href="#"><i class="fab fa-twitter"></i>twitter</a>
    <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
    <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>

</div>
</div>
<div class="credit">Created by <span>Meet patel and Bharat Parmar</span> | all right reserved!</div>

</section>

<!-- footer section ends -->




<!-- custom js -->
    <script src="script.js"></script>

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>
</html>