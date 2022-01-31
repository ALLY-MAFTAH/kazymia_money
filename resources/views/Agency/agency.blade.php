<!doctype html>
<html lang="<?= $locale ?>">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/png" href="app-assets/images/favicon.png"/>

    <!-- All CSS -->
    <!-- fontAwesome -->
    <link rel="stylesheet" href="app-assets/css/all.min.css">
    <!-- 7 stroke icon -->
    <link rel="stylesheet" href="app-assets/css/pe-icon-7-stroke.css">
    <!-- Roysha icon -->
    <link rel="stylesheet" href="app-assets/css/roysha-icons.css">

    <link rel="stylesheet" href="app-assets/css/bootstrap.min.css">    
    <link rel="stylesheet" href="app-assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="app-assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="app-assets/css/nice-select.css">
    <link rel="stylesheet" href="app-assets/css/style.css">

    <!-- custom css if you need -->
    <link rel="stylesheet" href="app-assets/css/custom.css">
    
    <!-- Color Palette. simple uncommned if you need any color palette -->
    <!-- <link rel="stylesheet" href="css/switcher/css/red.css"> -->

    <title><?= lang('Agency.title') ?></title>
  </head>
  <body class="home-one home-gradient">
     <!-- Preloader -->
     <div id="preloader">
      <div id="status"></div>
    </div>
    
    <!-- Header start -->
    <header class="header04 header05">
      <div class="container d-flex align-items-center">
          <a class="logo" href="index.html"> 
            <img src="app-assets/images/logo.png" alt="">
          </a>
          <nav class="primary-menu m-auto">
            <a id="mobile-menu-toggler" href="#"><i class="fas fa-bars"></i></a>                            
            <ul>                
              <!--<li class="current-menu-item has-menu-child"><a href="#">Home</a>-->
              <li class="current-menu-item"><a href="#"><?= lang('Home.menu_option_home') ?></a>
                <!--<ul class="sub-menu">
                  <li><a href="home-gradient.html">Home Gradient</a></li>
                  <li><a href="home-01.html">Home 01</a></li>
                  <li><a href="home-02.html">Home 02</a></li>
                  <li><a href="home-03.html">Home 03</a></li>
                  <li><a href="home-04.html">Home 04</a></li>
                </ul>-->
              </li>
              <li><a href="landing-page-send.html"><?= lang('Home.menu_option_sendmoney') ?></a></li>
              <li><a href="landing-page-receive.html"><?= lang('Home.menu_option_receivemoney') ?></a></li>
              <!--<li class="has-menu-child"><a href="#">Pages</a>
                <ul class="sub-menu">
                  <li><a href="how-it-works-send.html">How it works - Send</a></li>
                  <li><a href="how-it-works-receive.html">How it works - Receive</a></li>
                  <li><a href="how-it-works-paybills.html">How it works - Paybills</a></li>
                  <li><a href="landing-page-ecommerce.html">Landing - Ecommerce</a></li>
                  <li><a href="faq.html">Faq</a></li>
                  <li><a href="404.html">404 Error page</a></li>
                  <li><a href="coming-soon.html">Coming soon</a></li>
                  <li><a href="signup.html">Sign up</a></li>
                </ul>
              </li>
              <li class="has-menu-child">-->
              <li class="">
                <a href="#"><?= lang('Home.menu_option_about') ?></a>
                <!--<ul class="sub-menu">
                  <li><a href="about-01.html">About 01</a></li>
                  <li><a href="about-02.html">About 02</a></li>
                </ul> -->
              </li>
              <!--<li class="has-menu-child">
                <a href="blog.html">Blog</a>
                <ul class="sub-menu">
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="blog-details.html">Blog Details</a></li>
                </ul>
              </li> -->
              <li><a href="contact.html"><?= lang('Home.menu_option_contact') ?></a></li>
              <!-- <li></li> -->
            </ul>
          </nav>
         

          <a href='<?php echo base_url('/home/login'); ?>' class="login btn-default bg-gradient">
            <span class="bh"></span> <span><?= lang('Home.menu_option_login') ?></span>
          </a>
          <div class="select-dropdown">
            <div class="select-icon">
              <a href="#"><i class="fas fa-globe"></i></a>
            </div>
            <ul class="list-item">
               <li><a href="<?= base_url('/lang/fr'); ?>"><?= lang('Home.menu_option_frenchlanguage') ?></a></li>
              <li><a href="<?= base_url('/lang/en'); ?>"><?= lang('Home.menu_option_englishlanguage') ?></a></li>
            </ul>
          </div>
      </div>
    </header>
    <!-- Header end -->

    
    <!-- Banner section start -->
    <section class="banner v7 v8">
      <div class="container">
        <div class="row align-items-center">
			AGENCY SECTION       
        </div>
      </div>
    </section>
    <!-- Banner section end -->

   


    <!-- Footer strat -->
    <footer class="footer v2">
      <div class="foo-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="widget foo-nav">
              <!-- <h5>Access Us</h5> -->
              <div class="logo">
                <a href="home-gradient.html"><img src="app-assets/images/logo-3.png" alt=""></a>
              </div>
              Moved place under seed can be an not live moveth
              deep is darkness lights behold second and replenish.
              <div class="foo-link">
                <a href="mailto:support@roysha.com">support@roysha.com</a>
                <a href="tel:192256733">+19 225 6733</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="widget foo-nav">
              <h5>Partners</h5>
              <ul>
                <li><a href="#">Refer  A Frient</a></li>
                <li><a href="#">Affiliate Programs</a></li>
                <li><a href="#">Payment API</a></li>
                <li><a href="#">Partner Directory</a></li>
                <li><a href="#">Become A Partner</a></li>
                <li><a href="#">Find Locations</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="widget foo-nav">
              <h5>Services</h5>
              <ul>                
                <li><a href="#">Transfer Money</a></li>
                <li><a href="#">Saving Account</a></li>
                <li><a href="#">Online Shopping</a></li>
                <li><a href="#">Pay Bills</a></li>
                <li><a href="#">Credit Service</a></li>
                <li><a href="#">Ecommerce</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="widget foo-nav">
              <h5>Download App</h5>
              <p>
                Moved place under seed can be an not live moveth
                <!-- deep is darkness lights behold second and replenish. -->
              </p>
              <div class="app-image">
                <a href="#"><img src="app-assets/images/i-icon.png" alt="icon"></a>
                <a href="#"><img src="app-assets/images/g-icon.png" alt="icon"></a>
              </div>
            </div>
            <div class="widget foo-nav mt-3">
              <h5 class="mb-1">Follow Us</h5>
              <div class="social-icon">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-skype"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="foo-btm">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="foo-navigation">
                <ul>
                  <li><a href="#">Terms and Conditions</a></li>
                  <li><a href="#">Privacy & Policy</a></li>
                  <li><a href="#">Legal</a></li>
                  <li><a href="#">Notice</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="copyright">Copyright &copy; <a href="http://themeies.com"><!--themeies --></a> - 2021</div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer end -->

    <!-- JS -->
    <script src="app-assets/js/jquery-3.3.1.min.js"></script>
    <script src="app-assets/js/jquery-ui.min.js"></script>
    <script src="app-assets/js/bootstrap.min.js"></script>
    <script src="app-assets/js/owl.carousel.min.js"></script>
    <script src="app-assets/js/owl.carousel2.thumbs.min.js"></script>
    <script src="app-assets/js/jquery.countdown.min.js"></script>
    <script src="app-assets/js/jquery.fancybox.min.js"></script>
    <script src="app-assets/js/jquery.nice-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" ></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/106949/jquery.onscreen.js"></script>
    <script src="app-assets/js/scripts.js"></script>
  </body>
</html>