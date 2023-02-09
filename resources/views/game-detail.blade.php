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
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

body{
   
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #10101A;
    
}
*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}
/* Navbar */
a {
   text-decoration: none;
   color: white;
   font-size: 24px;
   transition: all .2s ease;
   font-family: 'Acme', sans-serif;
}
 
 li{
    list-style-type: none;
 }
 
/* Navbar */
a{
  text-decoration: none;
}

li{
  list-style-type: none;
}

.navbarr{
  position: fixed;
  z-index: 100;
}

header{
  background-color: #222831;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0.7rem 5%;
  border-bottom: 1px #111C2C;
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 9999;
}

.logo{

  font-weight: 900;
  font-size: 26px;
  background: -webkit-linear-gradient(45deg, #0d40f9,white );-webkit-background-clip: text;-webkit-text-fill-color: transparent;
}


nav ul{
  display: flex;
  flex-direction: row;
  position: relative;
 
  
}

nav ul li{
  margin-left: 5px;
  margin-right: 5px;
  text-align: center;
}
nav ul li a{
  color: #FFF;
  font-size: 16px;
  display: block;
  padding: 7px 20px;
  border-radius: 15px;
}

nav ul li a:hover{
  color:#598ff3dc;
}


.navbar ul img{
  color: white;
 cursor: pointer;
  right: 4%;
  width: 40px;
  height: 40px;
  margin-top: 3px;
  border-radius: 50%;
  transition: all .5s ease;
}  

.navbar ul img:hover{
  transform: scale(1.10);
}

.kontener{
  background-color: #10101A;
  padding:15px 9%;
  padding-bottom: 100px;
}

.kontener .heading{
  text-align: left;
  margin-top: 7%;
  padding-bottom: 15px;
  color:#fff;
  text-shadow: 0 5px 10px rgba(0,0,0,.2);
  font-size: 50px;
}

.kontener .headingg{
  margin-left: 1%;
  text-align: left;
  padding-bottom: 15px;
  color:#fff;
  text-shadow: 0 5px 10px rgba(0,0,0,.2);
  font-size: 20px;
  font-weight: 300;
}

/* CARD */

/* .container{
    position: relative;
    width: 1100px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding: 30px 20px 10px;
}
.container .card{
    max-width: 310px;
    height: 420px;
    background: rgba(32,32,43);
    margin: 30px 10px;
    padding: 20px 15px;
    display: flex;
    border-radius: 15px;
    flex-direction: column;
    box-shadow: 0 5px 20px rgba(0,0,0,0.5);
    transition: 0.3s ease-in-out;
    

}
.container .card .imgBx{
    position: relative;
    bottom: 50px;
    left: 10px;
    min-width: initial;
    width: 125px;
    height: 120px;
   
    z-index: 1;

}
.container .card .imgBx img{
    display: flex;
    justify-content: center;
    width: 100%;
    border-radius: 15px;
   
}

.container .card .content{
    position: relative;
    padding: 10px 15px;
    text-align: center;
}

.content h3{
    color: white;
    background-color: #1967FC;
    width: 115px;
    border-radius: 5px;
}

.content h2{
    color: white;
    text-align: left;
    margin-top: 17px;
}
.content p{
    color: rgba(128, 128, 128, 0.471);
    font-size: 14px;
}

.sound{
    background-color: #1967FC;
    width: 30px;
    float: right;
    padding: 20px;
    position: absolute;
    margin-left: 210px;
    margin-bottom: 70px;
    
} */



/* Profil */

.preview img{
  color: white;
 cursor: pointer;
  width: 80px;
  height: 80px;
  margin-top: 20px;
  border-radius: 50%;
  transition: all .5s ease;
 
  position: relative;
}  

.products-preview{
  position: fixed;
  top:0; left:70%;
  min-height: 100vh;
 

  display: none;
  align-items: center;
  justify-content: center;
  z-index: 99999;
}

.products-preview .preview{
  /* display: none; */
  padding:2rem;
 
  background: #222831;
  position: relative;
 
  width: 40rem;
  min-height: 100vh;
}

.products-preview .preview.active{
  display: inline-block;
}



.products-preview .preview .fa-times{
  position: absolute;
  top:1rem; right:40%;
  cursor: pointer;
  color:#444;
  font-size: 2.3rem;
}

.products-preview .preview .fa-times:hover{
  transform: rotate(90deg);
}

.products-preview .preview h3{
  color:white;
  position: absolute;
  top: 47px;
  left: 115px;
  font-family: 'Acme', sans-serif;

  font-size: 29px;
}


.products-preview .preview .buttons{
  display: flex;
  gap:1.5rem;
  flex-wrap: wrap;
  margin-top: -40px;
  margin-left: 24%;
}

.products-preview .preview .buttons a{
  
  padding:0.7rem;
  font-size: 1.1rem;
  color:#fff;
  border-radius: 10px;
  background-color: #444;
 
}

.garis{
  border-bottom: 1px solid rgb(74, 72, 72);
  
  height: 50px;
}




@media (max-width:991px){

  html{
     font-size: 55%;
  }

}

@media (max-width:768px){

  .products-preview .preview img{
     height: 25rem;
  }

}

@media (max-width:450px){

  html{
     font-size: 50%;
  }

}





/* CARDDD */
.propill{
    top:0; left:0;
    align-items: center;
    justify-content: center;
    margin-left: 50px;
    margin-top: 50px;
  
 }
 
 .propill .previeww{
    
    padding:0rem 2rem 2rem 2rem;
        text-align: center;
    background: rgb(32,32,43);
    border-radius: 15pt;
    position: relative;
   justify-content: center;
    width: 17rem;
 }
 
 .propill .previeww.active{
    display: inline-block;
 }
 
 .propill .previeww img{
    height: 8rem;
    margin-top: -15px;
    border-radius: 15px;
 }

 
 .propill .previeww h3{
   color: white;
    padding:.5rem 0;
    font-size: 1.4rem;
 }
 .judul{
    position: absolute;
    margin-left: 40px;
    margin-top: 4%;
 }
 
 
 .propill .previeww p{
    line-height: 1.5;
    padding:1rem 0;
    font-size: 16px;
    color:#777;
 }
 
 .propill .previeww .buttons{
    margin-top: 1rem;
 }
 
 .propill .previeww .buttons a{
    
    padding: 9px 16px 9px 16px;
    border-radius: 10px;
    font-size: 1.1rem;
    color: #598EF3;
    background-color: rgba(255, 255, 255, 0.938);
 }
 
 .propill .previeww .buttons a.cart{
   background-color: #598EF3;
    color: white;
    margin-left: 6px;
    
 }
 
 .propill .previeww .buttons a.cart:hover{
    background-color:#598ff3c5;
 }
 
 .propill .previeww .buttons a.buy:hover{
    background-color: rgba(255, 255, 255, 0.849);
 }


 .propill .previeww .pricee{
    padding-bottom: 1rem;
    font-size: 1.1rem;
    color:#598EF3;
 }
 
 .card{
     display: flex;
     flex-wrap: wrap;
       
 }
 
 /* scroll up and down */
html {
  scroll-behavior: smooth;
}

.scroll-top {
  height: 55px;
  width: 55px;
  background-color: white;
  position: fixed;
  bottom: 10px;
  right: 10px;
  cursor: pointer;
  border-radius: 6px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.336);
  /* hover effect default */
  transform: scale(0.9);
  transition: 0.3s ease-in-out transform;
  /* for centering the icon */
  display: flex;
  align-items: center;
  justify-content: center;
}
.scroll-top svg {
  width: 50%;
  color: black;
  pointer-events: none;
}

