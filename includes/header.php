<html>
  <head>
    <title>Bus Tracker</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <link rel="stylesheet" type="text/css" href="mainpage/mainpagecss.css" media="screen" />
  </head>
  <body>
    <!-- <p><a href="index.php">Logout</a></p> -->
    <div id="menu">
      <ul>
        <li><a href="user setting/user settings.php"> USER_SETTINGS</a></li>
        <li><a href="busno.php">LIVE_MAP</a></li>
        <li><a href="report_setup.php">HISTORY</a></li>
        <li><a href="speed/speed.php">VEHICLE_SPEED</a></li>
        <li><a href="bus fault detection/busfault detection.html">VEHICLE_FAULT</a></li>
        <li><a href="index.php">Logout</a></li>
      </ul>
    </div>
    <br>
    <script>
      $('#logout').click(function(){
        location.href="index.php";
      });
    </script>
