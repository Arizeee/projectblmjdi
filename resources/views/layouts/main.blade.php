<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="image/WhatsApp Image 2022-11-22 at 13.36.19 (1).jpeg" type="kel 5" sizes="16x16">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>Valorant</title>
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

 <!-- font gogle -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Josefin+Sans:ital@0;1&family=Poppins:wght@400;500;700&family=Rubik+Distressed&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Noto+Sans+JP:wght@100&family=Oswald:wght@200;300;400&family=Quicksand:wght@300;400&family=Roboto+Mono&family=Roboto:wght@400;500;700&family=Rubik:wght@300;500;600;800&display=swap" rel="stylesheet">
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/css/cardgame.css">
    
</head>
<body>
  @include('partials.navbar')
  @yield('content')
<!-- footer -->

<footer id="footer">
  <div class="content">
    <div class="top">
      <div class="logo-details">  
        <!-- <i class="fab fa-slack"></i> -->
        <a href="#" class="logo">Macoyyy</a>
      </div>
      <div class="media-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/mabarc0y_/"><i class="fab fa-instagram"></i></a>
        <!-- <a href="#"><i class="fab fa-linkedin-in"></i></a> -->
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
    <div class="link-boxes">
      <ul class="box">
        <li class="link_name">Community</li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Contact us</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Get started</a></li>
      </ul>
      <ul class="box">
        <li class="link_name">Company</li>
        <li><a href="#">App design</a></li>
        <li><a href="#">Web design</a></li>
        <li><a href="#">Logo design</a></li>
        <li><a href="#">Banner design</a></li>
      </ul>
      <ul class="box">
        <li class="link_name">Account</li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">My account</a></li>
        <li><a href="#">Prefrences</a></li>
        <li><a href="#">Purchase</a></li>
      </ul>
      <ul class="box">
        <li class="link_name">Mabar Coyyy</li>
        <li><a href="#">MABAR COYY is a social platform for gamers to make friends worldwide through playing video games.</a></li>
       
      </ul>
    </div>
  </div>
  <div class="bottom-details">
    <div class="bottom_text">
      <span class="copyright_text">Copyright © 2022 <a href="#">MABAR COYYY</a>All rights reserved</span>
      <span class="policy_terms">
        <a href="#">Privacy policy</a>
        <a href="#">Terms & condition</a>
      </span>
    </div>
  </div>
</footer>

<!-- custom js file link  -->
<script src="script.js" defer></script>
</body>
</html>