.scroll-top:hover {
  transform: scale(1);
}

 
 
 /* footer */


footer{
    /* position: fixed; */
    background-color: #2228318d;
    width: 100%;
    bottom: 0;
    left: 0;
    border-radius: 35px;
  }
  /* footer::before{
    content: '';
    position: absolute;
    left: 0;
    top: 100px;
    height: 1px;
    width: 100%;
    background: #AFAFB6;
  } */
  footer .content{
    max-width: 1250px;
    margin: auto;
    padding: 30px 40px 40px 40px;
  }
  footer .content .top{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 50px;
  }
  .content .top .logo-details{
    color: #fff;
    font-size: 30px;
    font-family: 'Rubik Distressed';
  }
  .content .top .media-icons{
    display: flex;
  }
  .content .top .media-icons a{
    height: 40px;
    width: 40px;
    margin: 0 8px;
    border-radius: 50%;
    text-align: center;
    line-height: 40px;
    color: #fff;
    font-size: 17px;
    text-decoration: none;
    transition: all 0.4s ease;
  }
  .top .media-icons a:nth-child(1){
    background: #4267B2;
  }
  .top .media-icons a:nth-child(1):hover{
    color: #4267B2;
    background: #fff;
  }
  .top .media-icons a:nth-child(2){
    background: #1DA1F2;
  }
  .top .media-icons a:nth-child(2):hover{
    color: #1DA1F2;
    background: #fff;
  }
  .top .media-icons a:nth-child(3){
    background: #E1306C;
  }
  .top .media-icons a:nth-child(3):hover{
    color: #E1306C;
    background: #fff;
  }
  .top .media-icons a:nth-child(4){
    background: #0077B5;
  }
  .top .media-icons a:nth-child(4):hover{
    color: #0077B5;
    background: #fff;
  }
  .top .media-icons a:nth-child(5){
    background: #FF0000;
  }
  .top .media-icons a:nth-child(5):hover{
    color: #FF0000;
    background: #fff;
  }
  footer .content .link-boxes{
    width: 100%;
    display: flex;
    justify-content: space-between;
  }
  footer .content .link-boxes .box{
    width: calc(100% / 5 - 10px);
  }
  .content .link-boxes .box .link_name{
    color: #fff;
    font-size: 18px;
    font-weight: 400;
    margin-bottom: 10px;
    position: relative;
  }
  .link-boxes .box .link_name::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 2px;
    width: 35px;
    background: #598EF3;
  }
  .content .link-boxes .box li{
    margin: 6px 0;
    list-style: none;
  }
  .content .link-boxes .box li a{
    color: #fff;
    font-size: 14px;
    font-weight: 400;
    text-decoration: none;
    opacity: 0.8;
    transition: all 0.4s ease
  }
  .content .link-boxes .box li a:hover{
    opacity: 1;
    text-decoration: underline;
  }
  .content .link-boxes .input-box{
    margin-right: 55px;
  }
  .link-boxes .input-box input{
    height: 40px;
    width: calc(100% + 55px);
    outline: none;
    border: 2px solid #AFAFB6;
    background: #140B5C;
    border-radius: 4px;
    padding: 0 15px;
    font-size: 15px;
    color: #fff;
    margin-top: 5px;
  }
  .link-boxes .input-box input::placeholder{
    color: #AFAFB6;
    font-size: 16px;
  }
  .link-boxes .input-box input[type="button"]{
    background: #fff;
    color: #140B5C;
    border: none;
    font-size: 18px;
    font-weight: 500;
    margin: 4px 0;
    opacity: 0.8;
    cursor: pointer;
    transition: all 0.4s ease;
  }
  .input-box input[type="button"]:hover{
    opacity: 1;
  }
  footer .bottom-details{
    width: 100%;
    background-color: #222831;
  }
  footer .bottom-details .bottom_text{
    max-width: 1250px;
    margin: auto;
    padding: 20px 40px;
    display: flex;
    justify-content: space-between;
  }
  .bottom-details .bottom_text span,
  .bottom-details .bottom_text a{
    font-size: 14px;
    font-weight: 300;
    color: #fff;
    opacity: 0.8;
    text-decoration: none;
  }
  .bottom-details .bottom_text a:hover{
    opacity: 1;
    text-decoration: underline;
  }
  .bottom-details .bottom_text a{
    margin-right: 10px;
  }
  @media (max-width: 900px) {
    footer .content .link-boxes{
      flex-wrap: wrap;
    }
    footer .content .link-boxes .input-box{
      width: 40%;
      margin-top: 10px;
    }
  }
  @media (max-width: 700px){
    footer{
      position: relative;
    }
    .content .top .logo-details{
      font-size: 26px;
    }
    .content .top .media-icons a{
      height: 35px;
      width: 35px;
      font-size: 14px;
      line-height: 35px;
    }
    footer .content .link-boxes .box{
      width: calc(100% / 3 - 10px);
    }
    footer .content .link-boxes .input-box{
      width: 60%;
    }
    .bottom-details .bottom_text span,
    .bottom-details .bottom_text a{
      font-size: 12px;
    }
  }
  @media (max-width: 520px){
    footer::before{
      top: 145px;
    }
    footer .content .top{
      flex-direction: column;
    }
    .content .top .media-icons{
      margin-top: 16px;
    }
    footer .content .link-boxes .box{
      width: calc(100% / 2 - 10px);
    }
    footer .content .link-boxes .input-box{
      width: 100%;
    }
  }






 

    </style>
