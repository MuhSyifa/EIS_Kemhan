<!DOCTYPE html>
<html class="no-js">
<head>

    <!-- BASICS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>
        <?php if ($title)
        { 
            echo $title; 
        }
        else
        { 
            echo 'Default Title'; 
        }
        ?>
    </title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/ico" href="<?php echo base_url(); ?>images/logo-dephan.png" />

    <link href="<?php echo base_url(); ?>template/frontpage/assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- <link href="<?php echo base_url(); ?>template/frontpage/assets/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url(); ?>template/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/frontpage/assets/css/vendor/animate/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/frontpage/assets/css/vendor/bootstrap-checkbox.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/frontpage/assets/js/vendor/text-rotator/css/simpletextrotator.css">

    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/frontpage/assets/js/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/frontpage/assets/js/vendor/owl-carousel/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/frontpage/assets/js/vendor/owl-carousel/css/owl.transitions.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>template/frontpage/assets/js/vendor/nivo-lightbox/css/nivo-lightbox.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/frontpage/assets/js/vendor/nivo-lightbox/css/themes/default/default.css" type="text/css" />


    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/frontpage/assets/css/minimal.min.css">

  </head>
   
  <body>






    <!-- Preloader -->
    <div class="mask"><div id="loader"></div></div>
    <!--/Preloader -->






    <!-- BEGIN NAVBAR -->
    <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:80px; height:80px;-webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);" data-300="line-height:40px; height:40px;-webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);">
      
      <div class="container">
          
        




        <!-- Branding -->
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url(''); ?>home" data-0="padding-top:15px;padding-left: 55px;background-position: 0 16px;background-size: 44px 44px;font-size: 24px;height: 80px;" data-300="padding-top: 10px;padding-left: 40px;background-position: 0 7px;background-size: 34px 34px;font-size: 16px; height: 50px;">
            <center>
              <img class="subheading" src="<?php echo base_url(''); ?>images/logo.png">
              <!-- <span class="subheading" data-0="font-size: 12px;line-height: 13px;" data-300="font-size: 9px;line-height: 8px;">SISTEM SIMULASI</span>
              <strong>SIBER</strong> -->  
            </center>
          </a>
          <div class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <a href="#">
              <i class="fa fa-bars"></i>
            </a>
          </div>
        </div>
        <!-- Branding end -->

        





        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

            <li class="active"><a href="index.html" data-0="padding: 30px 25px 22px;border-bottom-width:4px;" data-100="padding: 24px 25px 16px;border-bottom-width:3px;" data-200="padding: 15px 25px 12px;border-bottom-width:2px;" data-300="padding: 15px 25px 10px;border-bottom-width:1px;" style="display: none">Home</a></li>

            <li class="dropdown dropdown-mega" data-init="onHover" style="display: none">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-0="padding: 30px 25px 22px;border-bottom-width:4px;" data-100="padding: 24px 25px 16px;border-bottom-width:3px;" data-200="padding: 15px 25px 12px;border-bottom-width:2px;" data-300="padding: 15px 25px 10px;border-bottom-width:1px;">
                Mega Menu <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <div class="megamenu-content">
                    <div class="row">

                      <div class="col-md-4 megamenu-col">
                        <h4>Computers</h4>
                        <ul>
                          <li><a href="index.html">Desktop Computers</a></li>
                          <li><a href="index.html">Notebook Computers</a></li>
                          <li><a href="index.html">Point of Sale Computers</a></li>
                          <li><a href="index.html">Tablets and Tablet PCs</a></li>
                          <li><a href="index.html">Thin Clients</a></li>
                          <li><a href="index.html">Workstations</a></li>
                        </ul>
                      </div>

                      <div class="col-md-4 megamenu-col">
                        <h4>Memory</h4>
                        <ul>
                          <li><a href="index.html">Desktop Memory</a></li>
                          <li><a href="index.html">Flash Memory</a></li>
                          <li><a href="index.html">Mac Memory</a></li>
                          <li><a href="index.html">Memory Adapters</a></li>
                          <li><a href="index.html">Mobile Phone Memory</a></li>
                          <li><a href="index.html">Notebook Memory</a></li>
                          <li><a href="index.html">Server Memory</a></li>
                          <li><a href="index.html">USB Flash Drive</a></li>
                        </ul>
                      </div>

                      <div class="col-md-4 megamenu-col">
                        <h4>Accessories</h4>
                        <ul>
                          <li><a href="index.html">Computer Components</a></li>
                          <li><a href="index.html">Keyboards</a></li>
                          <li><a href="index.html">Speakers</a></li>
                        </ul>

                        <h4>Scanners</h4>
                        <ul>
                          <li><a href="index.html">Barcode Scanner</a></li>
                          <li><a href="index.html">Document Scanner</a></li>
                        </ul>
                      </div>

                    </div>
                  </div>
                </li>
              </ul>
            </li>

            <li class="dropdown" data-init="onHover" style="display: none">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-0="padding: 30px 25px 22px;border-bottom-width:4px;" data-100="padding: 24px 25px 16px;border-bottom-width:3px;" data-200="padding: 15px 25px 12px;border-bottom-width:2px;" data-300="padding: 15px 25px 10px;border-bottom-width:1px;">
                Pages <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="about.html">Abous Us</a></li>
                <li><a href="prices.html">Prices</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="login.html">Login Page</a></li>
                <li><a href="signup.html">Sign Up</a></li>
                <li><a href="page-404.html">404</a></li>
                <li><a href="page-500.html">500</a></li>
                <li><a href="search-results.html">Search Results</a></li>
                <li><a href="contacts.html">Contact</a></li>
              </ul>
            </li>

            <li class="dropdown" data-init="onHover" style="display: none">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-0="padding: 30px 25px 22px;border-bottom-width:4px;" data-100="padding: 24px 25px 16px;border-bottom-width:3px;" data-200="padding: 15px 25px 12px;border-bottom-width:2px;" data-300="padding: 15px 25px 10px;border-bottom-width:1px;">
                Portfolio <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="portfolio-4.html">Portfolio 4</a></li>
                <li><a href="portfolio-3.html">Portfolio 3</a></li>
                <li><a href="portfolio-2.html">Portfolio 2</a></li>
              </ul>
            </li>

            <!-- <li class="dropdown" data-init="onHover">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-0="padding: 30px 25px 22px;border-bottom-width:4px;" data-100="padding: 24px 25px 16px;border-bottom-width:3px;" data-200="padding: 15px 25px 12px;border-bottom-width:2px;" data-300="padding: 15px 25px 10px;border-bottom-width:1px;">
                Blog <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="blog.html">Blog Page</a></li>
                <li><a href="blog-item.html">Blog Item</a></li>
              </ul>
            </li> -->

            <li class="active"><a href="<?php echo base_url(''); ?>login" data-0="padding: 30px 25px 22px;border-bottom-width:4px;" data-100="padding: 24px 25px 16px;border-bottom-width:3px;" data-200="padding: 15px 25px 12px;border-bottom-width:2px;" data-300="padding: 15px 25px 10px;border-bottom-width:1px;">Login</a></li>

            <li class="search"><input type="text" placeholder="&#61442;" data-0="margin-top:23px" data-300="margin-top:10px"></li>

          </ul>
        </div><!--/.navbar-collapse -->
      
      </div>

    </div>
    <!-- END NAVBAR -->









    <!-- BEGIN SLIDER -->
    <section class="section" style="margin-top: 22px;">
        <div class="col-md-12" style="margin-bottom: 25px;">
            <img style="width: 100%;" src="<?php echo base_url(''); ?>images/<?php echo $data_banner->name; ?>">
        </div>
    </section>
        
        <!-- <div class="item">
          
          <div class="container">
            <div class="row">
              
              <div class="col-md-12">
                  <img src="<?php echo base_url(''); ?>images/eis.png">
              </div>
              <div class="col-xs-6">
                <h2 style="color: #717171">EIS Veteran</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </div>

              <div class="col-xs-6 text-right"><img src="<?php echo base_url(); ?>images/eis.png" class="caption" data-animation="bounceIn" data-delay="500"></div>

            </div>
          </div>
          
        </div> -->

        <!-- <div class="item">
          
          <div class="container">
            <div class="row">
              
              <div class="col-xs-6">
                <h2 style="color: #717171">EIS Veteran</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </div>

              <div class="col-xs-6 text-right"><img src="<?php echo base_url(); ?>template/frontpage/assets/images/slider/1.png" class="caption" data-animation="bounceIn" data-delay="500"></div>

            </div>
          </div>
          
        </div>

        <div class="item">

          <div class="container">
            <div class="row">
              
              <div class="col-xs-6">
                <h2 class="uppercase no-margin caption" data-animation="rotateInDownLeft" data-delay="800">Minoral Admin</h2>
                <h1 class="uppercase no-top-margin caption" data-animation="rollIn" data-delay="1200">Template</h1>
                <p class="lead caption" data-animation="fadeInLeft" data-delay="1500">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <a href="http://themeforest.net/item/minoral-responsive-admin-template/6867448" target="_blank" class="btn btn-lg btn-bordered caption" data-animation="rubberBand" data-delay="1800">Purchase</a>
              </div>
              
              <div class="col-xs-6 text-right"><img src="<?php echo base_url(); ?>template/frontpage/assets/images/slider/2.png" class="caption" data-animation="pulse" data-delay="500"></div>

            </div>
          </div>

        </div>

        <div class="item">
          
          <div class="container">
            <div class="row">
              
              <div class="col-xs-6">
                <h2 class="uppercase no-margin caption" data-animation="fadeInDown" data-delay="800">The Kamarel Admin</h2>
                <h1 class="uppercase no-top-margin caption" data-animation="fadeInLeft" data-delay="1200">Template</h1>
                <p class="lead caption" data-animation="fadeInLeft" data-delay="1500">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <a href="http://themeforest.net/item/the-kamarel/5113091" target="_blank" class="btn btn-lg btn-bordered caption" data-animation="rotateInDownLeft" data-delay="1800">Purchase</a>
              </div>
              
              <div class="col-xs-6 text-right"><img src="<?php echo base_url(); ?>template/frontpage/assets/images/slider/3.png" class="caption" data-animation="fadeInRight" data-delay="500"></div>

            </div>
          </div>
          
        </div> -->

      <!-- </div>  -->

    <!-- </div> -->
    <!-- END SLIDER -->








    <!-- FEAUTRED -->
    <section class="section featured bg-gray">
      <div class="container">
        <div class="row">
          
          <div class="col-md-10">
            
            <p class="lead"><span class="el-active">LAB SIMULASI <strong>SIBER</strong></span></p>

            <p><?php echo $data_tooltip->deskripsi; ?></p>
          </div>

          <div class="col-md-2">
            <a href="<?php echo base_url(''); ?><?php echo $data_tooltip->link; ?>">
              <button type="button" class="btn btn-lg btn-theme uppercase divided">Check it <span class="btn-side"><i class="fa fa-chevron-right"></i></span></button>
            </a>
          </div>

        </div>
      </div>
    </section>
    <!-- END FEATURED -->








    <!-- WHAT YOU CAN GET -->
    <section class="section">
      <div class="container">
        <div class="row">
          
          <div class="col-md-12">
            
            <h1 class="headline"><strong>APLIKASI</strong> INTERNAL</h1>

            <p class="lead text-center less-width"><?php echo $data_listaplikasi->deskripsi; ?></p>

            <div class="row">

              <?php 
                  if ($data) {
                        foreach ($data as $value) {
              ?>

              <div class="col-md-4 col-sm-6">
                <div class="highlight appear-el" data-animation="fadeInLeft">
                  <i class="<?php echo $value->icon; ?>"></i>
                  <h5 class="uppercase"><strong><?php echo $value->title; ?></strong></h5>
                  <img style="margin-bottom: 18px; width: 100%" src="<?php echo base_url(''); ?>images/<?php echo $value->gambar; ?>"><br><br>
                  <p><?php echo $value->deskripsi; ?></p>
                </div>
              </div>

              <?php 
                        }
                  }
              ?>

            </div>

          </div>

        </div>
      </div>
    </section>
    <!-- END WHAT YOU CAN GET -->




   <!-- FEAUTRED -->
    <section class="section featured bg-gray">

      <div class="container">
        <div class="row">

          <div class="col-sm-4">
            <div class="block appear-el animated fadeInLeft" data-animation="fadeInLeft">

              <h3 class="uppercase no-top-margin"><strong>Statistik</strong> Komulatif</h3>

              <p>Berisi Tentang Data tatistik Komulatif dari Aplikasi Internal Pothan KEMETERIAN PERTAHANAN RI.</p>

            </div>
          </div>

          <div class="col-sm-8">
            <div class="block appear-el animated fadeIn" data-animation="fadeIn">

              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" data-percent="80%" style="width: 80%;">
                  <i class="fa fa-users"></i> Bela Negara
                  <div class="progress-status">80%</div>
                </div>
              </div>

              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" data-percent="90%" style="width: 90%;">
                  <i class="fa fa-cubes"></i> Komponen Cadangan
                  <div class="progress-status">90%</div>
                </div>
              </div>

              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-percent="60%" style="width: 60%;">
                  <i class="fa fa-briefcase"></i> Komponen Pendukung
                  <div class="progress-status">60%</div>
                </div>
              </div>

              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" data-percent="85%" style="width: 85%;">
                  <i class="fa fa-laptop"></i> Teknologi dan Industri Pertahanan
                  <div class="progress-status">85%</div>
                </div>
              </div>

              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" data-percent="85%" style="width: 85%;">
                  <i class="fa fa-star-half-o"></i> Veteran
                  <div class="progress-status">85%</div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- END FEATURED -->





    <!-- FOOTER -->
    <footer id="footer">

      <div class="footer-bottom">
        <div class="container">
          <div class="row">

            <div class="col-md-12 copyright">
              &copy; Copyright 2017 by <a href="<?php echo $data_footer->link; ?>"><?php echo $data_footer->deskripsi; ?></a>. All Rights Reserved.
            </div>

          </div>
        </div>
      </div>

    </footer>
    <!-- END FOOTER -->







    <!-- SCROLL TOP -->
    <div class="scroll-top">
      <a href="#">
        <i class="fa fa-angle-up"></i>
      </a>
    </div>
    <!-- END SCROLL TOP -->










    
    <script src="<?php echo base_url(); ?>template/frontpage/assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="<?php echo base_url(); ?>template/assets/js/jquery.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>template/frontpage/assets/js/vendor/bootstrap/bootstrap.min.js"></script>

    <script src="<?php echo base_url(); ?>template/frontpage/assets/js/vendor/skrollr/skrollr.min.js"></script>

    <script src="<?php echo base_url(); ?>template/frontpage/assets/js/vendor/text-rotator/jquery.simple-text-rotator.js"></script>

    <script src="<?php echo base_url(); ?>template/frontpage/assets/js/vendor/owl-carousel/owl.carousel.min.js"></script>

    <script src="<?php echo base_url(); ?>template/frontpage/assets/js/vendor/nivo-lightbox/nivo-lightbox.min.js"></script>

    <script src="<?php echo base_url(); ?>template/frontpage/assets/js/vendor/tweet-js/jquery.tweet.min.js"></script>

    <script src="<?php echo base_url(); ?>template/frontpage/assets/js/vendor/vticker/jquery.vticker.min.js"></script>

    <script src="<?php echo base_url(); ?>template/frontpage/assets/js/vendor/jflickrfeed/jflickrfeed.min.js"></script>

    <script src="<?php echo base_url(); ?>template/frontpage/assets/js/vendor/appear/jquery.appear.js"></script>

    <script src="<?php echo base_url(); ?>template/frontpage/assets/js/vendor/parallax/jquery.parallax-1.1.3.js"></script>

    <!-- <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script> -->    

    <script src="<?php echo base_url(); ?>template/frontpage/assets/js/minimal.min.js"></script>

    <script>
      $(function(){
        // rotate tweets
        $('.twitter-feed').vTicker('init', {
          speed: 500,
          pause: 4000,
          padding: 20
        });
      })

      $(window).load(function(){


        //Google Map
        var latlng = new google.maps.LatLng(48.1782889,17.1488987);
        var settings = {
          zoom: 13,
          center: new google.maps.LatLng(48.1782889,17.1488987), mapTypeId: google.maps.MapTypeId.ROADMAP,
          mapTypeControl: false,
          scrollwheel: false,
          draggable: true,
          mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
          navigationControl: false,
          navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
          mapTypeId: google.maps.MapTypeId.ROADMAP};


        var map = new google.maps.Map(document.getElementById("map-canvas"), settings);

        google.maps.event.addDomListener(window, "resize", function() {
          var center = map.getCenter();
          google.maps.event.trigger(map, "resize");
          map.setCenter(center);
        });

        var contentString = '<div id="content">'+
                '<div id="siteNotice">'+
                '</div>'+
                '<h3 id="firstHeading" class="no-top-margin"><strong>Office</strong></h3>'+
                '<div id="bodyContent">'+
                '<p>Here you can find us!</p>'+
                '</div>'+
                '</div>';
        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        var companyPos = new google.maps.LatLng(48.1782889,17.1488987);

        var companyMarker = new google.maps.Marker({
          position: companyPos,
          map: map ,
          title:"Our Office",
          zIndex: 3});



        google.maps.event.addListener(companyMarker, 'click', function() {
          infowindow.open(map,companyMarker);
        });

      });
    </script>

  </body>

<!-- Mirrored from tattek.sk/minimal/frontpage/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Aug 2014 15:19:28 GMT -->
</html>