<?php
include 'includes/header.php';

?>

<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="asset/css/all.css">
      <link rel="stylesheet" type="text/css" href="asset/css/Style_1.css">
    <style>
       
      #map {
        height: 400px;  
        width: 100%;  
       }
    </style>
  </head>
  <body>
      <div class="container-fluid mt-sm-3">
  
    <div id="map"></div>
   </div>
     
            
      
    <script>

function initMap() {
  
  var uluru = {lat: 27.6915, lng: 85.3420};
  
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 10, center: uluru});
  
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3LrZJWwR4PAGDKe9G0lJUD_uXxz5qrQ0&callback=initMap">
    </script>

 <!--************************************************************-->   
    
    <div class="container-fluid m-5">
        <div class="container">
            <div class="row">
                
                <div class="col-4">
                    <div class="c "><h6>Location</h6>
                        <p><h5 class="pt-5 text-center">Baneshwor</h5></p>
                    </div>
                </div>
                
                <div class="col-4">
                    <div class="c1"><h6>Date</h6>
                    <p><h5 class="pt-5 text-center">17thDec2018</h5></p>
                    </div>
                </div>
                
                <div class="col-4 mt-sm -3 text-center">
                   <a href="participate.php" class="btn btn-outline-danger" >Participate</a>
                </div>
                
            </div>
        </div>
    </div>
 <script type="text/javascript" src="asset/js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="asset/js/popper.min.js"></script>
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
  </body>
</html>
