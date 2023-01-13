<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <?= $this->Html->charset() ?>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Cycle</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->

      <?= $this->Html->css(['bootstrap.min', 'style', 'responsive','jquery.mCustomScrollbar.min','owl.carousel.min','owl.theme.default.min']) ?>
      
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
     
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700,800&display=swap" rel="stylesheet">
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section header_bg">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="index.html" class="logo"><?php echo $this->Html->image("logo.png", ['fullBase' => true]);?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="about.html">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="cycle.html">Our Cycle</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="shop.html">Shop</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="news.html">News</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="contact.html">Contact Us</a>
                  </li>
               </ul>
               <form class="form-inline my-2 my-lg-0">
                  <div class="login_menu">
                     <ul>
                        <li><a href="#">Login</a></li>
                        <li><a href="#"><?php echo $this->Html->image("trolly-icon.png", ['fullBase' => true]);?></a></li>
                        <li><a href="#"><?php echo $this->Html->image("search-icon.png", ['fullBase' => true]);?></a></li>
                     </ul>
                  </div>
                  <div></div>
               </form>
            </div>
            <div id="main">
               <span style="font-size:36px;cursor:pointer; color: #fff" onclick="openNav()"><?php echo $this->Html->image("toggle-icon.png", ['fullBase' => true, 'height'=>'30px'])?></span>
            </div>
         </nav>
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-7">
                              <div class="best_text">Best</div>
                              <div class="image_1"><?php echo $this->Html->image("img-1.png", ['fullBase' => true]);?></div>
                           </div>
                           <div class="col-md-5">
                              <h1 class="banner_taital">New Model Cycle</h1>
                              <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content </p>
                              <div class="contact_bt"><a href="contact.html">Shop Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-7">
                              <div class="best_text">Best</div>
                              <div class="image_1"><?php echo $this->Html->image("img-1.png", ['fullBase' => true]);?></div>
                           </div>
                           <div class="col-md-5">
                              <h1 class="banner_taital">New Model Cycle</h1>
                              <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content </p>
                              <div class="contact_bt"><a href="contact.html">Shop Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-7">
                              <div class="best_text">Best</div>
                              <div class="image_1"><?php echo $this->Html->image("img-1.png", ['fullBase' => true],['alt' => 'img-1']);?></div>
                           </div>
                           <div class="col-md-5">
                              <h1 class="banner_taital">New Model Cycle</h1>
                              <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content </p>
                              <div class="contact_bt"><a href="contact.html">Shop Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- cycle section start -->
      <div class="cycle_section layout_padding">
         <div class="container">
            <h1 class="cycle_taital">Our cycle</h1>
            <p class="cycle_text">It is a long established fact that a reader will be distracted by the </p>
            <div class="cycle_section_2 layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <div class="box_main">
                        <h6 class="number_text">01</h6>
                        <div class="image_2"><?php echo $this->Html->image("img-2.png", ['fullBase' => true],['alt' => 'img-2']);?></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <h1 class="cycles_text">Cycles</h1>
                     <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                     <div class="btn_main">
                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                        <h4 class="price_text">Price <span style=" color: #f7c17b">$</span> <span style=" color: #325662">200</span></h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="cycle_section_3 layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="cycles_text">Stylis Cycle</h1>
                     <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                     <div class="btn_main">
                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                        <h4 class="price_text">Price <span style=" color: #f7c17b">$</span> <span style=" color: #325662">200</span></h4>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="box_main_3">
                        <h6 class="number_text_2">02</h6>
                        <div class="image_2"><?php echo $this->Html->image("img-3.png", ['fullBase' => true],['alt' => 'img-3']);?></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="cycle_section_2 layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <div class="box_main_3">
                        <h6 class="number_text_2">03</h6>
                        <div class="image_2"><?php echo $this->Html->image("img-4.png", ['fullBase' => true],['alt' => 'img-4']);?></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <h1 class="cycles_text">Mordern <br>Cycle</h1>
                     <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                     <div class="btn_main">
                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                        <h4 class="price_text">Price <span style=" color: #f7c17b">$</span> <span style=" color: #325662">200</span></h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="read_btn_main">
               <div class="read_bt"><a href="#">Read More</a></div>
            </div>
         </div>
      </div>
      <!-- cycle section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <h1 class="about_taital">About Our cycle Store</h1>
            <p class="about_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters
            </p>
            <div class="about_main">
            <?php echo $this->Html->image("img-2.png", ['fullBase' => true],['alt' => 'img-2', 'class'=> "image_5"]);?> 
            </div>
            <div class="read_bt_1"><a href="#">Read More</a></div>
         </div>
      </div>
      <!-- about section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="client_main">
                        <h1 class="client_taital">Says Customers</h1>
                        <div class="client_section_2">
                           <div class="client_left">
                              <div><?php echo $this->Html->image("client-img.png", ['fullBase' => true],['alt' => 'client-img', 'class' => 'client_img']);?>  </div>
                           </div>
                           <div class="client_right">
                              <div class="quote_icon"><?php echo $this->Html->image("quote-icon.png", ['fullBase' => true],['alt' => 'quote-icon']);?></div>
                              <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                              <h3 class="client_name">Channery</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="client_main">
                        <h1 class="client_taital">Says Customers</h1>
                        <div class="client_section_2">
                           <div class="client_left">
                              <div><?php echo $this->Html->image("client-img.png", ['fullBase' => true],['alt' => 'client-img','class' => 'client_img']);?></div>
                           </div>
                           <div class="client_right">
                              <div class="quote_icon"><?php echo $this->Html->image("quote-icon.png", ['fullBase' => true],['alt' => 'quote-icon']);?></div>
                              <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                              <h3 class="client_name">Channery</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="client_main">
                        <h1 class="client_taital">Says Customers</h1>
                        <div class="client_section_2">
                           <div class="client_left">
                              <div><?php echo $this->Html->image("client-img.png", ['fullBase' => true],['alt' => 'client-img','class' => 'client_img']);?></div>
                           </div>
                           <div class="client_right">
                              <div class="quote_icon"><?php echo $this->Html->image("quote-icon.png", ['fullBase' => true],['alt' => 'quote-icon']);?></div>
                              <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                              <h3 class="client_name">Channery</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
      <!-- client section end -->
      <!-- news section start -->
      <div class="news_section layout_padding">
         <div class="container">
            <h1 class="news_taital">News</h1>
            <p class="news_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using </p>
            <div class="news_section_2 layout_padding">
               <div class="row">
                  <div class="col-sm-4">
                     <div class="box_main_1">
                        <div class="zoomout frame"><?php echo $this->Html->image("quote-icon.png", ['fullBase' => true],['alt' => 'quote-icon']);?></div>
                        <div class="padding_15">
                           <h2 class="speed_text">Speed cycle</h2>
                           <div class="post_text">Post by : Den <span style="float: right;">20-12-2019</span></div>
                           <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="box_main_1">
                        <div class="zoomout frame"><?php echo $this->Html->image("img-7.png", ['fullBase' => true],['alt' => 'img-7']);?></div>
                        <div class="padding_15">
                           <h2 class="speed_text">Speed cycle</h2>
                           <div class="post_text">Post by : Den <span style="float: right;">20-12-2019</span></div>
                           <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="box_main_1">
                        <div class="zoomout frame"><?php echo $this->Html->image("img-8.png", ['fullBase' => true],['alt' => 'img-8']);?></div>
                        <div class="padding_15">
                           <h2 class="speed_text">Jaump cycle</h2>
                           <div class="post_text">Post by : Den <span style="float: right;">20-12-2019</span></div>
                           <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- news section end -->
      <!-- contact section start -->
      <?= $this->element('flash/themElement'); ?>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-8 col-sm-12 padding_0">
                  <div class="map_main">
                     <div class="map-responsive">
                       <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="call_text"><a href="#"><?php echo $this->Html->image("map-icon.png", ['fullBase' => true]);?><span class="padding_left_0">Page when looking at its layou</span></a></div>
                  <div class="call_text"><a href="#"><?php echo $this->Html->image("call-icon.png", ['fullBase' => true],['alt' => 'call-icon']);?><span class="padding_left_0">Call Now  +01 123467890</span></a></div>
                  <div class="call_text"><a href="#"><?php echo $this->Html->image("mail-icon.png", ['fullBase' => true],['alt' => 'mail-icon']);?><span class="padding_left_0">demo@gmail.com</span></a></div>
                  <div class="social_icon">
                     <ul>
                        <li><a href="#"><?php echo $this->Html->image("fb-icon1.png", ['fullBase' => true],['alt' => 'fb-icon1']);?></a></li>
                        <li><a href="#"><?php echo $this->Html->image("twitter-icon.png", ['fullBase' => true],['alt' => 'twitter-icon']);?></a></li>
                        <li><a href="#"><?php echo $this->Html->image("linkedin-icon.png", ['fullBase' => true],['alt' => 'linkedin-icon']);?></a></li>
                        <li><a href="#"><?php echo $this->Html->image("instagram-icon.png", ['fullBase' => true],['alt' => 'instagram-icon']);?></a></li>
                     </ul>
                  </div>
                  <input type="text" class="email_text" placeholder="Enter Your Email" name="Enter Your Email">
                  <div class="subscribe_bt"><a href="#">Subscribe</a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">Copyright 2019 All Right Reserved By.<a href="https://html.design"> Free  html Templates</p>
         </div>
      </div>
      <!-- copyright section end -->    
      <!-- Javascript files-->
     <?php echo $this->Html->script(['jquery.min', 'popper.min', 'bootstrap.bundle.min','plugin','jquery.mCustomScrollbar.concat.min','custom','owl.carousel','jquery-3.0.0.min']);?>

      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
           document.getElementById("main").style.marginLeft = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
           document.getElementById("main").style.marginLeft= "0";
          
         }

         $("#main").click(function(){
             $("#navbarSupportedContent").toggleClass("nav-normal")
         })
      </script>
   </body>
</html>