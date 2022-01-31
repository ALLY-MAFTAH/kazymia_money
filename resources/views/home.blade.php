<!doctype html>
<html lang="<?= app()->getLocale() ?>">

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

    <title>@lang('Home.title')</title>
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
              <li class="current-menu-item"><a href="#">@lang('Home.menu_option_home')</a>
                <!--<ul class="sub-menu">
                  <li><a href="home-gradient.html">Home Gradient</a></li>
                  <li><a href="home-01.html">Home 01</a></li>
                  <li><a href="home-02.html">Home 02</a></li>
                  <li><a href="home-03.html">Home 03</a></li>
                  <li><a href="home-04.html">Home 04</a></li>
                </ul>-->
              </li>
              <li><a href="landing-page-send.html">@lang('Home.menu_option_sendmoney')</a></li>
              <li><a href="landing-page-receive.html">@lang('Home.menu_option_receivemoney')</a></li>
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
                <a href="#">@lang('Home.menu_option_about')</a>
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
              <li><a href="contact.html">@lang('Home.menu_option_contact')</a></li>
              <!-- <li></li> -->
            </ul>
          </nav>

          <a href='<?php echo route('login'); ?>' class="login btn-default bg-gradient">
            <span class="bh"></span> <span>@lang('Home.menu_option_login')</span>
          </a>
          <div class="select-dropdown">
            <div class="select-icon">
              <a href="#"><i class="fas fa-globe"></i></a>
            </div>
            <ul class="list-item">

              <li><a href="lang/fr">@lang('Home.menu_option_frenchlanguage')</a></li>
             <li><a href="lang/en">@lang('Home.menu_option_englishlanguage')</a></li>
            </ul>
          </div>
      </div>
    </header>
    <!-- Header end -->


    <!-- Banner section start -->
    <section class="banner v7 v8">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 col-md-12">
            <div class="ban-content">
              <h1>@lang('Home.body_introheader')</h1>
              <p>@lang('Home.body_introbody')</p>
              <a href="https://vimeo.com/191947042" class="btn btn-outline btn-round icon-left" data-fancybox>
                <span class="bh"></span> <span><i class="fas fa-play"></i>@lang('Home.body_button_learnmore')</span>
              </a>
              <a href="#" class="btn btn-default btn-round icon-left">
                <span class="bh"></span> <span>@lang('Home.body_button_discovernow')</span>
              </a>
            </div>
          </div>
          <div class="col-lg-5 col-md-12">
            <div class="form-tab">
              <ul class="nav nav-tabs">
                <li><a class="active" data-toggle="tab" href="#send-money">@lang('Home.body_tab_sendmoney')</a></li>
                <li><a data-toggle="tab" href="#receive-money">@lang('Home.body_tab_receivemoney')</a></li>
              </ul>
              <div class="tab-content currency-form">
                <div id="send-money" class="tab-pane fade in active show">
                  <form class="" action="#">
                    <div class="form-field">
                      <label>@lang('Home.body_label_sendamount')</label>
                      <div class="join-field">
                        <input type="text" name="send_amount" placeholder="$1,000.00">
                        <div class="curr-select">
                          <span class="selected"><img src="app-assets/images/flags/usa.png" alt="">usd &nbsp;<i class="fas fa-caret-down"></i></span>
                          <ul>
                            <li><a href="#"><img src="app-assets/images/flags/australia.png" alt="">aud</a></li>
                            <li><a href="#"><img src="app-assets/images/flags/canada.png" alt="">cad</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="currency-text v2">
                      <span><strong>75.5</strong> @lang('Home.body_label_exchangerate')</span>
                      <span><strong>$4.50</strong> @lang('Home.body_label_transitionfees')</span>
                    </div>
                    <div class="form-field">
                      <label>@lang('Home.body_label_receiveamount')</label>
                      <div class="join-field">
                        <input type="text" name="send_amount" placeholder="$1,000.00">
                        <div class="curr-select">
                          <span class="selected"><img src="app-assets/images/flags/australia.png" alt="">aud &nbsp;<i class="fas fa-caret-down"></i></span>
                          <ul>
                            <li><a href="#"><img src="app-assets/images/flags/australia.png" alt="">aud</a></li>
                            <li><a href="#"><img src="app-assets/images/flags/usa.png" alt="">usa</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-block btn-filled form-btn bg-gradient">
                      <span class="bh"></span> <span>@lang('Home.body_button_continuretransaction') <i class="fas fa-arrow-right"></i></span>
                    </button>
                    <span class="accept-terms">@lang('Home.body_label_termsandconditions')<a href="#">@lang('Home.body_link_termsandconditions')</a></span>
                  </form>
                </div>

                <div id="receive-money" class="tab-pane fade">
                  <form class="" action="#">
                    <div class="form-field">
                      <label>send amount</label>
                      <div class="join-field">
                        <input type="text" name="send_amount" placeholder="$1,000.00">
                        <div class="curr-select">
                          <span class="selected"><img src="app-assets/images/flags/usa.png" alt="">usd &nbsp;<i class="fas fa-caret-down"></i></span>
                          <ul>
                            <li><a href="#"><img src="app-assets/images/flags/australia.png" alt="">aud</a></li>
                            <li><a href="#"><img src="app-assets/images/flags/canada.png" alt="">cad</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="form-field">
                      <label for="rcv_country">Receiver Country</label>
                      <select id="rcv_country" name="rcv_country">
                        <option>Select Country</option>
                        <option value="usa">USA</option>
                        <option value="canada">Canada</option>
                        <option value="australia">Australia</option>
                      </select>
                    </div>
                    <div class="form-field">
                      <label for="del_type">Delivery Type</label>
                      <select id="del_type" name="del_type">
                        <option>Choose Delivery Type</option>
                        <option value="imt">Immediate Transfer</option>
                        <option value="rtt">Real Time Transfer</option>
                        <option value="eft">Electronic Transfer</option>
                      </select>
                    </div>
                    <button class="btn btn-block btn-filled form-btn bg-gradient">
                      <span class="bh"></span> <span>Continue Transition <i class="fas fa-arrow-right"></i></span>
                    </button>
                    <span class="accept-terms">By clicking continue, i am agree with <a href="#">Terms &amp; Policy</a></span>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Banner section end -->

    <!-- Easy steps section start -->
    <section class="easy-steps" style="background-image:url(app-assets/images/shape/shape-1.png);background-repeat:no-repeat;">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 m-auto">
            <div class="sec-heading">
              <h2 class="sec-title">Easy and Fast Way to Send Money</h2>
              <p class="sec-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-10 col-md-12 m-auto">
            <ul class="steps v2">
              <li><span>1</span> Select Country</li>
              <li><span>2</span> Choose Service</li>
              <li><span>3</span> Input Information</li>
              <li><span>4</span> Confirm and Send</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Easy steps section end -->


    <!-- Payment service section start -->
    <section class="payment-service bg-light-grey">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="content-box">
              <h2>Why Send Money with Our Payment Service</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas</p>
              <ul class="list">
                <li><i class="fas fa-check-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscing. </li>
                <li><i class="fas fa-check-circle"></i> Rabore ettoram dolore magna aliquis ipsum.</li>
                <li><i class="fas fa-check-circle"></i> Pouis ipsum suspendisse ultrices gravida.</li>
                <li><i class="fas fa-check-circle"></i> Rabore ettoram dolore magna aliquis ipsum.</li>
              </ul>
              <a href="#" class="btn btn-default bg-gradient"><span class="bh"></span> <span>try it now</span></a>
            </div>
          </div>
          <div class="col-md-6">
            <figure class="imgBox">
              <img src="app-assets/images/payment-service2.png" alt="">
            </figure>
          </div>
        </div>
      </div>
    </section>
    <!-- Payment service section end -->

    <!-- Services section start -->
    <section class="services" style="background-image:url(app-assets/images/shape/shape-2.png);background-repeat:no-repeat; background-size: contain;">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 m-auto">
            <div class="sec-heading">
              <h2 class="sec-title">Secure Payment With Low Transfer Fees</h2>
              <p class="sec-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="iconBox boxed text-center">
              <!-- <img src="app-assets/images/icons/1.png" alt="" class="img-icon"> -->

              <!-- Roysha icon -->
              <span class="roysha-icon roysha-secured"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span></span>

              <h5><a href="#">Secure Payment Service</a></h5>
              <p>Lorem ipsum qitame coctetr of asipm scing elise eiusm temor incidid ue. Ruispm suspen disse intert ultrices gravida.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="iconBox boxed text-center">
              <!-- <img src="app-assets/images/icons/2.png" alt="" class="img-icon"> -->

              <!-- Roysha icon -->
              <span class="roysha-icon roysha-amount"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span></span>

              <h5><a href="#">Low Cost and Fast transfer</a></h5>
              <p>Lorem ipsum qitame coctetr of asipm scing elise eiusm temor incidid ue. Ruispm suspen disse intert ultrices gravida. </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="iconBox boxed text-center">
              <!-- <img src="app-assets/images/icons/3.png" alt="" class="img-icon"> -->

              <!-- Roysha icon -->
              <span class="roysha-icon roysha-wallet"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span></span>

              <h5><a href="#">Real Time Money Tracking</a></h5>
              <p>Lorem ipsum qitame coctetr of asipm scing elise eiusm temor incidid ue. Ruispm suspen disse intert ultrices gravida. </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services section end -->

    <!-- Payment system works section start -->
    <section class="ps-works v2 bg-light-grey">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="content-box-fluid right">
              <h2>How Does Our Payment System Works?</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas</p>
              <p>ccumsanamet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
              <a href="#" class="btn btn-default bg-gradient"><span class="bh"></span> <span>Learn More</span></a>
            </div>
          </div>
          <div class="col-md-6">
            <figure class="video-box">
              <img src="app-assets/images/video-bg/1.jpg" alt="">
              <a href="https://vimeo.com/191947042" class="video-btn" data-fancybox><i class="fas fa-play"></i></a>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <!-- Payment system works section end -->

    <!-- Testimonial section start -->
    <section class="testimonial-v2 v4" style="background-image:url(app-assets/images/shape/shape-3.png);background-repeat:no-repeat; background-size: contain;">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 m-auto">
            <div class="sec-heading">
              <h2 class="sec-title">What Our Users Say About Us</h2>
              <p class="sec-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-10 col-md-12 m-auto">
            <div class="testimonialBox">
              <span class="quote-sign"><i class="fas fa-quote-right"></i></span>
              <div class="test-caro-2 owl-carousel" data-slider-id="1">
                <div class="single-testimonial">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore eco dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                  <div class="tst-head">
                    <h6>Jhon Doe</h6>
                    <span>Business analist</span>
                  </div>
                </div>
                <div class="single-testimonial">
                  <p>Ypsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore eco dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                  <div class="tst-head">
                    <h6>Jhon Doe</h6>
                    <span>Business analist</span>
                  </div>
                </div>
                <div class="single-testimonial">
                  <p>Qonsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore eco dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                  <div class="tst-head">
                    <h6>Jhon Doe</h6>
                    <span>Business analist</span>
                  </div>
                </div>
              </div>
              <div class="client-thumb owl-thumbs" data-slider-id="1">
                <a href="javascript:void(0)" class="owl-thumb-item"><img src="app-assets/images/avatar.png" alt=""></a>
                <a href="javascript:void(0)" class="owl-thumb-item"><img src="app-assets/images/avatar.png" alt=""></a>
                <a href="javascript:void(0)" class="owl-thumb-item"><img src="app-assets/images/avatar.png" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial section end -->

    <!-- App section start -->
    <section class="app bg-light-grey">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="content-box">
              <h2>Download Our Mobile Apps</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas</p>
              <ul class="list">
                <li><i class="fas fa-check-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscing. </li>
                <li><i class="fas fa-check-circle"></i> Rabore ettoram dolore magna aliquis ipsum.</li>
                <li><i class="fas fa-check-circle"></i> Pouis ipsum suspendisse ultrices gravida.</li>
              </ul>
              <a href="#" class="btn btn-default bg-gradient icon-left"><span class="bh"></span> <span><i class="fab fa-android"></i> Google play</span></a>
              <a href="#" class="btn btn-default bg-gradient icon-left"> <span class="bh"></span> <span><i class="fab fa-apple"></i>App store</span></a>
            </div>
          </div>
          <div class="col-md-6">
            <figure class="imgBox">
              <!-- <img src="app-assets/images/app-img.png" alt=""> -->
              <img src="app-assets/images/ani5/1.png" alt="img" class="ani5 ani5img1">
              <img src="app-assets/images/ani5/2.png" alt="img" class="ani5 ani5img2">
              <img src="app-assets/images/ani5/3.png" alt="img" class="ani5 ani5img3">
              <img src="app-assets/images/ani5/4.png" alt="img" class="ani5 ani5img4">
              <img src="app-assets/images/ani5/7.png" alt="img" class="ani5 ani5img5">
              <img src="app-assets/images/ani5/8.png" alt="img" class="ani5 ani5img6">
            </figure>
          </div>
        </div>
      </div>
    </section>
    <!-- App section end -->

    <!-- Faq section start -->
    <section class="faq-tab" style="background-image:url(app-assets/images/shape/shape-4.png);background-repeat:no-repeat; background-size: contain;">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 m-auto text-center">
            <div class="sec-heading">
              <h2 class="sec-title">Frequently Asked Questions</h2>
              <p class="sec-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-10 col-md-12 m-auto">
              <ul class="row nav nav-tabs v2">
                <li class="col-md-3">
                  <a class="active" data-toggle="tab" href="#general-qs">
                    <!-- <img src="app-assets/images/icons/9.png" alt=""> -->

                    <!-- Roysha icon -->
                    <span class="roysha-icon v2 roysha-ask"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span>

                    General Questions
                  </a>
                </li>
                <li class="col-md-3">
                  <a data-toggle="tab" href="#trasn-money">
                    <!-- <img src="app-assets/images/icons/10.png" alt=""> -->

                    <!-- Roysha icon -->
                    <span class="roysha-icon v2 roysha-hand-cash"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></span>

                    Money Transfer
                  </a>
                </li>
                <li class="col-md-3">
                  <a data-toggle="tab" href="#mbl-banking">
                    <!-- <img src="app-assets/images/icons/11.png" alt=""> -->

                    <!-- Roysha icon -->
                    <span class="roysha-icon v2 roysha-fast-transfer"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span></span>

                    Mobile Banking
                  </a>
                </li>
                <li class="col-md-3">
                  <a data-toggle="tab" href="#fee-charges">
                    <!-- <img src="app-assets/images/icons/12.png" alt=""> -->

                    <!-- Roysha icon -->
                    <span class="roysha-icon v2 roysha-bank-diposite"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span></span>

                    Fees and Charges
                  </a>
                </li>
              </ul>

              <div class="tab-content">
                <div id="general-qs" class="tab-pane fade in active show">
                  <div class="accordion" id="accordion">
                    <div class="accordion-item">
                      <h5 class="collapsed" data-toggle="collapse" data-target="#faq-1" aria-expanded="true">
                        Lorem ipsum dolor sit amet
                      </h5>
                      <div id="faq-1" class="collapse" data-parent="#accordion">
                        <div class="acr-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscied do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspen disse ultrices gravida.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h5 class="collapsed" data-toggle="collapse" data-target="#faq-2" aria-expanded="false">
                        Input Wallet Informations
                      </h5>

                      <div id="faq-2" class="collapse show" data-parent="#accordion">
                        <div class="acr-body">
                          <p>Molestie eu blandit eu sodales, nulla vitae nulla tempor et porta, ante nec commodo. Nulla non fringilla urna dolor vivamus, vulputate eu neque vivamus lacus in, imperdiet id sed malesuada per.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h5 class="collapsed" data-toggle="collapse" data-target="#faq-3" aria-expanded="false">
                        Confirm information and payover
                      </h5>

                      <div id="faq-3" class="collapse" data-parent="#accordion">
                        <div class="acr-body">
                          <p>Blandit eu sodales, nulla vitae nulla tempor et porta, ante nec commodo. Nulla non fringilla urna dolor vivamus, vulputate eu neque vivamus lacus in, imperdiet id sed malesuada per.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h5 class="collapsed" data-toggle="collapse" data-target="#faq-4" aria-expanded="false">
                        Access Your Mobile Wallet
                      </h5>

                      <div id="faq-4" class="collapse" data-parent="#accordion">
                        <div class="acr-body">
                          <p>Molestie eu blandit eu sodales, nulla vitae nulla tempor et porta, ante nec commodo. Nulla non fringilla urna dolor vivamus, vulputate eu neque vivamus lacus in, imperdiet id sed malesuada per.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h5 class="collapsed" data-toggle="collapse" data-target="#faq-5" aria-expanded="false">
                        Input Wallet Informations
                      </h5>

                      <div id="faq-5" class="collapse" data-parent="#accordion">
                        <div class="acr-body">
                          <p>Blandit eu sodales, nulla vitae nulla tempor et porta, ante nec commodo. Nulla non fringilla urna dolor vivamus, vulputate eu neque vivamus lacus in, imperdiet id sed malesuada per.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="trasn-money" class="tab-pane fade">
                  <div class="accordion" id="accordion1">
                    <div class="accordion-item">
                      <h5 class="collapsed" data-toggle="collapse" data-target="#tm-1" aria-expanded="true">
                        Access Your Mobile Wallet
                      </h5>
                      <div id="tm-1" class="collapse" data-parent="#accordion">
                        <div class="acr-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscied do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspen disse ultrices gravida.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h5 class="collapsed" data-toggle="collapse" data-target="#tm-2" aria-expanded="false">
                        Input Wallet Informations
                      </h5>

                      <div id="tm-2" class="collapse show" data-parent="#accordion">
                        <div class="acr-body">
                          <p>Molestie eu blandit eu sodales, nulla vitae nulla tempor et porta, ante nec commodo. Nulla non fringilla urna dolor vivamus, vulputate eu neque vivamus lacus in, imperdiet id sed malesuada per.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h5 class="collapsed" data-toggle="collapse" data-target="#tm-3" aria-expanded="false">
                        Confirm information and payover
                      </h5>

                      <div id="tm-3" class="collapse" data-parent="#accordion">
                        <div class="acr-body">
                          <p>Blandit eu sodales, nulla vitae nulla tempor et porta, ante nec commodo. Nulla non fringilla urna dolor vivamus, vulputate eu neque vivamus lacus in, imperdiet id sed malesuada per.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="mbl-banking" class="tab-pane fade">
                  <div class="accordion" id="accordion2">
                    <div class="accordion-item">
                      <h5 class="collapsed" data-toggle="collapse" data-target="#mblb-1" aria-expanded="true">
                          Input Wallet Informations
                      </h5>
                      <div id="mblb-1" class="collapse" data-parent="#accordion">
                        <div class="acr-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscied do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspen disse ultrices gravida.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h5 class="collapsed" data-toggle="collapse" data-target="#mblb-2" aria-expanded="false">
                        Access Your Mobile Wallet
                      </h5>

                      <div id="mblb-2" class="collapse show" data-parent="#accordion">
                        <div class="acr-body">
                          <p>Molestie eu blandit eu sodales, nulla vitae nulla tempor et porta, ante nec commodo. Nulla non fringilla urna dolor vivamus, vulputate eu neque vivamus lacus in, imperdiet id sed malesuada per.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h5 class="collapsed" data-toggle="collapse" data-target="#mblb-3" aria-expanded="false">
                        Confirm information payover
                      </h5>

                      <div id="mblb-3" class="collapse" data-parent="#accordion">
                        <div class="acr-body">
                          <p>Blandit eu sodales, nulla vitae nulla tempor et porta, ante nec commodo. Nulla non fringilla urna dolor vivamus, vulputate eu neque vivamus lacus in, imperdiet id sed malesuada per.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="fee-charges" class="tab-pane fade">
                  <div class="accordion" id="accordion3">
                    <div class="accordion-item">
                      <h5 class="collapsed" data-toggle="collapse" data-target="#fc-1" aria-expanded="true">
                        Your Mobile Wallet
                      </h5>
                      <div id="fc-1" class="collapse" data-parent="#accordion">
                        <div class="acr-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscied do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspen disse ultrices gravida.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h5 class="collapsed" data-toggle="collapse" data-target="#fc-2" aria-expanded="false">
                        Input Wallet Informations
                      </h5>

                      <div id="fc-2" class="collapse show" data-parent="#accordion">
                        <div class="acr-body">
                          <p>Molestie eu blandit eu sodales, nulla vitae nulla tempor et porta, ante nec commodo. Nulla non fringilla urna dolor vivamus, vulputate eu neque vivamus lacus in, imperdiet id sed malesuada per.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h5 class="collapsed" data-toggle="collapse" data-target="#fc-3" aria-expanded="false">
                        Confirm information and payover
                      </h5>

                      <div id="fc-3" class="collapse" data-parent="#accordion">
                        <div class="acr-body">
                          <p>Blandit eu sodales, nulla vitae nulla tempor et porta, ante nec commodo. Nulla non fringilla urna dolor vivamus, vulputate eu neque vivamus lacus in, imperdiet id sed malesuada per.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Faq section end -->

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
