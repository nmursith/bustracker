<?php

  require_once 'core/init.php';

  $fromdate = $_POST['FromDate'];
  $todate = $_POST['ToDate'];
  $busno = $_POST['BusNo'];

  $query = "SELECT id,latitude,longitude FROM map_points
            WHERE (point_date BETWEEN '".$fromdate."' AND '".$todate."') AND bus_no='".$busno."'";
  $db = new DB();
  $db->query($query);

  $results = $db->results();

  echo json_encode($results);

 ?>
