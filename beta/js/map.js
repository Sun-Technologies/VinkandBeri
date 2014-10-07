//<![CDATA[
    var map;
    var markers = [];
    var infoWindow;
    var locationhide;

    $(document).ready(function () {
        map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(40, -100),
        zoom: 4,
        mapTypeId: 'roadmap',
        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU}
      });
      infoWindow = new google.maps.InfoWindow();

      locationhide = document.getElementById("locationSelect");
      //locationSelect.innerHTML = "No Results".style.visibility("hidden");
      locationSelect.onchange = function() {
        var locationhide = locationSelect.value + locationSelectresults;
        if (locationhide != "none"){
          $("#locationhide").style.visibility.show();
        }
      };
   });

   function searchLocations() {
     var address = document.getElementById("addressInput").value;
     var geocoder = new google.maps.Geocoder();
     geocoder.geocode({address: address}, function(results, status) {
       if (status == google.maps.GeocoderStatus.OK) {
        searchLocationsNear(results[0].geometry.location);
       } else {
         alert(address + 'Please Enter Location');
       }
     });
   }

   function clearLocations() {
     infoWindow.close();
     for (var i = 0; i < markers.length; i++) {
       markers[i].setMap(null);
     }
     markers.length = 0;
     while (locationSelect.firstChild) {
      locationSelect.removeChild(locationSelect.firstChild);
     }

     /*locationSelect.innerHTML = "Search Results";
     var option = document.createElement("option");
     option.value = "num";
     option.innerHTML = "Search Results:";
     locationSelect.appendChild(option);*/
   }

   function searchLocationsNear(center) {
     clearLocations(); 

     var radius = document.getElementById('radiusSelect').value;
     var searchUrl = 'phpsqlsearch_genxml.php?lat=' + center.lat() + '&lng=' + center.lng() + '&radius=' + radius;
     downloadUrl(searchUrl, function(data) {
       var xml = parseXml(data);
       var locationSelectresults = document.getElementById("locationSelectresults");
       var markerNodes = xml.documentElement.getElementsByTagName("marker");
       if (markerNodes.length === null || markerNodes.length<1) {
        locationSelectresults.innerHTML = "No Stores Found";
        return;
       }
       locationSelectresults.innerHTML =  "<div id=result-bg>" + "<i class=icon-ok></i> " + markerNodes.length + " Stores Found" + "</div>";
                    

       var bounds = new google.maps.LatLngBounds();
       for (var i = 0; i < markerNodes.length; i++) {
         var name = markerNodes[i].getAttribute("name");
         var address = markerNodes[i].getAttribute("address");
         var distance = parseFloat(markerNodes[i].getAttribute("distance"));
         var latlng = new google.maps.LatLng(
              parseFloat(markerNodes[i].getAttribute("lat")),
              parseFloat(markerNodes[i].getAttribute("lng")));

         var lat = markerNodes[i].getAttribute("lat");
         var lng = markerNodes[i].getAttribute("lng");

         createOption(name, distance, i, address, lat , lng );
         createMarker(latlng, name, address);
         bounds.extend(latlng);
       }
       map.fitBounds(bounds);
       var listener = google.maps.event.addListener(map, "idle", function() { 
           if (map.getZoom() > 16) map.setZoom(16); 
             google.maps.event.removeListener(listener); 
       });
       locationSelect.style.visibility = "visible";
       locationSelect.onchange = function() {
         var markerNum = locationSelect.options[locationSelect.selectedIndex].value;
         google.maps.event.trigger(markers[markerNum], 'click');
       };
      });
    }
  
    function createMarker(latlng, name, address) {
      var html = "<b>" + name + "</b> <br/>" + address;
      var marker = new google.maps.Marker({
        map: map,
        position: latlng
      });
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
      markers.push(marker);
    }
    function showMarker( lat , lng , name , address) {
     
      var html = "<b>" + name + "</b> <br/>" + address;
      var latlngpos = new google.maps.LatLng(
              parseFloat(lat),
              parseFloat(lng));
      var marker = new google.maps.Marker({
        map: map,
        position: latlngpos
      });
      infoWindow.setContent(html);
      infoWindow.open(map, marker);
    }
    function htmlEntities(str) {
    return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;').replace(/'/g,'&apos;');
    }
    function createOption(name, distance, num, address, lat , lng) {
      var option = document.createElement("markerNum");
      option.value = num;

      var direction = 'javascript:directions("' + lat + '","' + lng + '")';
      var enname =  htmlEntities(name);

      var jscript = 'javascript:showMarker("' + lat + '","' + lng + '", "' + enname + '", " ' + address + '")';
      option.innerHTML = "<div id=location-area>" + "<a href='" + jscript + "'><b>" + name + "(" + distance.toFixed(1) + " mi)"  + "</b></a><br/>" + address + "<br/><a href='https://maps.google.com/?saddr="+addressInput.value+"&daddr="+enname+ "+"+address+"' target='_blank' id='get-location'>Get Directions <i class=icon-arrow-right></i></a>" + "</div>";
      locationSelect.appendChild(option);
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request.responseText, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function parseXml(str) {
      if (window.ActiveXObject) {
        var doc = new ActiveXObject('Microsoft.XMLDOM');
        doc.loadXML(str);
        return doc;
      } else if (window.DOMParser) {
        return (new DOMParser).parseFromString(str, 'text/xml');
      }
    }

    function doNothing() {}

    //]]>

    $(function(){
        
        var canvas = {
          map: ".map_canvas"
        };
        
        $("#addressInput").geocomplete(canvas);
        /*
          .bind("geocode:result", function(event){
          })
          /*
          .bind("geocode:error", function(event, status){
            $.log("ERROR: " + status);
          })
          .bind("geocode:multiple", function(event, results){
            $.log("Multiple: " + results.length + " results found");
          });
        
        $("#find").click(function(){
          $("#addressInput").trigger("geocode");
        }); */       
      });