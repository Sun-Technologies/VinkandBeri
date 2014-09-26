<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
  <title>Store Locator | Vink &amp; Beri LLC</title>  
  <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">  
  <meta charset="utf-8">  
  <link href="img/favicon.png" rel="shortcut icon">
  <?php include'php/header.php'; ?>
  <link rel='stylesheet' href="css/mapstyle.css">
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
      <li id="locationSelect"></li>
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
  <?php include 'php/footer-map.php'; ?>
<?php include_once("analyticstracking.php") ?>
  </body>
</html>