<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
body
{
background-image:url(startbk.jpg);
}
</style>
<script>
</script>
<script src="jquery-1.9.1.js"></script>
<script src="jquery.jrumble.1.3.js"></script>
	<link rel="stylesheet" href="circular.navigation.css" />
	<script src="modernizr-2.6.2.min.js"></script> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
$(document).ready(function(){
$('.dance').jrumble({
x:6,
y:9,
rotation:3
});
$('.dance').trigger('startRumble');
$('.dance').hover(function(){$(this).trigger('stopRumble');
},function(){$(this).trigger('startRumble');
})
});
</script>
</head>

<body>
<form action="startexam.php">
<div style="position:absolute;left:20%;width:60%;opacity:0.6; height:700px;background-color:#002200;"></div>
<div style="position:absolute;left:20%;width:60%; height:700px;">
<p style="font-family:'CHE LIVES!';font-size:33px;color:#FFFFFF;">Welcome To online Exam System</p>
<p style="font-family:'Times New Roman', Times, serif;font-size:18px;color:#FFFFFF;margin-left:10px;margin-right:10px;margin-top:60px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; An online exam System.. its an easy way to judge </p>
<div style="position:absolute;top:500px;left:44%;">
<input type="submit" name="submit" value="Go..." style="width:100px;height:100px;border-radius:360px;background-color:#000066;color:#FFFFFF;font-family:Geneva, Arial, Helvetica, sans-serif;box-shadow:3px 3px 130px red;font-size:36px;" class="dance" />
</div>
</div>
<div class="cn-button" id="cn-button" ><p id="s" style="margin-top:10px;">Menu</p></div>
				<div class="cn-wrapper" id="cn-wrapper" >
				    <ul>
				      <li><a href="#">Instru</a></li>
				      <li><a href="#">Feature</a></li>
				      <li><a href="#">Created <br/>By</a></li>
				      <li><a href="#">Timing</a></li>
				      <li><a href="#">Papers</a></li>
				     </ul>
				</div>
				<div id="cn-overlay"></div>

<script src="polyfills.js"></script>
<script src="circular.navigation.js"></script>
</form>
</body>
</html>
<?php
if(isset($_REQUEST['submit']))
{
echo "aaa";
mysql_connect('localhost','root','');
mysql_select_db('exam');
$q1="insert into examid values(NULL,'ashok',' ')";
$r=mysql_query($q1);
$q1="select max(id) from examid";
$r=mysql_query($q1);
if($rs=mysql_fetch_row($r))
{
echo $rs[0];
$_SESSION['examid']=$rs['0'];
?>
<script> window.location="demo.php"; </script>
<?php
}
}

?>
