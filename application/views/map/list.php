<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="css.css">
    <link href="<?php echo base_url() ?>assets/css/css.css" rel="stylesheet">
    <title>Map Vaksin</title>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA16Yf_0SM2aAtPIKMrNu3NbLv5A_YMf6c"></script>
    
</head>
<body>
     
    <div class="container" id="list-puskesmas">
        <div class="row">
            <div class="col-md-6 map">
                <div class="map-box">
                    <h4>Pin location</h4>
                    <div style="height: 400px" id="googleMap"></div>
                </div>
            </div>
            <div class="col-md-6">
                <h4>Rekomendasi Puskesmas Terdekat</h4>
                <div class="list-hospital">
                    <div class="list-box" id="list-box">
                      <!--    -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
      function refreshList(lat, lon){
        var boxList = $("#list-box");
       
        let url = "<?= base_url() ?>"+"get-list/"+lat+"/"+lon;
        fetch(url)
        .then(res => res.json())
        .then(out => outProccessList(out))
        .catch(err => console.log("something wrong"));
      }

      // url e meh pie ? 

      function outProccessList(data){
        var boxList = $("#list-box");
        var str = "";
        for(var i = 0; i < data.length; i++){
          str += '<div class="box-item">';
          str += '<a href="<?= base_url('home/detail/') ?>'+data[i].id+'">';
          str += '<span class="row d-flex justify-content-center align-items-center">';
          str += '<span class="col-2 ico">';
          str += '<i class="fas fa-hospital"></i>';
          str += '</span>';
          str += '<span class="col-10">';
          str += '<p>'+ data[i].name +'</p>';
          str += '<p> <i class="fas fa-map"></i> '+ data[i].distance +' Km</p>';
          str += '</span>';
          str += '</span>';
          str += '</a>';
          str += '</div>';
        }
        boxList.html(str);
      }
    </script>
    
    <script>
        var map, marker;
        var userLatitude = 0;
        var userLongitude= 0;
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
              userLatitude = marker.position.lat();
              userLongitude = marker.position.lng();
              refreshList(userLatitude, userLongitude);
            });
  
            // when dragend, show new lat and lng in console
            google.maps.event.addListener(marker, "dragend", function () {
              console.log("lat: " + marker.position.lat());
              console.log("lng: " + marker.position.lng());
              userLatitude = marker.position.lat();
              userLongitude = marker.position.lng();
              refreshList(userLatitude, userLongitude);
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
              userLatitude = marker.position.lat();
              userLongitude = marker.position.lng();
              refreshList(userLatitude, userLongitude);
            });
  
            initMap();
          });
        });
      </script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>
 
