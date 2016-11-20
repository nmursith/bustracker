
<?php
      $busno = $_GET['busno'];
      echo '<input type="hidden" id="busno" value="'.$busno.'" />';
 ?>
<?php
  require "includes/header.php";
 ?>

 <div id="map" style="width:100%;height:500px;"></div>
 <script src="js/jquery.js"></script>

 <script>
 function myMap() {

   $.ajax({
     url:"insert_data.php",
     method:"post",
     data:{},
     success:function(data){

     }
   });

   var lat;
   var log;
   var busno = $('#busno').val()
   $.ajax({
     url:"get_data.php",
     method:"post",
     data:{
        Busno:busno
     },
     success:function(data){
       
       var res = data.split(" ");
       lat = res[0];
       log = res[1];

       var myCenter = new google.maps.LatLng(lat,log);
       var mapCanvas = document.getElementById("map");
       var mapOptions = {center: myCenter, zoom: 10};
       var map = new google.maps.Map(mapCanvas, mapOptions);
       var marker = new google.maps.Marker({position:myCenter});
       marker.setMap(map);

       // Zoom to 9 when clicking on marker
       google.maps.event.addListener(marker,'click',function() {
         map.setZoom(9);
         map.setCenter(marker.getPosition());
       });
     }
   });


 }
 </script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvDPIHFsyl6zV76a2Tl9nTHsFCV0vjS8w&callback=myMap">
 </script>
 <script>
   var myVar = setInterval(myTimer, 3000);
   function myTimer() {
     myMap();
   }
 </script>
 </body>
 </html>
