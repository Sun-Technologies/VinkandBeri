<html xmlns="http://www.w3.org/1999/xhtml">
  <html>
<head>
  <title>Store Locator | Vink &amp; Beri LLC</title>  
  <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">  
  <meta charset="utf-8">  
  <link href="img/favicon.png" rel="shortcut icon">
  <?php include'php/header.php'; ?>
  <style type="text/css">
  .sbtnf:after, .sbtnf:after {
  content: 'compensation_of_lacking_text';
  display: none;
  }
  .social .sbtnf {
    padding-top: 5%;
  }
  </style>
  </head>
  <body style="margin:0px; padding:0px;" class="fixed-header"> 
  <div class="page-box">
  <div class="page-box-content">
  <?php include'php/header-navs.php'; ?>  
  <div class="breadcrumb-box">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="index.php">Home</a> <span class="divider">/</span></li>
      <li class="active">Store Locator</li>
    </ul> 
  </div>
  </div>
  <section id="main">
  <header class="page-header">
    <div class="container">
    <h1 class="title">Store Locator</h1>
    </div>
  </header>
    <div class="row" style="margin-top: 5%; margin-bottom: 5%;">
    <div class="span3" style="padding-left: 5%;">
    <form class="form-search">
    <input type="text" id="addressInput" style="height: 40px;" placeholder="Enter Zip Code"/>
    <input type="button" class="btn" onclick="searchLocations()" value="Go!"/><br><br>
    <select id="radiusSelect" class="span3">
      <option value="5" selected>5mi</option>
      <option value="10">10mi</option>
      <option value="15">15mi</option>
      <option value="20">20mi</option>
      <option value="25">25mi</option>
    </select>
    </form>
    <ul>
      <li id="locationSelect" placeholder="See Results"></li>
    </ul>
    </div>
    <div class="span9" style="padding-left: 5%;">
    <div id="map" style="height: 80%"></div>
    </div>
  </div>
  </section>
  </div>
  </div>
  <?php include 'php/footer.php'; ?>
  <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.2.0.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/map.js"></script>
  <script src="js/price-regulator/jshashtable-2.1_src.js"></script>
  <script src="js/price-regulator/jquery.numberformatter-1.2.3.js"></script>
  <script src="js/price-regulator/tmpl.js"></script>
  <script src="js/price-regulator/jquery.dependClass-0.1.js"></script>
  <script src="js/price-regulator/draggable-0.1.js"></script>
  <script src="js/price-regulator/jquery.slider.js"></script>
  <script src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
  <script src="js/jquery.touchSwipe.min.js"></script>
  <script src="js/jquery.elevateZoom-2.5.5.min.js"></script>
  <script src="js/jquery.imagesloaded.min.js"></script>
  <script src="js/jquery.themepunch.plugins.min.js"></script>
  <script src="js/jquery.themepunch.revolution.min.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/jquery.sparkline.min.js"></script>
  <script src="js/jquery.easy-pie-chart.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.knob.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/country.js"></script>
  <script src="js/masonry.pkgd.min.js"></script>
  <script src="js/morris.min.js"></script>
  <script src="js/raphael.min.js"></script>
  <script src="js/video.js"></script>
  <!--<script src="js/selectBox.js"></script>-->
  <script src="js/blur.min.js"></script>
  <!--<script src="js/main.js"></script>-->
<?php include_once("analyticstracking.php") ?>
  </body>
</html>