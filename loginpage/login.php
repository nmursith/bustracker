
<?php
      require_once '../core/init.php';

      if(isset($_POST['log_in'])){
        $usertype=$_POST['usertype'];
        $userid = $_POST['userid'];
        $password = $_POST['password'];

        if($usertype == "Admin"){
          $query = "SELECT * FROM admin WHERE userid='".$userid."' AND password='".$password."'";
          $db=new DB();
          $db->query($query);
          if(count($db->results())){
            header("Location:../admin/admin.html");
          } else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Username/Password !")';
            echo '</script>';
          }
        } else {
          $query = "SELECT * FROM users WHERE userid='".$userid."' AND password='".$password."'";
          $db=new DB();
          $db->query($query);
          if(count($db->results())){
            header("Location:../mainpage/mainpage.php");
          } else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Username/Password !")';
            echo '</script>';
          }
        }


      }

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="logincss.css" media="screen" />
<style type="text/css">
body {

}
</style>
</head>

<body>
<p>&nbsp;</p>
<div id="container">
  <div id="content">
  <img src="images (2).jpg" alt="" width="637" height="166" />
 <h1>GPS TRACKING SYSTEM FOR VEHICLES</h1>
    <div id="insidecontent"> <br>
    Log in
     <form action="login.php" method="post">
               <br/>
        <table align="center">
          <tr>
            <td>UserType:</td>
            <td>
              <select name="usertype">
                <option>Admin</option>
                <option>User</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>User id:</td>
            <td><input name="userid" type="text" /></td>
          </tr>
          <tr>
            <td>Password:</td>
            <td><input name="password" type="password" /></td>
          </tr>
        </table>

       <input name="log in" type="submit" value="Login" name="log_in" />
     </form>
     <br/>
    </div>



    <div style="clear: both;"></div>
  </div>



  <div id="footer"> <span>TRACK YOUR FLEET IN REAL TIME  </span>
  </div>

</div>
</body>
</html>
