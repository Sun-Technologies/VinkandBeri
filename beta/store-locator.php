<!DOCTYPE html>
<html>
<head>
  <title>Store Locator | Vink &amp; Beri LLC</title>  <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">  <meta charset="utf-8">  <link href="img/favicon.png" rel="shortcut icon">
  <?php include'php/header.php'; ?>
  <!-- css -->        
  <link href="css/jlocator.css" rel="stylesheet" type="text/css" />
  <!-- font awesome -->
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
    
 
</head>
<?php include "store-list.php" ?>
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
</div><!-- .breadcrumb-box -->
<section id="main">
  <header class="page-header">
    <div class="container">
    <h1 class="title">Store Locator</h1>
    </div>
  </header>
  <div class="container">
    <!-- STORE LOCATOR DEMO -->
<div id="jlocator" style="border-style:none">

   <!-- panel -->
   <div class="panel" data-type="panel">
   
      <!-- controls -->
      <div class="controls" data-type="controls">
      
         <div class="box">
        
            <input 
               class="autocomplete left"
               data-control-type="autocomplete" 
               data-control-name="autocomplete" 
               data-control-action="filter"
               data-radius="100000" 
               type="text"
               placeholder="Enter a location"
            /><!-- data-radius in meters -->
         </div>
         
        
         
         <div class="box">
         
            <!-- paging -->
            <div 
               class="paging-results left" 
               data-type="Page {current} of {pages}" 
               data-control-type="label" 
               data-control-name="paging" 
               data-control-action="paging"></div>
               
            <div 
               class="paging left" 
               data-control-type="placeholder" 
               data-control-name="paging" 
               data-control-action="paging"
               data-items-per-page="5"></div>
            </div>
      </div>
      
      <!-- store list -->
      <div class="stores box" data-type="stores">
         <?php 
          foreach ($store_list as $store) {
         ?>
              <!-- store -->
              <div 
                data-type="store" 
                class="store box"
                data-latitude=<?php echo "$store[5]"  ?> 
                data-longitude=<?php echo "$store[6]"  ?>
                <p class="art">
                  <span class="title" data-type="title"><?php echo "$store[0]" ?></span>,<br>
                  <span data-type="address"><?php echo "$store[1]" ?></span>,<br>
                  <span data-type="city"><?php echo "$store[2]" ?></span>,<br>
                  <span data-type="state"> <?php echo "$store[3]" ?></span>,<br>
                  <span data-type="country"><?php echo "$store[4]" ?></span><br/>
                </p>
               </div> 
        <?php
          }
         ?>
        
        
                
                
         
        
         
      </div>
      
      <!-- no results -->
      <div class="box no-results" data-type="no-results">
         <p>No results found</p>
      </div>
      
   </div>
   
   <!-- map -->
   <div class="map" data-type="map"></div>
   
</div>
<!-- end of STORE LOCATOR DEMO -->
  
  </div><!-- .container -->
</section><!-- #main -->
</div><!-- .page-box -->
</div><!-- .page-box-content -->
<?php include 'php/footer.php'; ?>
<?php include 'php/footer-js.php'; ?>
 <!-- jlocator is based on jplist plugin: http://jplist.no81no.com -->
  <script src="js/jplist.min.js"></script>  

  <!-- jlocator -->   
  <script src="http://maps.google.com/maps/api/js?sensor=false&libraries=places,geometry"></script>
  <script src="js/jlocator.min.js"></script>

  <!-- for IE 7: json support and ie 7 style -->
  <!--[if lt IE 8]>
  <script src="js/json2.min.js"></script>
  <![endif]-->
  <script type='text/javascript'> 
   $('document').ready(function(){        
      $('#jlocator').jlocator({
         startZoom: 7 //initial map zoom (on page load)
         ,storeZoom: 17 //map zoom on store click
         ,latitude: 40.1461804 //initial map latitude (on page load)
         ,longitude: -75.1690698 //initial map longitude (on page load)
         ,geolocation: true
         ,markerIcon: '' //marker icon path ('' for default google icon)
         ,markerText: 'Click to Zoom'
         ,directionsType: 'DRIVING' //DRIVING, BICYCLING, TRANSIT, WALKING
         ,mapTypeId: 'ROADMAP' //ROADMAP, SATELLITE, HYBRID, TERRAIN
      });
   });
</script>
</body>
</html>