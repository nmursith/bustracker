
<?php
    require_once '../core/init.php';

    function save(){
      $username = $_POST['username'];
      $nic = $_POST['nic'];
      $contact = $_POST['contact'];
      $userid = $_POST['userid'];
      $password = $_POST['password'];

      if($username == ""){
        echo '<script language="javascript">';
        echo 'alert("Please Enter the Name !")';
        echo '</script>';
        return;
      }

      if($nic == ""){
        echo '<script language="javascript">';
        echo 'alert("Please Enter the Nic !")';
        echo '</script>';
        return;
      }

      if($contact == ""){
        echo '<script language="javascript">';
        echo 'alert("Please Enter the Contact No !")';
        echo '</script>';
        return;
      }

      if($userid == ""){
        echo '<script language="javascript">';
        echo 'alert("Please Enter the UserId !")';
        echo '</script>';
        return;
      }

      if($password == ""){
        echo '<script language="javascript">';
        echo 'alert("Please Enter the Password !")';
        echo '</script>';
        return;
      }

      $query = "INSERT INTO users VALUES('0','".$username."','".$nic."','".$contact."','".$userid."','".$password."')";
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
      $query = "DELETE FROM users WHERE id='".$id."'";
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
<title>user details</title>
<link href="framecss.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
  <div id="content">
    <div id="insidecontent"><h1>User details</h1><form action="" method="post">
      <table><tr><td>User name:</td><td><input name="username" type="text" /><br/></td></tr>
<tr><td>User NIC no:</td><td><input name="nic" type="text" /></td></tr>
<tr><td>
User contact:</td><td><input name="contact" type="text" /></td></tr>
<tr><td>
User id:</td><td><input name="userid" type="text" /></td></tr>
<tr><td>
Password:</td><td><input name="password" type="password" /></td></tr></table>
<input name="submit" type="submit" value="Ok" id="ok"/>
    </form>
  </div>

      <?php
         $query = "SELECT * FROM users";
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
            echo '<td>'.$rec->name.'</td>';
            echo '<td>'.$rec->nic.'</td>';
            echo '<td>'.$rec->contact.'</td>';
            echo '<td>'.$rec->userid.'</td>';
            echo '<td><input type="submit" value="Delete" name="delete" />';
            echo '</tr>';
            echo "</form>";
          }
       ?>
       </table>

  </div>
</div>

</body>
</html>
