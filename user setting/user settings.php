<?php
	require_once '../core/init.php';

	if(isset($_POST['ok'])){
		$userid=$_POST['userid'];
		$oldpassword=$_POST['oldpassword'];
		$newpassword=$_POST['newpassword'];
		$confirmpass=$_POST['confirmpass'];

		$query = "SELECT * FROM users WHERE userid='".$userid."' AND password='".$oldpassword."'";
		$db=new DB();
		$db->query($query);
		if(count($db->results())){
			
				if($newpassword==""){
					echo '<script language="javascript">';
					echo 'alert("Please Enter the New Password !")';
					echo '</script>';
				} else{
					if($newpassword != $confirmpass){
						echo '<script language="javascript">';
						echo 'alert("Password not matched !")';
						echo '</script>';
					} else {
						$query = "UPDATE users SET password='".$newpassword."' WHERE userid='".$userid."'";
						$db->query($query);

						echo '<script language="javascript">';
						echo 'alert("Password Successfully Updated !")';
						echo '</script>';
					}
				}

		} else {
			echo '<script language="javascript">';
			echo 'alert("Invalid Old UserId/Password !")';
			echo '</script>';
		}
	}

 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>user settings</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="usersettingcss.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../mainpage/mainpagecss.css" media="screen" />
<style type="text/css">
body {
	margin-right: 1px;
}
</style>
</head>

<body>
<p>&nbsp;</p>
<div id="container">
  <div id="content">

    <img src="banner-772x250.png" width="637" height="142" alt=""/>
    <h2 > Settings</h2>
    <div id="insidecontent">
			<?php require_once "../menu.html"; ?>
			<br>
    <form method="post" >
    <fieldset>
    <table  align="center">
    <tr><td><label> User id:</label></td><td> <input name="userid" type="text" size="25" /></td></tr>

   <tr><td><label>Old password:</label> </td><td><input name="oldpassword" type="password" size="25" /></td></tr>

   <tr><td><label>New password:</label></td><td><input name="newpassword" type="password" size="25" /></td></tr>

   <tr><td><label>Confirm password:</label></td><td><input name="confirmpass" type="password" size="25" /></td></tr>
  </table> </fieldset>
  <input name="ok" type="submit" value="ok" id="ok"/>
    </form>
</div>



    <div style="clear: both;"></div>
  </div>



  <div id="footer"> <span>TRACK YOUR FLEET IN REAL TIME  </span>
  </div>

</div>
</body>
</html>
