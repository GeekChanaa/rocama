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
              <a class="nav-link js-scroll-trigger" href="#"><?= lang('PROJECTS') ?></a>
              <span class="link-line"></span>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#"><?= lang('FIND_US') ?></a>
              <span class="link-line"></span>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#subscribe">Subscribe</a>

              <a class="nav-link js-scroll-trigger" href="#"><?= lang('CONTACT') ?></a>
              <span class="link-line"></span>
            </li>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= lang('LANGUAGE') ?>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="?lng=arabic"><?= lang('ARABIC') ?></a>
                <a class="dropdown-item" href="?lng=french"><?= lang('FRENCH') ?></a>
                <a class="dropdown-item" href="?lng=english"><?= lang('ENGLISH') ?></a>
              </div>
            </div>
          </ul>
        </div>
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
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>

        </div>

      </div>
    </header>


    <section id="about">
      <div class="icon-section">

      </div>
      <div class="content-section">
        <h1>About Us</h1>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos porro quam ut voluptate cumque optio sint harum praesentium pariatur facere, amet, repellendus ea repudiandae dolores maxime et sunt! Sit, laborum.</p>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos porro quam ut voluptate cumque optio sint harum praesentium pariatur facere, amet, repellendus ea repudiandae dolores maxime et sunt! Sit, laborum.</p>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos porro quam ut voluptate cumque optio sint harum praesentium pariatur facere, amet, repellendus ea repudiandae dolores maxime et sunt! Sit, laborum.</p>
      </div>
    </section>
    <!-- Projects Section -->
    <section id="projects" class="projects-section bg-light">
      <div class="container">

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
          <div class="col-xl-8 col-lg-7">
            <img class="img-fluid mb-3 mb-lg-0" src="img/bg-masthead.jpg" alt="">
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <h4>Shoreline</h4>
              <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
            </div>
          </div>
        </div>

        <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6">
            <img class="img-fluid" src="img/demo-image-01.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h4 class="text-white">Misty</h4>
                  <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
                  <hr class="d-none d-lg-block mb-0 ml-0">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
          <div class="col-lg-6">
            <img class="img-fluid" src="img/demo-image-02.jpg" alt="">
          </div>
          <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                  <h4 class="text-white">Mountains</h4>
                  <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                  <hr class="d-none d-lg-block mb-0 mr-0">
                </div>
              </div>
            </div>
          </div>
        </div><div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6">
            <img class="img-fluid" src="img/demo-image-01.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h4 class="text-white">Misty</h4>
                  <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
                  <hr class="d-none d-lg-block mb-0 ml-0">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
          <div class="col-lg-6">
            <img class="img-fluid" src="img/demo-image-02.jpg" alt="">
          </div>
          <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                  <h4 class="text-white">Mountains</h4>
                  <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                  <hr class="d-none d-lg-block mb-0 mr-0">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Team Section -->
  <section>
<div class="panel panel-default" style="height : 50px;">
    <div class="panel-body">A Basic Panel</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-">
            <div class="box team-member" style="background-image:url('img/demo-image-02.jpg');">
                <div class="box-content">
                    <h3 class="title">Williamson</h3>
                    <span class="post">Manager</span>
                    <ul class="icon">
                        <li data-social='facebook'><a href="https://www.facebook.com/mohamed.chanaa.37 " target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li data-social='phone'><a href="#"><i class="fas fa-phone"></i></a></li>
                        <li data-social='instagram'><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <span data-social='facebook'><a href="https://www.facebook.com/mohamed.chanaa.37"></a>Facebook.com/Chanaa</span>
                        <span data-social='phone'>0666707512</span>
                        <span data-social='instagram'>@SimoChanaa</span>

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="box team-member" style="background-image:url('img/demo-image-01.jpg');">
                <div class="box-content">
                    <h3 class="title">Miranda Roy</h3>
                    <span class="post">Manager</span>
                    <ul class="icon">
                        <li data-social='facebook'><a href="https://www.facebook.com/mohamed.chanaa.37 " target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li data-social='phone'><a href="#"><i class="fas fa-phone"></i></a></li>
                        <li data-social='instagram'><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <span data-social='facebook'><a href="https://www.facebook.com/mohamed.chanaa.37"></a>Facebook.com/Chanaa</span>
                        <span data-social='phone'>0666707512</span>
                        <span data-social='instagram'>@SimoChanaa</span>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 col-sm-6">
          <div class="coord" >
            <div class="box team-member" style="background-image:url('img/bg-masthead.jpg');">
                <div class="box-content">
                    <h3 class="title">Williamson</h3>
                    <span class="post">Secratary</span>
                    <ul class="icon">
                        <li data-social='facebook'><a href="https://www.facebook.com/mohamed.chanaa.37 " target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li data-social='phone'><a href="#"><i class="fas fa-phone"></i></a></li>
                        <li data-social='instagram'><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <span data-social='facebook'><a href="https://www.facebook.com/mohamed.chanaa.37"></a>Facebook.com/Chanaa</span>
                        <span data-social='phone'>0666707512</span>
                        <span data-social='instagram'>@SimoChanaa</span>
                    </ul>
                  </div>
                </div>
            <h1 class="text-center" style="margin-top:5px;">adnane</h1>
          </div>
        </div>
    </div>
</div>

</section>

<!-- Where to find us Section -->

<section class="findus-section" style="background-image: url('img/s4.jpg');" id="find-us">
<div class="where-to-find-us-title" style="">
  <div style="display: inline-block; width:70%;text-align: right;"><h1> Where To Find Us </h1></div>
  <div class="animated bounce" style="display:inline-block;font-size:9em;"><i class="ion-location" style="padding-left:40%;color:red"></i>

</div>

</div>

<div id='map' class="map col-md-10 offset-md-1" style="height:70vh;"></div>
</div>

</section>


<<<<<<< HEAD:index.html

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
    <h1 class="col-lg-4 offset-lg-4 text-center"> Join Us </h1>
  </div>
</div>
<div class="col-lg-12" style="position:absolute;height:50%">
  <div class="informat col-lg-3">
    <!-- Mail -->

  </div>
  <div class="informat col-lg-3 offset-lg-1">
    <!-- Phone Number -->
  </div>
  <div class="informat col-lg-3 offset-lg-1">
    <!-- Address -->
  </div>
</div>

<!--

<div class='containerr no-animation'>
  <div class='segment'>
    <div class='fa ion-social-facebook social-icon'></div>
  </div>
  <div class='segment'>
    <div class='fa ion-social-snapchat social-icon'></div>
  </div>
  <div class='segment'>
    <div class='fa ion-social-instagram social-icon'></div>
  </div>
  <div class='segment'>
    <div class='fa ion-social-whatsapp social-icon'></div>
  </div>
</div>
<div class="">
<div class='btn btn-secondary main-button social' style="">
  Social Media
</div>


</div>
-->


=======
    <!-- Subscribe Section -->

<section class="subscribe-section">
>>>>>>> ace850c14d9e11343756fa9a9751f1b7a5c6ff69:index.php

</section>



    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
      <div class="container">
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