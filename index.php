<?php
  $language=isset($_GET['lng'])?$_GET['lng']:'english';
  $languages=array('arabic','french','english');
  if(in_array($language,$languages)){
    include "languages/".$language.".php";
  }
  else{
    include "languages/english.php";
  }
 ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rocama</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel='stylesheet' type='text/css' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'/>
    <link href="css/full-slider.css" rel="stylesheet">
    <link href="css/team.css" rel="stylesheet">
    <link href="css/tooltips.css" rel="stylesheet">
    <link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" rel="stylesheet">


    <!-- <link href="css/animte.css" rel="stylesheet"> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <script rel="JavaScript" src="sdk/tomtom.min.js"></script>
    <link rel='stylesheet' type='text/css' href='sdk/map.css'/>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.css" rel="stylesheet">

  </head>

  <body id="page-top">
<!-- email : Rocama.maroc@gmail.com -->
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img id="logo" src="img/logo2.png" alt="" width="50px">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about"><?= lang('ABOUT') ?></a>
              <span class="link-line"></span>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#projects"><?= lang('PROJECTS') ?></a>
              <span class="link-line"></span>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#findus-section"><?= lang('FIND_US') ?></a>
              <span class="link-line"></span>
            </li>
            <li class="nav-item">

              <a class="nav-link js-scroll-trigger" href="#subscribe">Subscribe</a>
              <span class="link-line"></span>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#"><?= lang('CONTACT') ?></a>

              <span class="link-line"></span>
            </li>
            <div class="dropdwn">
              <button class="dropbtn"><?= lang('LANGUAGE')?></button>
              <div class="dropdwn-content">
                <a href="?lng=english"><?= lang('ENGLISH')?></a>
                <a href="?lng=french"><?= lang('FRENCH')?></a>
                <a href="?lng=arabic"><?= lang('ARABIC')?></a>
              </div>
            </div>
          </ul>
        </div>
      </nav>

    <!-- Header -->
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div id="brand-name">
            <div style="position:relative;left:-50%;">
              <svg id="rocama" viewBox="0 0 960 300">
                <symbol id="s-text">
                  <text text-anchor="middle" x="50%" y="80%">Rocama</text>
                </symbol>

                <g class = "g-ants">
                  <use xlink:href="#s-text" class="text-copy"></use>
                  <use xlink:href="#s-text" class="text-copy"></use>
                  <use xlink:href="#s-text" class="text-copy"></use>
                  <use xlink:href="#s-text" class="text-copy"></use>
                  <use xlink:href="#s-text" class="text-copy"></use>
                </g>
              </svg>
            </div>
          </div>
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background:url('img/slide1.png');background-size:cover;">

            <div class="carousel-caption d-none d-md-block">
              <h3>Production des grains de plastique</h3>
            </div>
          </div>

        </div>

      </div>
    </header>

    <!-- About section -->
    <section id="about">
      <div class="icon-section">

      </div>
      <div class="content-section">
        <h1 class="section-title">About Us</h1>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos porro quam ut voluptate cumque optio sint harum praesentium pariatur facere, amet, repellendus ea repudiandae dolores maxime et sunt! Sit, laborum.</p>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos porro quam ut voluptate cumque optio sint harum praesentium pariatur facere, amet, repellendus ea repudiandae dolores maxime et sunt! Sit, laborum.</p>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos porro quam ut voluptate cumque optio sint harum praesentium pariatur facere, amet, repellendus ea repudiandae dolores maxime et sunt! Sit, laborum.</p>
      </div>
    </section>


<section style="height:100vh;background-color:#f4f5f7;">
  
<div class="panel panel-default" style="height : 50px;">
    <div class="col-lg-12 text-center team-title">Team</div>
</div>

