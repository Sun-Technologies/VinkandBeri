<html xmlns="http://www.w3.org/1999/xhtml">
  <html>
<head>
  <title>Store Locator | Vink &amp; Beri LLC</title>  
  <meta charset="utf-8">  
  <link href="img/favicon.png" rel="shortcut icon">
  <?php include'php/header.php'; ?>
  <link rel='stylesheet' href="css/mapstyle.css">
  </head>
  <body class="fixed-header"> 
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
  <div class="container">
    <div class="row">
    <div class="span3" id="map-details">
    <form class="form-search">
    <input type="text" id="addressInput"/>
    <select id="radiusSelect" class="span2" style="width: 201px;">
      <option value="5" selected>5mi</option>
      <option value="10">10mi</option>
      <option value="15">15mi</option>
      <option value="20">20mi</option>
      <option value="25">25mi</option>
    </select>
    <input type="button" class="btn" onclick="searchLocations()" value="Go!" id="go-button"/>
    </form>
    <div class="map_canvas"></div>
    <div class="locationhide">
      <div id="locationSelectresults"></div>
      <div id="locationSelect" style="max-height: 550px; overflow: auto;"></div>
    </div>
    </div>
    <div class="span9">
    <div id="map" class="location-height"></div>
    </div>
  </div>
  </div>
  </section>
  </div>
  </div>
  <?php include 'php/footer.php'; ?>
  <?php include 'php/footer-map.php' ?>
  </body>
</html>