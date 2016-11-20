<?php require "includes/header.php"; ?>

<?php
  $fromdate= $_GET['fdate'];
  $todate = $_GET['tdate'];
  $busno = $_GET['busno'];

  echo '<input type="hidden" id="from_date" value="'.$fromdate.'" />';
  echo '<input type="hidden" id="to_date" value="'.$todate.'" />';
  echo '<input type="hidden" id="busno" value="'.$busno.'" />';

 ?>

<div id="map" style="width:100%;height:500px"></div>

<script>
function myMap() {
  var _fromdate = $('#from_date').val();
  var _todate = $('#to_date').val();
  var _busno = $('#busno').val();

  $.ajax({
    url:"get_points.php",
    method:"post",
    data:{
      FromDate:_fromdate,
      ToDate:_todate,
      BusNo:_busno
    },
    success:function(data){
      //alert(data);
      var obj = JSON.parse(data);
      var places = [];

      for( i=0; i<obj.length; i++){
		// console.log(obj[i].latitude);
        var place = new google.maps.LatLng(obj[i].latitude,obj[i].longitude);
        places.push(place);
      }
 
      var mapCanvas = document.getElementById("map");
      var mapOptions = {center:places[0], zoom: 9};
      var map = new google.maps.Map(mapCanvas,mapOptions);

	
		//console.log(markers);
	
	for (i = 0; i < obj.length; i++)
	 {   
	
		var place = new google.maps.LatLng(obj[i].latitude,obj[i].longitude);
		var marker = new google.maps.Marker({  
          map: map, title: "place" , position: place  
        });
        map.setCenter(marker.getPosition())
		var la  = obj[i].latitude;
		var lo =obj[i].longitude;
	 loc = { lat: la,  lng:lo};
		places.push(loc);
	  }
	

      var flightPath = new google.maps.Polyline({
        path: places,
        strokeColor: "#0000FF",
        strokeOpacity: 0.8,
        strokeWeight: 2
      });
      flightPath.setMap(map);
    }
  });
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvDPIHFsyl6zV76a2Tl9nTHsFCV0vjS8w&callback=myMap"></script>


</body>
</html>