<div class="container" style="margin-top: 13%;">
    <div class="row">
        <div class="col-md-4 col-sm-6" >
            <div class="our-team">
                <div class="pic">
                    <img src="img/boss.png" alt="">
                </div>
                <div class="team-content">
                    <h3 class="team-title">Williamson</h3>
                    <span class="post">Web Designer</span>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid dolore ducimus enim eum nam reiciendis repellendus sapiente tempore. Distinctio omnis ratione reiciendis tempora tenetur.?
                    </p>
                    <ul class="social-links">
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                        <li><a href="#" class="fab fa-skype"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="img/boss.png" alt="">
                </div>
                <div class="team-content">
                    <h3 class="team-title">Williamson</h3>
                    <span class="post">Web Designer</span>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid dolore ducimus enim eum nam reiciendis repellendus sapiente tempore. Distinctio omnis ratione reiciendis tempora tenetur.?
                    </p>
                    <ul class="social-links">
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                        <li><a href="#" class="fab fa-skype"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="img/boss.png" alt="">
                </div>
                <div class="team-content">
                    <h3 class="team-title">Williamson</h3>
                    <span class="post">Web Designer</span>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid dolore ducimus enim eum nam reiciendis repellendus sapiente tempore. Distinctio omnis ratione reiciendis tempora tenetur.?
                    </p>
                    <ul class="social-links">
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                        <li><a href="#" class="fab fa-skype"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- Where to find us Section -->

<section class="findus-section" style="background-image: url('img/s4.jpg');" id="find-us">

<div class="where-to-find-us-title text-center" style="">
  <div style="display: inline-block; width:70%;text-align: right;"><h1> Where To Find Us </h1></div>
  <div class="animated bounce" style="display:inline-block;font-size:9em;"><i class="ion-location" style="padding-left:40%;color:red"></i>

</div>

</div>

<div id='map' class="map col-md-10 offset-md-1" style="height:70vh;"></div>

</div>

</section>



<section class="subscribe-section" id="subscribe" style="background-color:#605866">
  <!-- title of section-->
  <div class="sub-title text-center">
    <div class="" style="background-image: url('img/22.png');background-size:cover; ;height: 9vh;width: 9vh; margin-left:46%;margin-bottom: 3%;"> </div>
    <h1>Subscribe To Receive News !!</h1>
  </div>
<div class="col-lg-8 offset-lg-3 sub-form">
  <form method="POST" class="text-center form-inline d-flex" action="mail.php">
    
  
    <input class="inp-sub" type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address..." name="email" style="">
    <button type="submit" class="sub-btn btn btn-primary animated">Subscribe</button>
  </form>
</div>

<!-- Join Us On Social Media -->

<div class="socials col-lg-12">
  <div class="socia-title">
    <h1 class="col-lg-4 offset-lg-4 text-center" style="font-size:3em;
  font-family: 'Nunito';
  color:white;"> Join Us </h1>
  </div>
</div>
<div class="col-lg-12" style="position:absolute;height:50%;padding-top: 5%;">
  <div class="informat col-lg-3" style="margin-left:4%;background-image: url('img/A1.jpg');">
    <!-- Mail -->
    <div class="icon-informat col-lg-4 offset-lg-4" style="height:100px;background-image: url('img/email.png');margin-top: 40px;"> </div>
    <div class="col-lg-12 text-center" style="position:absolute; padding-top: 60px;padding-left: 0 !important;">
      <h1>Email</h1>
     </div>
     <div class="text-center col-lg-10" style="position:absolute;">
       <h2 style="font-size: 1.5rem; padding-top: 190px;">rocama.maroc@gmail.com</h2>
     </div>
  </div>
  <div class="informat col-lg-3 offset-lg-1" style="background-image: url('img/A2.jpg');">
    <!-- Phone Number -->
    <div class="icon-informat col-lg-4 offset-lg-4" style="height:110px;background-image: url('img/phone.png');margin-top: 40px;"> </div>
    <div class="col-lg-12 text-center" style="position:absolute; padding-top: 60px;padding-left: 0 !important;">
      <h1 style="">Phone</h1>
     </div>
     
      <div class="text-center col-lg-11"  style="position:absolute;">
       <h2 style="font-size: 1.5rem; padding-top: 190px;">06 10 61 44 76</h2>
     </div>
  </div>
  <div class="informat col-lg-3 offset-lg-1" style="background-image:url('img/A3.jpg');">
    <!-- Address -->
    <div class="icon-informat col-lg-4 offset-lg-4" style="background-image: url('img/address.png'); height:110px;;margin-top: 40px;"> </div>
    <div class="col-lg-12" style="position:absolute; padding-top: 60px;padding-left: 0 !important;">
      <h1 style="text-align: center;">Address</h1>
     </div>
     <div class="text-center col-lg-11"  style="position:absolute;">
       <h2 style="font-size: 1.5rem; padding-top: 190px;"> Av . something something</h2>
     </div>

  </div>
