<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome -<?php echo $userRow['email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
  <div id="left">
    <label>Logo</label>
  </div>
  <div id="right">
    <div id="content"> hi' <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a> </div>
  </div>
</div>
<div id="body"> <a>Welcome</a><br />
  <p>put your home page content here <br/>
  <a href="logout.php?logout">Sign Out</a>
  </p>
</div>
</body>
</html>