<!DOCTYPE html>
<html>
<head>
<title>Google Maps API: Membuat Marker untuk Menandai Lokasi pada Peta</title>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA16Yf_0SM2aAtPIKMrNu3NbLv5A_YMf6c"></script>
<script type="text/javascript">
function initialize() {
  var propertiPeta = {
    center: new google.maps.LatLng(-1.605328,117.451067),
	zoom: 5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // membuat Marker
  var marker=new google.maps.Marker({
      position: new google.maps.LatLng(-7.0193166,110.9199707),
      map: peta
  });
}
</script>
</head>
<body>

  <div id="googleMap" style="width:1100px;height:500px;"></div>
  
</body>
</html>