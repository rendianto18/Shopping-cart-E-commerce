<!DOCTYPE html>
<html>
  <head>
    <title>Map Vaksin</title>
    <style>
      .map,
      .paginaPrinc {
        height: 80%;
      }

      /* Optional: Makes the sample page fill the window. */

      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA16Yf_0SM2aAtPIKMrNu3NbLv5A_YMf6c"></script>

    <div class="lat"></div>
    <div class="long"></div>
    <div style="height: 100%" id="googleMap"></div>
    <script>
      var map, marker;
      $(document).ready(function () {
        function myMap(lat, long) {
          var myCenter = new google.maps.LatLng(lat, long);
          var mapCanvas = document.getElementById("googleMap");

          var mapOptions = {
            center: myCenter,
            zoom: 15,
            treetViewControl: false,
            mapTypeControl: false,
          };

          map = new google.maps.Map(mapCanvas, mapOptions);
          marker = new google.maps.Marker({
            position: myCenter,
            draggable: true,
          });
          marker.setMap(map);

          // Zoom to 9 when clicking on marker
          google.maps.event.addListener(marker, "click", function () {
            map.setZoom(9);
            map.setCenter(marker.getPosition());

            console.log("lat: " + marker.position.lat());
            console.log("lng: " + marker.position.lng());
          });

          // when dragend, show new lat and lng in console
          google.maps.event.addListener(marker, "dragend", function () {
            console.log("lat: " + marker.position.lat());
            console.log("lng: " + marker.position.lng());
          });

          //sets variable for lat and long
          $(".lat").text(lat);
          $(".long").text(long);
        }

        function newLocation(newLat, newLng) {
          map.setCenter({
            lat: newLat,
            lng: newLng,
          });
        }

        google.maps.event.addDomListener(
          window,
          "load",
          myMap(7.0025216, 110.4248832)
        );

        function success(pos) {
          var crd = pos.coords;
          latitude = crd.latitude;
          longitude = crd.longitude;

          myLatlng = new google.maps.LatLng(latitude, longitude);
          marker.setPosition(myLatlng);
          map.setZoom(9);
          map.setCenter(marker.getPosition());
        }

        function error(err) {
          document.getElementById("map").innerHTML =
            "ERROR(" + err.code + "): " + err.message;
        }

        function initMap() {
          navigator.geolocation.getCurrentPosition(success, error);
        }

        $(document).ready(function () {
          // click on map and set you marker to that position
          google.maps.event.addListener(map, "click", function (event) {
            marker.setPosition(event.latLng);
            console.log("lat: " + marker.position.lat());
            console.log("lng: " + marker.position.lng());
          });

          initMap();
        });


      });


    </script>
  </body>
</html>
