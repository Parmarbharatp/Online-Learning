

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E - Learning Website</title>

    
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- custom css -->
<link rel="stylesheet" href="style.css">

<!-- swiper css link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>



</head>
<body>
    
<section class="header">
<!-- header section starts -->
<a href="home.php" class="logo">E LeArN</a>

<nav class="navbar">
<a href="home.php">home</a>
<a href="about.php">about</a>
<a href="package.php">package</a>
<a href="book.php">book</a>
<!-- <a href="book.php">Sign up</a>
<a href="book.php">login</a> -->
<a href="logout.php"  style="color:var(--main-color);">logout</a>
</nav>
<div id="menu-btn" class="fas fa-bars"></div>

<!--header section ends -->
</section>


<!-- home section starts  -->


<section class="home">
    <div class="swiper homeSlider">
        <div class="swiper-wrapper">

        <div class="swiper-slide slide" style="background:url(study3.jpg) no-repeat">
                <div class="content">
                 <span>explore,Research,study</span>
                 <h3>Make your dreams true</h3>
                 <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(4521429.webp) no-repeat">
                <div class="content">
                 <span>explore,Research,study</span>
                 <h3>study around globe</h3>
                 <a href="package.php" class="btn">discover more</a>
                </div>
            </div>


            <div class="swiper-slide slide" style="background:url(study2.jpg) no-repeat">
                <div class="content">
                 <span>explore,research,study</span>
                 <h3>become expert</h3>
                 <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
           
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    

</section>




<!-- home section ends  -->



<!-- services section starts -->

<section class="services">
    <h1 class="heading-title">Our services</h1>
    <div class="box-container">
        <div class="box">
            <img src="icons8-adventure-32.png" alt="">
            <h3>study around globe</h3>
        </div>

        <div class="box">
            <img src="icons8-globe-64.png" alt="">
            <h3>glode</h3>
        </div>

        <div class="box">
            <img src="icons8-jake-32.png" alt="">
            <h3>services</h3>
        </div>

        <div class="box">
            <img src="icons8-jake-32.png" alt="">
            <h3>booking</h3>
        </div>

        <div class="box">
            <img src="icons8-globe-64.png" alt="">
            <h3>courses</h3>
        </div>

        <div class="box">
            <img src="icons8-jake-32.png" alt="">
            <h3>learn</h3>
        </div>

        


    </div>
</section>
<!-- services section ends -->

<!-- home about section starts -->


<section class="home-about">

    <div class="image">
        <img src="study3.jpg" alt="">
    </div>
    
    <div class="content">
        <h3>about us</h3>
        <p>All the skills you need in one place
            <br>
            From critical workplace skills to technical topics, our catalog supports well-rounded professional development
        </p>
        <a href="about.php" class="btn">Read more</a>
    </div>

</section>



<!-- home about section ends -->

<!-- home packages section starts -->

<section class="home-packages">
    <h1 class="heading-title"> our courses </h1>

    <div class="box-container"> 
        <div class="box">

            <div class="image">
                <img src="OIP.jpeg" alt="">
            </div>

            <div class="content">
                <h3>for best learners</h3>
                <p>Learn from this courses and skill your self,build realtime project</p>
                <a href="book.php" class="btn">book now</a>
            </div>

        </div>

        <div class="box">

            <div class="image">
                <img src="java.jpg" alt="">
            </div>

            <div class="content">
                <h3>for best learners</h3>
                <p>Learn from this courses and skill your self,build realtime project</p>
                <a href="book.php" class="btn">book now</a>
            </div>
            
        </div>

        <div class="box">

            <div class="image">
                <img src="c3.png" alt="">
            </div>

            <div class="content">
                <h3>for best learners</h3>
                <p>Learn from this courses and skill your self,build realtime project</p>
                <a href="book.php" class="btn">book now</a>
            </div>
            
        </div>

        <div class="box">

            <div class="image">
                <img src="c4.png" alt="">
            </div>

            <div class="content">
                <h3>for best learners</h3>
                <p>Learn from this courses and skill your self,build realtime project</p>
                <a href="book.php" class="btn">book now</a>
            </div>

        </div>

        <div class="box">

            <div class="image">
                <img src="c5.png" alt="">
            </div>

            <div class="content">
                <h3>for best learners</h3>
                <p>Learn from this courses and skill your self,build realtime project</p>
                <a href="book.php" class="btn">book now</a>
            </div>
            
        </div>

        <div class="box">

            <div class="image">
                <img src="c6.png" alt="">
            </div>

            <div class="content">
                <h3>for best learners</h3>
                <p>Learn from this courses and skill your self,build realtime project</p>
                <a href="book.php" class="btn">book now</a>
            </div>
            
        </div>


    </div>

    <div class="load-more">
        <a href="package.php" class="btn">load more</a>
    </div>
</section>


<!-- home packages section ends -->

<!-- home offer section starts -->

<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>We’re thrilled to share exciting news with our learners! For a limited time, all our courses are available at an incredible 50% discount. Whether you’re looking to enhance your programming skills, delve into data science, or explore cutting-edge technologies, now is the perfect opportunity.
</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>

<!-- home offer section ends -->

















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
  


  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>

    
    var swiper = new Swiper(".homeSlider", {
        loop:true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    
  </script>

</body>
</html>