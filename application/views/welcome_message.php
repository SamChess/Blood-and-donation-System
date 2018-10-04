<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blood Bank and Donation System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/codeigniter/css/bootstrap.min.css">
    <!-- Font Awesome & Pixeden Icon Stroke icon font-->
    <link rel="stylesheet" href="/codeigniter/css/font-awesome.min.css">
    <link rel="stylesheet" href="/codeigniter/css/pe-icon-7-stroke.css">
    <!-- Google fonts - Roboto Condensed & Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700|Roboto:300,400">
    <!-- lightbox-->
    <link rel="stylesheet" href="/codeigniter/css/lightbox.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/codeigniter/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/codeigniter/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/codeigniter/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body class="home">
    <!-- navbar-->
    <header class="header">
      <div role="navigation" class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header"><a href="index.html" class="navbar-brand">Blood Bank & Donation System</a>
            <div class="navbar-buttons">
              <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
            </div>
          </div>
          <div id="navigation" class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="text.html">News</a></li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Blood Banks <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Nairobi</a></li>
                  <li><a href="#">Kisumu</a></li>
                  <li><a href="#">Mombasa</a></li>
                  <li><a href="#">Eldoret</a></li>
                   <li><a href="#">Kitui</a></li>
                   <li><a href="#">Namanga</a></li>
                   <li><a href="#">Garissa</a></li>
                </ul>
              </li>
              <li><a href="contact.html">Contact Us</a></li>
            </ul><a href="#" data-toggle="modal" data-target="#login-modal" class="btn navbar-btn btn-white pull-left"><i class="fa fa-sign-in"></i>Log in</a>
          </div>
        </div>
      </div>
    </header>
    <!-- *** LOGIN MODAL ***_________________________________________________________
    -->
    <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
            <h4 id="Login" class="modal-title">User Log In</h4>
          </div>
          <div class="modal-body">
            <form action="customer-orders.html" method="post">
              <div class="form-group">
                <input id="user_name" type="text" placeholder="username" class="form-control">
              </div>
              <div class="form-group">
                <input id="password_modal" type="password" placeholder="password" class="form-control">
              </div>
              <p class="text-center">
                <button type="button" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
              </p>
            </form>
            <p class="text-center text-muted">Not registered yet?</p>
            <p class="text-center text-muted"><a href="displaySignup.php"><strong>Register now</strong></a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** LOGIN MODAL END ***-->
    <div id="carousel-home" data-ride="carousel" class="carousel slide carousel-fullscreen carousel-fade">
      <!-- Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-home" data-slide-to="1"></li>
        <li data-target="#carousel-home" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for slides-->
      <div role="listbox" class="carousel-inner">
        <div style="background-image: url('/codeigniter/img/image1.jpg');" class="item active">
          <div class="overlay"></div>
          <div class="carousel-caption">
            <h1 class="super-heading">Give Blood</h1>
          </div>
        </div>
        <div style="background-image: url('/codeigniter/img/carousel2.jpg');" class="item">
          <div class="overlay"></div>
          <div class="carousel-caption">
            <h1 class="super-heading">Your Blood Contribution is valuable to All!</h1>

          </div>
        </div>
        <div style="background-image: url('/codeigniter/img/image2.jpg');" class="item">
          <div class="overlay"></div>
          <div class="carousel-caption">
            <h1 class="super-heading">Assist the needy</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="background-gray-lightest negative-margin">
      <div class="container">
        <h1> Why donate Blood?</h1>
        <p class="lead">Every day, blood donors help patients of all ages: accident and burn victims, heart surgery and organ transplant patients, and those battling cancer. In fact, every two seconds, someone in the Kenya needs blood. .</p>
        <p> <a href="text.html" class="btn btn-ghost">Continue reading   </a></p>
      </div>
   
    <!--   *** SERVICES ***-->
    <section class="background-gray-lightest">
      <div class="container clearfix">
        <div class="row services">
          <div class="col-md-12">
            <h2>Services</h2>
            <p class="lead margin-bottom--medium"> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
            <div class="row">
              <div class="col-sm-4">
                <div class="box box-services">
                  <div class="icon"><i class="pe-7s-alarm"></i></div>
                  <h4 class="services-heading">Available</h4>
                  <p>We are available 7 days a week for customer service.</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="box box-services">
                  <div class="icon"><i class="pe-7s-cloud"></i></div>
                  <h4 class="services-heading">Print</h4>
                  <p>Get the latest news on donation activities.</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="box box-services">
                  <div class="icon"><i class="pe-7s-coffee"></i></div>
                  <h4 class="services-heading">Dinner</h4>
                  <p>Enjoy a cup of tea after donating. </p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="box box-services">
                  <div class="icon"><i class="pe-7s-monitor"></i></div>
                  <h4 class="services-heading">Consulting</h4>
                  <p>Free consulatation by our experts</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="box box-services">
                  <div class="icon"><i class="pe-7s-signal"></i></div>
                  <h4 class="services-heading">Email</h4>
                  <p>Receive emails on the donation dates and time</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="box box-services">
                  <div class="icon"><i class="pe-7s-id"></i></div>
                  <h4 class="services-heading">Register &amp; Log in</h4>
                  <p>Create your own account and access free of charges. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--   *** SERVICES END ***-->
    <!-- portfolio-->
    <section id="portfolio" class="section--no-padding-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1>Gallery </h1>
            <p class="lead margin-bottom--big">To be inserted</p>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row no-space">
          <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-1.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 1"><img src="img/portfolio-1.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-2.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 2"><img src="img/portfolio-2.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-3.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 3"><img src="img/portfolio-3.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-4.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 4"><img src="img/portfolio-4.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-5.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 5"><img src="img/portfolio-5.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-6.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 6"><img src="img/portfolio-6.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-7.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 7"><img src="img/portfolio-7.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-8.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 8"><img src="img/portfolio-8.jpg" alt="" class="img-responsive"></a></div>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="footer__copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>&copy;2018 Blood Banking & Donation System</p>
            </div>
            <div class="col-md-6">
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/codeigniter/js/bootstrap.min.js"></script>
    <script src="/codeigniter/js/jquery.cookie.js"> </script>
    <script src="/codeigniter/js/lightbox.min.js"></script>
    <script src="/codeigniter/js/front.js"></script><!-- substitute:livereload -->
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>