<?php
    require_once "core/init.php";

    $busno = $_POST['Busno'];
    $query = "SELECT latitude,longitude FROM map_points WHERE bus_no='".$busno."' ORDER BY id DESC";
    $db = new DB();

    $db->query($query);
    $results = $db->results();

    foreach ($results as $record) {
      $lat = $record->latitude;
      $log = $record->longitude;
      echo $lat." ".$log;
      die();
    }
 ?>
