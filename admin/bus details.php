<?php
    require_once '../core/init.php';

    function save(){
      $vehicleno = $_POST['vehicleno'];
      $busroute = $_POST['busroute'];
      $drivername = $_POST['drivername'];
      $contact = $_POST['contact'];


      if($vehicleno == ""){
        echo '<script language="javascript">';
        echo 'alert("Please Enter the vehicleno !")';
        echo '</script>';
        return;
      }

      if($busroute == ""){
        echo '<script language="javascript">';
        echo 'alert("Please Enter the busroute !")';
        echo '</script>';
        return;
      }

      if($drivername == ""){
        echo '<script language="javascript">';
        echo 'alert("Please Enter the drivername !")';
        echo '</script>';
        return;
      }

      if($contact == ""){
        echo '<script language="javascript">';
        echo 'alert("Please Enter the Contact No !")';
        echo '</script>';
        return;
      }


      $query = "INSERT INTO vehicles VALUES('0','".$vehicleno."','".$busroute."','".$drivername."','".$contact."')";
      $db = new DB();
      $db->query($query);

      echo '<script language="javascript">';
      echo 'alert("Data Successfully Saved !")';
      echo '</script>';
    }


        if(isset($_POST['submit'])){
          save();
        }

        if(isset($_POST['delete'])){
          $id = $_POST['id'];
          $query = "DELETE FROM vehicles WHERE id='".$id."'";
          $db = new DB();
          $db->query($query);

          echo '<script language="javascript">';
          echo 'alert("Data Successfully Delete !")';
          echo '</script>';

        }


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>bus details</title>
<link href="framecss.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
  <div id="content">
    <div id="insidecontent"><h1>vehicle details</h1><form method="post">
<table><tr><td>vehicle no:</td><td><input name="vehicleno" type="text" /><br/></td></tr>
<tr><td>Vehicle route:</td><td><input name="busroute" type="text" /></td></tr>
<tr><td>
Driver name:</td><td><input name="drivername" type="text" /></td></tr>
<tr><td>
Contact no:</td><td><input name="contact" type="text" /></td></tr></table>
<input style = "margin:0px 0px 0px 92px" name="submit" type="submit" value="ok" id="ok"/>
    </form></div>
  </div>

  <?php
     $query = "SELECT * FROM vehicles";
     $db = new DB();
     $db->query($query);
     $results = $db->results();
   ?>

   <table border="1" style="width:100%;">
     <tr>
       <td>Name</td>
       <td>Nic</td>
       <td>Contact</td>
       <td>UserId</td>
     </tr>

  <?php
      foreach ($results as $rec) {
        echo "<form method='post'>";
        echo '<tr>';
        echo '<input type="hidden" name="id" value="'.$rec->id.'" />';
        echo '<td>'.$rec->vehicleno.'</td>';
        echo '<td>'.$rec->busroute.'</td>';
        echo '<td>'.$rec->drivername.'</td>';
        echo '<td>'.$rec->contact.'</td>';
        echo '<td><input type="submit" value="Delete" name="delete" />';
        echo '</tr>';
        echo "</form>";
      }
   ?>
   </table>
</div>

</body>
</html>
