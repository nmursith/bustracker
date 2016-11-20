<?php
  require_once 'core/init.php';
  $lines = file("datas.txt");

  foreach ($lines as $name) {
    $record = explode(' ', $name);
    $latitute = $record[0];
    $longitute =$record[2];
    $date = date("Y-m-d",strtotime($record[4]));
    $time = $record[6];
    $busno = $record[8];

    $query = "SELECT bus_no FROM map_points WHERE latitude='".$latitute."' AND longitude='".$longitute."'
              AND point_date='".$date."' AND point_time='".$time."' AND bus_no='".$busno."'";
    $db = new DB();
    $db->query($query);
    $results = $db->results();
    if(count($results) == 0){
      $query = "INSERT INTO map_points VALUES(0,'".$latitute."','".$longitute."','".$date."','".$time."','".$busno."')";
      DB::getInstance()->query($query);
    }
  }

  echo "1";

 ?>
