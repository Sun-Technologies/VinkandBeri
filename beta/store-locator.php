<!DOCTYPE html>
<html>
<head>
  <title>Store Locator | Vink &amp; Beri LLC</title>  <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">  <meta charset="utf-8">  <link href="img/favicon.png" rel="shortcut icon">
  <?php include'php/header.php'; ?>
  <!-- font awesome -->
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" /> 
</head>
<style type="text/css">
  #map img {
      max-width: none;
  }

</style>
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
    <div class="row">
      <article class="content span12">
		<div class="row">
		  <div class="span3">
        <div class="span3">
			   <form class="form-search">
          <input type="text" id="autocomplete" class="input-medium search-query span2" onfocus="geolocate()" placeholder="Search Store...">
          <button type="submit" class="btn" style="float: right;">Go</button>
         </form>
        </div>
        <div class="span3">
          <select class="span2">
            <option>5 Miles</option>
            <option>10 Miles</option>
            <option>15 Miles</option>
            <option>20 Miles</option>
            <option>25 Miles</option>
          </select>
        </div>
        <div class="span3" style="height: 350px; overflow: scroll;">
          <!--PA-->
          <div id="location-area">
              <a href="#">George's Dreshertown ShopNBag <br>
              1650 Limekiln Pike  Dresher,<br>
              PA 19025</a>
          </div>
          <div id="location-area">
             <a href="#">DeKalb Supermarket<br>
             815 DeKalb Street Norristown,<br>
             PA 19401</a>
          </div>
          <div id="location-area">
              <a href="#">Dublin Shop N Bag<br>
              161 N. Main Street  Dublin,<br>
              PA 18917</a>
          </div>
          <div id="location-area">
              <a href="#">Richboro Shop N Bag <br>
              1025 N. Second Street Pike  Richboro,<br>
              PA 18954</a>
          </div>
          <div id="location-area">
              <a href="#">West Norriton Farmers Market<br>
              1930 W. Main Street Norristown,<br>
              PA 19401</a>
          </div>
          <div id="location-area">
              <a href="#">The Market of Lafayette Hill <br>
              531 Germantown Pike Lafayette Hill,<br>
              PA 19444</a>
          </div>
          <div id="location-area">
              <a href="#">Tanner Brother's &amp; Sons, Inc.<br>
              1070 Hatboro Road Warminster,<br>
              PA 18974</a>
          </div>
          <div id="location-area">
              <a href="#">Assi Plaza <br>
              1222 North Wales Road North Wales,<br>
              PA 19454</a>
          </div>
          <div id="location-area">
              <a href="#">Landis Supermarket, Inc.<br>
              #20  2685 County Line Road Telford,<br>
              PA 18969</a>
          </div>
          <div id="location-area">
              <a href="#">Landis Supermarket, Inc.<br>
              #30  543 Constitution Ave. Perkasie,<br>
              PA 18944</a>
          </div>
          <div id="location-area">
              <a href="#">Landis Supermarket, Inc.<br>
              #40  841 Gravel Pike Schwenksville,<br>
              PA 19473</a>
          </div>
          <div id="location-area">
              <a href="#">Landis Supermarket, Inc.<br>
              #50  2700 Shelly Road  Harleysville,<br>
              PA 19438</a>
          </div>
          <div id="location-area">
              <a href="#">Freed's Supermarket<br>
              2024 Swamp Pike Gilbertsville,<br>
              PA 19525</a>
          </div>
          <div id="location-area">
              <a href="#">Net Cost Market<br>
              11701 Bustleton Avenue<br>
              Philadelphia, 19116</a>
          </div>
          <div id="location-area">
              <a href="#">McMenamin Family Shop Rite <br>
              9910 Frankford Ave. Suite 240 Philadelphia,<br>
              PA 19114</a>
          </div>
          <div id="location-area">
              <a href="#">Hatboro Market &amp; Deli<br>
              101 Fitch Road  Hatboro, <br>
              PA 19040</a>
          </div>
          <div id="location-area">
              <a href="#">Foresta's Country Meat Mart, Inc.<br>
              1098 W. Bridge Street Phoenixville,<br>
              PA 19460</a>
          </div>
          <div id="location-area">
              <a href="#">Corropolese Bakery &amp; Deli <br>
              541 S. Broad Street Lansdale,<br>
              PA 19446</a>
          </div>
          <div id="location-area">
              <a href="#">Super 7 Supermarket<br>
              317 Bridge Street Phoenixville,<br>
              PA 19460</a>
          </div>
          <div id="location-area">
              <a href="#">Marshall Food Mart<br>
              724 W. Marshall Street  Norristown,<br>
              PA 19401</a>
          </div>
          <div id="location-area">
              <a href="#">Sam's Italian Market<br>
              3504 W. Moreland Rd.  Willow Grove,<br>
              PA 19090</a>
          </div>
          <div id="location-area">
              <a href="#">Rich's Deli<br>
              430 S. Bethlehem Pike Ft. Washington,<br>
              PA 19034</a>
          </div>
          <div id="location-area">
              <a href="#">309 Deli<br>
              1618 Bethlehem Pike Hatfield,<br>
              PA 19440</a>
          </div>
          <div id="location-area">
              <a href="#">B.P. Lansdale<br>
              868 Sumneytown Pike Lansdale,<br>
              PA 19446</a>
          </div>
          <div id="location-area">
              <a href="#">West Point Deli Plus<br>
              794 Sumneytown Pike Lansdale,<br>
              PA 19447</a>
          </div>
          <div id="location-area">
              <a href="#">Merry Mead Farm <br>
              2222 S. Valley Forge Rd.  Lansdale,<br>
              PA 19448</a>
          </div>
          <div id="location-area">
              <a href="#">Lansdale Food Mart &amp; Deli<br>
              291 N. Broad Street Lansdale, <br>
              PA 19449</a>
          </div>
          <div id="location-area">
              <a href="#">7-Eleven <br>
              919 Horsham Road  Montgomeryville,<br>
              PA 18936</a>
          </div>
          <div id="location-area">
              <a href="#">Guiliano's Deli<br>
              429 N. Chestnut Street  Lansdale,<br>
              PA 19446</a>
          </div>
          <div id="location-area">
              <a href="#">Citgo Market<br>
              1703 Markley Street Norristown,<br>
              PA 19401</a>
          </div>
          <div id="location-area">
              <a href="#">Sister Mini Market<br>
              601 Arch Street Norristown,<br>
              PA 19402</a>
          </div>
          <div id="location-area">
              <a href="#">7-Eleven<br>
              226 Germantown Pike Norristown,<br>
              PA 19403</a>
          </div>
          <div id="location-area">
              <a href="#">El Changaroo Supermarket<br>
              637 Markley Street  Norristown,<br>
              PA 19404</a>
          </div>
          <div id="location-area">
              <a href="#">La Mexicana<br>
              225 E. County Line Road Hatboro,<br>
              PA 19040</a>
          </div>
          <div id="location-area">
              Location-Araea1
          </div>
          <div id="location-area">
              <a href="#">Jacksonville Food Mart<br>
                40 E. Street Road Warminster,<br>
                PA 18974</a>
          </div>
          <div id="location-area">
              <a href="#">San Antonio Mexican Deli &amp; Grocery<br>
              221 W. Broad Street Quakertown,<br>
              PA 18951</a>
          </div>
          <div id="location-area">
              <a href="#">Sellersville Gas &amp; Mart<br>
              396 N. Main Street  Sellersville,<br>
              PA 18960</a>
          </div>
          <div id="location-area">
              <a href="#">Carroll's Seafood &amp; Produce<br>
              5840 Easton Road  Plumsteadville, <br>
              PA 18949</a>
          </div>
          <div id="location-area">
              <a href="#">B.P. Norristown<br>
              223 W Main St Norristown,<br>
              PA 19401</a>
          </div>
          <div id="location-area">
              <a href="#">Lukoil<br>
              681 E Broad St  Souderton,<br>
              PA 18964</a>
          </div>
          <div id="location-area">
              <a href="#">Lukoil <br>
              1099 Easton Rd  Abington, <br>
              PA 19001</a>
          </div>
          <div id="location-area">
              <a href="#">Sanatoga Thriftway<br>
              2190 E. High Street Pottstown,<br>
              PA 19464</a>
          </div>
          <div id="location-area">
              <a href="#">Village Market <br>
              300 S Main St Sellersville, <br>
              PA 18960</a>
          </div>
          <div id="location-area">
              <a href="#">7-Eleven<br>
              523 Richlandtown Pike Richlandtown, <br>
              PA 18955</a>
          </div>
          <div id="location-area">
              <a href="#">Stop N Shop<br>
              615 E High Street Pottstown,<br>
              PA 19464</a>
          </div>
          <div id="location-area">
              <a href="#">One Stop Daily<br>
              315 E High St Pottstown, <br>
              PA 19464</a>
          </div>
          <div id="location-area">
              <a href="#">Yohns Grocery<br>
              78N York St Pottstown, <br>
              PA 19464</a>
          </div>
          <div id="location-area">
              <a href="#">Rainbow Mart<br>
              1574 Bristol Pike Bensalem, <br>
              PA 19020</a>
          </div>
          <div id="location-area">
              <a href="#">Country Food Market<br>
              203 W State Street  Doylestown, <br>
              PA 18901</a>
          </div>
          <div id="location-area">
              <a href="#">Masons Grocery Market<br>
              353 Lyceum Avenue Philadelphia, <br>
              PA 19128</a>
          </div>
          <div id="location-area">
              <a href="#">Sorrentinos Deli<br>
              4361 Cressan Street Philadelphia, <br>
              PA 19127</a>
          </div>
          <div id="location-area">
              <a href="#">Commissari Food Market <br>
              5255 Ridge Avenue Philadelphia, <br>
              PA 19128</a>
          </div>
          <div id="location-area">
              <a href="#">Green Farm Fresh <br>
              842 Red Lion Rd Philadelphia, <br>
              PA 19115</a>
          </div>
          <div id="location-area">
              <a href="#">Joa Mart<br>
              361 W. Hortter Street Philadelphia, <br>
              PA 19119</a>
          </div>
          <div id="location-area">
              <a href="#">Palm Tree Gourmet<br>
              901 S 2nd St  Philadelphia, <br>
              PA 19147</a>
          </div>
          <!--NJ-->
          <div id="location-area">
              <a href="#">Crystal Lake Thriftway<br>
              650 West Cuthbert Blvd  Collingswood<br>
              NJ 08108</a>
          </div>
          <div id="location-area">
              <a href="#">Incollingo's Smithville<br>
              45 South New York Rd  Galloway<br>
              NJ 08205</a>
          </div>
          <div id="location-area">
              <a href="#">Incollingo's EHC<br>
              810 White Horse Pike  Egg Harbor City <br>
              NJ 08215</a>
          </div>
          <div id="location-area">
              <a href="#">Elmer IGA <br>
              201 Front St  Elmer <br>
              NJ 08318</a>
          </div>
          <div id="location-area">
              <a href="#">Eatmor<br>
              856 Landis Ave  Vineland <br>
              NJ 08318</a>
          </div>
          <div id="location-area">
              <a href="#">Deterdings<br>
              506 East Gibbsboro Rd Lindenwold <br>
              NJ 08021</a>
          </div>
          <div id="location-area">
              <a href="#">M &amp; S Produce<br>
              6020 Black Horse Pike Egg Harbor Twp. <br>
              NJ 08234</a>
          </div>
          <div id="location-area">
              <a href="#">Verchio's Turnersville<br>
              272 Hurfville Crosskeys Rd   Sewell <br>
              NJ 08080</a>
          </div>
          <div id="location-area">
              <a href="#">Verchio's Brooklawn<br>
              123 South New Broadway   Brooklawn <br>
              NJ 08030</a>
          </div>
          <div id="location-area">
              <a href="#">Meadowbrook Mkt.<br>
              3012 Union Ave  Pennsauken Twp. <br>
              NJ 08109</a>
          </div>
          <div id="location-area">
              <a href="#">Duffields Farm Mkt.<br>
              280 Chapel Heights Rd Sewell <br>
              NJ 08080</a>
          </div>
          <div id="location-area">
              <a href="#">Fresh Mart<br>
              681 Crosskeys Rd  Sicklerville <br>
              NJ 08081</a>
          </div>
          <div id="location-area">
              <a href="#">Yogi's Quick Shop<br>
              192 Fries Mill Rd Turnersville, <br>
              NJ 08012</a>
          </div>
          <div id="location-area">
              <a href="#">Country Farms<br>
              2911 Rt. 73 South    Maple Shade, <br>
              NJ 08052</a>
          </div>
          <div id="location-area">
              <a href="#">Subzi Mandi<br>
              1400 Berlin Rd  Cherry Hill, <br>
              NJ 08003</a>
          </div>
          <div id="location-area">
              <a href="#">La Villita Farm Mkt.  <br>
              3005 Atlantic Ave Atlantic City,<br> 
              NJ 08401</a>
          </div>
          <div id="location-area">
              <a href="#">Ananda Bazar Grocery<br>
              2929 Atlantic Ave Atlantic City, <br>
              NJ 08401</a>
          </div>
          <div id="location-area">
              <a href="#">Saibaba Food Mkt.<br>
              2414 Atlantic Ave Atlantic City, <br>
              NJ 08401</a>
          </div>
          <div id="location-area">
              <a href="#">Haars Health Food Center  <br>
              1437 South Delsea Dr. Vineland, <br>
              NJ 08360</a>
          </div>
          <div id="location-area">
              <a href="#">Gulf Mini Mart<br>
              1001 North Tuchahoe Rd  Williamstown, <br>
              NJ 08094</a>
          </div>
          <div id="location-area">
              <a href="#">Avalon Supermarket<br>
              2868 Dunne Dr Avalon, <br>
              NJ 08202</a>
          </div>
          <div id="location-area">
              <a href="#">Bud's Market<br>
              8302 Third Ave  Stone Harbor, <br>
              NJ 08247</a>
          </div>
          <div id="location-area">
              <a href="#">Avalon Seafood &amp; Produce<br>
              29th &amp; Ocean Dr.  Avalon, <br>
              NJ 08202</a>
          </div>
          <div id="location-area">
              <a href="#">A &amp; F Market <br>
              416 South West  Vineland, <br>
              NJ 08360</a>
          </div>
          <div id="location-area">
              <a href="#">Incollingo's EHC <br>
              810 White Horse Pike  Egg Harbor City, <br>
              NJ 08215</a>
          </div>
        </div>
		  </div>
      <div class="span9 map-box" >
        <div id="map" style="width: 100%; height: 500px;"></div>
      </div>
		</div> <br><br>
	  </article><!-- .content -->
    </div>

  </div><!-- .container -->
</section><!-- #main -->
</div><!-- .page-box -->
</div><!-- .page-box-content -->
<?php include 'php/footer.php'; ?>
<?php include 'php/footer-js.php'; ?>
 <!-- jlocator is based on jplist plugin: http://jplist.no81no.com -->
 
  <!-- jlocator --> 
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
  <script src="js/geo-api.js" type="text/javascript"></script>
  <script type='text/javascript'> 
    var map;
    var markers = [];
    var infoWindow;
    var locationSelect;
    $('document').ready(function(){        
        map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(40, -100),
        zoom: 4,
        mapTypeId: 'roadmap',
        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU}
      }); 

      autocomplete = new google.maps.places.Autocomplete(
      /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
      { types: ['geocode'] , componentRestrictions: {country: 'us'} });

      google.maps.event.addListener(autocomplete, 'place_changed', function() {
        fillInAddress();
      });
      
    });
</script>
</body>
</html>