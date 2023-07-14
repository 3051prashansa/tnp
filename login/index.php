<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db('placement');
if(isset($_POST['btn-login']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$upass = mysql_real_escape_string($_POST['pass']);
	echo "SELECT * FROM users WHERE email='$email' and password='$upass'";
	$res=mysql_query("SELECT * FROM users WHERE email='$email' and password='$upass'");
	
	
	if($row=mysql_fetch_array($res))
	{
		
		$_SESSION['user'] = $row['username'];
		$_SESSION['status']=$row['status'];
		echo"<script>alert('welcome user');window.location='../home.php'</script>";
	}
	else
	{
		?>
        <script>alert('wrong details');</script>
        <?php
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Sign In</button></td>
</tr>
<tr>
<td><a href="start.php#secondPage">Sign Up Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>