</div>
</section>



    <!-- Footer -->

    <footer class="bg-black small text-center text-white-50">
      <div class="container">
        <div class="social-btns col-lg-12 offset-4">
        <a class="btn facebook" href="#"> 
            <i class="fa ion-social-facebook"></i>
        </a>
        <a class="btn twitter" href="#">
            <i class="fa ion-social-whatsapp"></i>
        </a>
        <a class="btn google" href="#">
            <i class="fa ion-social-whatsapp"></i></a>
        <a class="btn dribbble" href="#">
            <i class="fa ion-social-whatsapp"></i>
        </a>
        <a class="btn skype" href="#">
            <i class="fa ion-social-instagram"></i>
        </a>
</div>
</div>
      <div class="container" style="padding-top:20px;font-size:15px">
        Copyright &copy; Rocama 2018
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script text="JavaScript">

      tomtom.setProductInfo('Rocama', '1.0.0');
      tomtom.routingKey('DAkh2hZGNBtuPG9Kyh0ebhBeMGQXRG6T');
tomtom.searchKey('DAkh2hZGNBtuPG9Kyh0ebhBeMGQXRG6T');
var map = tomtom.L.map('map', {
    key: 'DAkh2hZGNBtuPG9Kyh0ebhBeMGQXRG6T',
    source: 'vector',
    basePath: 'https://api.tomtom.com/maps-sdk-js/4.43.11/examples/sdk'
});
map.zoomControl.setPosition('topright');
var unitSelector = tomtom.unitSelector.getHtmlElement(tomtom.globalUnitService);
var languageSelector = tomtom.languageSelector.getHtmlElement(tomtom.globalLocaleService, 'search');
var unitRow = document.createElement('div');
var unitLabel = document.createElement('label');
unitLabel.innerHTML = 'Unit of measurement';
unitLabel.appendChild(unitSelector);
unitRow.appendChild(unitLabel);
unitRow.className = 'input-container';
var langRow = document.createElement('div');
var langLabel = document.createElement('label');
langLabel.innerHTML = 'Search language';
langLabel.appendChild(languageSelector);
langRow.appendChild(langLabel);
langRow.className = 'input-container';
tomtom.controlPanel({
    position: 'bottomright',
    title: 'Settings',
    collapsed: true
})
    .addTo(map)
    .addContent(unitRow)
    .addContent(langRow);
// Adding the route inputs fields widget
var routeInputs = tomtom.routeInputs().addTo(map);
// Adding the route widget
var routeOnMapView = tomtom.routeOnMap().addTo(map);
// Connecting the routeInputs widget with the routeOnMap widget
routeInputs.on(routeInputs.Events.LocationsFound, function(eventObject) {
    routeOnMapView.draw(eventObject.points);
});
routeInputs.on(routeInputs.Events.LocationsCleared, function(eventObject) {
    routeOnMapView.draw(eventObject.points);
});
// Show error in widget when location cannot be autodetected
routeInputs.on(routeInputs.Events.LocationError, function() {
    routeInputs.showLocationNotFoundMessageBox();
});

    </script>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.js"></script>

  </body>

</html>
