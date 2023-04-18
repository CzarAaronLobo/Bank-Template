<?php
session_start();
//LOGOUT
if (isset($_POST['logout'])) {
  unset($_SESSION['user']);
}

//back to login if not signed in
if (!isset($_SESSION['user'])) {
  header("Location:login.php");
  exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Constantinople Bank</title>
  <link rel="stylesheet" href="./css/styles.css" />
  <link rel="stylesheet" href="./css/utils.css" />
</head>

<body>
  <header class="container">
    <nav class="flex space-between">
      <div class="left flex items-center">
        <img src="images/logo.jpeg" />
        <ul class="flex items-center justify-center uppercase semibold">
          <li><a href="index.php" style="text-decoration: none;">Home</a></li>
          <li><a href="account.php" style="text-decoration: none;">Loan</a></li>
          <li><a href="payment.php" style="text-decoration: none;">Payment</a></li>
          <li><a href="blog.php" style="text-decoration: none;">Blog</a></li>
          <li><a href="contact.php" style="text-decoration: none;">Contact Us</a></li>
        </ul>
      </div>

      <div class="right flex items-center">
        <input placeholder="Facilities" type="text" class="search" />
        <div class="profile mx-2"></div>
        <div class="wishlist mx-2"></div>
        <div class="bag mx-2"></div>
        <form method="post">
          <input class="logout" type="hidden" name="logout" value="1" />
          <input class="logout" type="submit" value="Logout" />
        </form>
      </div>
    </nav>
  </header>
  <h2>
    <p> Welcome to Constantinople Bank </p>
  </h2>

  <div class="slideshow-container" style="width: 80%;">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="./images/bankhome.jpg" style="width:100%">
      
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="./images/bb1.jpeg" style="width:100%">
      
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="./images/bb.jpg" style="width:100%">
     
    </div>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

  <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 10000);
    }
  </script>

  <section class="container section1 flex">



    <p> Do not share your internet banking username/password or Credit/Debit Card number/CVV/OTP via e-mail or over the phone </p>

    <br></br>

    
  </section>
  <br> </br>

  </h3>
  <p> For further assistance, please contact our helpline number +91-7338492458 </p>
  </h3>
  <!-- <script src="script.js"></script> -->
</body>

</html>