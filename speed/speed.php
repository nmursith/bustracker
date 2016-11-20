<?php
  require_once '../core/init.php';

  $datas=array();
  if(isset($_POST['submit'])){
    $busno = $_POST['busno'];
    $fdate = $_POST['fdate'];
    $tdate = $_POST['tdate'];

    $query = "SELECT bus_no,point_date,point_time,speed FROM map_points WHERE bus_no='".$busno."' AND (point_date BETWEEN '".$fdate."' AND '".$tdate."')";
    $db = new DB();
    $db->query($query);
    $datas = $db->results();
  }

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>speed</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="speedcss.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../mainpage/mainpagecss.css" media="screen" />
<style type="text/css">
body {

}
</style>
</head>

<body>
<p>&nbsp;</p>
<div id="container">
  <div id="content">
 <h1>Speed</h1>
    <div id="insidecontent">
      <?php require_once "../menu.html"; ?>
     <form action="" method="post"><fieldset>
     <table align= "center">
			 <tr><td align= "left">Bus no:</td><td>
         <div align= "left" >
		 <select name="busno" >
         <?php
            $query = "SELECT DISTINCT bus_no FROM map_points";
            $db = new DB();
            $db->query($query);

            $results = $db->results();

            foreach ($results as $rec) { ?>
              <option>
                <?php echo $rec->bus_no; ?>
              </option>

  <?php      }  ?>

				 </select>
				 </div>
			 </td></tr>
     <tr><td align= "left">From date&time:</td><td><input type="date" name="fdate" /></td></tr>
    <tr><td align= "left">To date&time:</td><td><input type="date" name="tdate" /></td></tr>
	  </table>
    <input name="submit" type="submit" value="ok" /><br/>
    </fieldset>
       <br/>
     </form>

    </div>
    <div>
      <table width="604" border="1" align="center">
          <tr>
            <th>veicle no</th>
            <th>date</th>
            <th>time</th>
            <th>speed</th>
          </tr>
          <?php
              foreach ($datas as $rec) {
                 echo '<tr>';
                 echo '<td>'.$rec->bus_no.'</td>';
                 echo '<td>'.$rec->point_date.'</td>';
                 echo '<td>'.$rec->point_time.'</td>';
                 echo '<td>'.$rec->speed.'</td>';
                 echo '</tr>';
              }
           ?>
    </table>
    </div>
    <div style="clear: both;"></div>
  </div>



  <div id="footer"> <span>TRACK YOUR FLEET IN REAL TIME  </span>
  </div>

</div>
</body>
</html>