</head>
<body>
  <div class="navbarr">
    <header>
    <a href="#" class="logo">Macoyyy</a>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="/become">Became</a></li> 
          
          </ul>
    </nav>
         <div class="navbar">
           
        <div class="nav_right" data-name="p-1">
           <ul>
              <li class="nr_li dd_main" style="list-style:none;">
                <img src="profile/{{ auth()->user()->foto }}" alt="tes">
                
               
              </li>
              
           </ul>
        </div>
     </div>
      
   
</header> 
 </div>
<!-- propillllll -->
 <div class="products-preview">

  <div class="preview" data-target="p-1">
     <i class="fas fa-times"></i>
     <img src="images/logoO.png">
     <h3>ripall</h3><br>
    
     <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
     
     <div class="buttons">
        <a href="profil.html" class="buy">Edit Profil</a>
      
     </div>
    <div class="garis"></div>
  </div>
    

</div> 


    
<div class="kontener">

        <h1 class="heading">{{ $data->nama_game }}</h1>
        {{-- <h4 class="headingg">10.8k Players</h4> --}}

        <!-- GA ADA CARD GA RESPONSIP, CARD SANGAT BERJASA -->
            <div class="card">   

                <div class="propill">

                 <div class="previeww" data-target="p-4">
                     <!-- <i class="fas fa-times"></i> -->
                     <img src="image/WhatsApp Image 2022-11-22 at 13.36.19 (1).jpeg" alt="">
                        <h3></h3>
           <!-- <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>( 250 )</span>
           </div> -->
                        <p>Pilih Akuu, dijamin menang dan dapatkan bundle gratis</p>
                        <div class="pricee">{{ $data->nama_game }}</div>
                        <div class="buttons">
                           <a href="/chatify" class="cart">Chat</a>
                        </div>
                 </div>
     
       
        
                 </div> 

                 <div class="propill">

                  <div class="previeww" data-target="p-4">
                      <!-- <i class="fas fa-times"></i> -->
                      <img src="image/WhatsApp Image 2022-11-22 at 13.36.19 (1).jpeg" alt="">
                         <h3>mmhdrvlfrds</h3>
            <!-- <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <span>( 250 )</span>
            </div> -->
                         <p>Pilih Akuu, dijamin menang dan dapatkan bundle gratis</p>
                         <div class="pricee">Valorant</div>
                         <div class="buttons">
                          <a href="#" class="buy">Order</a>
                            <a href="#" class="cart">Chat</a>
                         </div>
                  </div>
      
        
         
                  </div> 
                  <div class="propill">

                    <div class="previeww" data-target="p-4">
                        <!-- <i class="fas fa-times"></i> -->
                        <img src="image/WhatsApp Image 2022-11-22 at 13.36.19 (1).jpeg" alt="">
                           <h3>mmhdrvlfrds</h3>
              <!-- <div class="stars">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <span>( 250 )</span>
              </div> -->
                           <p>Pilih Akuu, dijamin menang dan dapatkan bundle gratis</p>
                           <div class="pricee">Valorant</div>
                           <div class="buttons">
                            <a href="#" class="buy">Order</a>
                              <a href="#" class="cart">Chat</a>
                           </div>
                    </div>
        
          
           
                    </div> 
                    <div class="propill">

                      <div class="previeww" data-target="p-4">
                          <!-- <i class="fas fa-times"></i> -->
                          <img src="image/WhatsApp Image 2022-11-22 at 13.36.19 (1).jpeg" alt="">
                             <h3>mmhdrvlfrds</h3>
                <!-- <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <span>( 250 )</span>
                </div> -->
                             <p>Pilih Akuu, dijamin menang dan dapatkan bundle gratis</p>
                             <div class="pricee">Valorant</div>
                             <div class="buttons">
                              <a href="#" class="buy">Order</a>
                                <a href="#" class="cart">Chat</a>
                             </div>
                      </div>
          
            
             
                    </div> 







                    <!-- end -->
            </div> 
   </div>

   <!-- Scrolup and down -->
<div class="scroll">
  <div class="scroll-top">
     <!--     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7l4-4m0 0l4 4m-4-4v18" />
       </svg> -->
     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
     </svg>
   </div>
   
   
</div>

<script>
  const scrollButton = document.querySelector(".scroll");
scrollButton.addEventListener("click", () => {
 window.scrollTo(0, 0);
});
</script>



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