<?php
session_start();

?><!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
		<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
	</head>
	<body>
		<div class="container" style="width:1024px">


			

			<div class="wrapper" style="height:400px;width:1024px">

				<ul id="sb-slider" class="sb-slider" style="height:300px;width:1024px">
					<li>
						<a  target="_blank"><img src="s.jpg" alt="s"/></a>
					</li>
					<li>
						<img src="images/t.jpg" alt="t"/>
						<div class="sb-description">
							<h3>Honest Entertainer</h3>
						</div>
					</li>
					<li>
						<img src="images/3.jpg" alt="image3"/>
						<div class="sb-description" style="width:1024px">
							<h3>Brave Astronaut</h3>
						</div>
					</li>
					<li>
						<img src="images/4.jpg" alt="image4"/>
						<div class="sb-description">
							<h3>Affectionate Decision Maker</h3>
						</div>
					</li>
					<li>
						<img src="images/5.jpg" alt="image5"/>
						<div class="sb-description">
							<h3>Faithful Investor</h3>
						</div>
					</li>
					<li>
						<img src="images/6.jpg" alt="image6"/>
						<div class="sb-description">
							<h3>Groundbreaking Artist</h3>
						</div>
					</li>
					<li>
						<img src="images/7.jpg" alt="image7"/>
						<div class="sb-description">
							<h3>Selfless Philantropist</h3>
						</div>
					</li>
				</ul>

				<div id="shadow" class="shadow"></div>

				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>

				<div id="nav-options" class="nav-options">
					<span id="navPlay">Play</span>
					<span id="navPause">Pause</span>
				</div>

			</div><!-- /wrapper -->


		</div>
				<script type="text/javascript" src="jquery-1.9.1.js"></script>
		<script type="text/javascript" src="jquery.airport-1.1.source.js"></script>
		<script type="text/javascript" src="jquery.jrumble.1.3/jquery.jrumble.1.3.min.js"></script>
<script type="text/javascript" src="js/jquery.slicebox.js"></script>
		<script type="text/javascript">
			$(function() {
				$('#LOGO').airport(['Company Profile']);
				
				var Page = (function() {
$('.m').jrumble();

$('.m').trigger('startRumble');
					var $navArrows = $( '#nav-arrows' ).hide(),
						$navOptions = $( '#nav-options' ).hide(),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$navOptions.show();
								$shadow.show();

							},
							orientation : 'h',
							cuboidsCount : 3
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;

							} );

							$( '#navPlay' ).on( 'click', function() {
								
								slicebox.play();
								return false;

							} );

							$( '#navPause' ).on( 'click', function() {
								
								slicebox.pause();
								return false;

							} );

						};

						return { init : init };

				})();

				Page.init();

			});
		</script>
	</body>
</html>	

<link rel="stylesheet" href="style.css">
 <!--<div id="header"> </div>-->
<div id="main">
<div id="content"> <center>
<p style="font-size:40px;text-transform:uppercase;" align="center" id="LOGO"> Company Profile  </p>
<style>
#x1
{
	border-collapse:collapse;
	
}
#x1 tr:nth-child(1)
{
	background-color:#000;
	color:#FFF;
	font-family:Georgia, "Times New Roman", Times, serif;
}
#x1 tr:nth-child(even){
background-color:#E0FFFF;
	color:#003;
	font-family:Georgia, "Times New Roman", Times, serif;
	
	}

</style>

<form action="addcompany1.php" method="post"  enctype="multipart/form-data">
<table>
<tr> <td> <label> Company Name </label> </td> <td> <input type="text" name="cname" /> <br /> </td> </tr>
<tr> <td> <label> Company Logo </label> </td> <td> <input type="file" name="clogo"> </td> </tr>
<tr> <td><label> Description </label></td> <td> <textarea name="cdesc"> </textarea> <br /> </td> </tr>
<tr> <td> <label> Website </label> </td> <td>  <input type="url" name="curl" /> <br /> </td> </tr>
<tr> <td> <label> <u> <b> Required Criteria: </b> </u> </label> </td> </tr> <br />
<tr> <td> <label> 10th(percentage) </label> </td> <td> <select name="c10">
<?php
for($i=40;$i<=100;$i++) {
	echo "<option value='$i'> $i </option>";
}
?>
 </select> <br /> </td> </tr>
<tr> <td> <label> 12th(percentage) </label> </td> <td> <select name="c12"> 
<?php
for($i=40;$i<=100;$i++) {
	echo "<option value='$i'> $i </option>";
}
?>
</select> <br /> </td> </tr>
<tr> <td> <label> Graduate(upto sem) </label> </td> <td>  <select name="cgrad"> 
<?php 
for($i=1;$i<=8;$i++) {
echo "<option value='$i'> $i </option>";
}
?>
</select> <br> </td> </tr>

<tr> <td> <label> Backlogs allowed </label> </td> <td> <select name="cback"> 
<?php
for($i=0;$i<=5;$i++) {
	echo "<option value='$i'> $i </option>";
}
?>
</select> <br> </td> </tr>
<tr> <td> <label> &nbsp; </label> </td> <td>  <input type="submit" name="save" value="save" /> </td> </tr>
</table>
</form>





 <style>
 .m
 {
color:#000;	 
	}
 
 </style>
  </center> </div>
 <div id="menu">


 <style>
 #sidebar a
 {
	 padding-top:20px;
	 font-family:"Times New Roman", Times, serif;
	 font-size:22px;
 }
 #sidebar  p,#notification p{
font-size:26px;
} 
 </style>
  <div id="sidebar"> <center>
     <b> <p style="background-color:blue;color:yellow;">Menu </p> </b> <br>
     <?php
	 
	 $status=$_SESSION['status'];
	 if($status=='admin')
	 {
		include('adminm2.php');	 
	 }
	 else
	 {
		 include('user2.php');
	}
	 
	 ?>
     
     
      </center> </div>
           <div id="notification"> <p align='center' style="background-color:blue;color:yellow;">   Notifications </p> 
<marquee direction='up'>
<table width="90%"  align="right">
<?php

mysql_connect('localhost','root','');
mysql_select_db('placement');
$query="select * from notification order by id desc ";
$rs=mysql_query($query);
while($row=mysql_fetch_row($rs))
{
echo "<tr><td><span align='center' style='font-size:14px'> <font color='red'>Date : " .$row[2]." </font> ".$row[1]."</span></td></tr>";
}


?>
</table>
<br><br>
</marquee>
</div>

<!--     <div id="notification"> <marquee> Notifications </marquee> </div>
    --> </div> </div>



<?php
if (isset($_REQUEST['save']))
{
$Cname=$_POST['cname'];     
$Cdesc=$_POST['cdesc'];
$Curl=$_POST['curl'];
$C10th=$_POST['c10'];
$C12th=$_POST['c12'];
$Cgrad=$_POST['cgrad'];
$Cback=$_POST['cback'];
$Clogo=$_FILES['clogo']['name'];
$Ctmp=$_FILES['clogo']['tmp_name'];
if(move_uploaded_file($Ctmp,"company_logo/$Clogo"))
{

mysql_connect('localhost','root','');
mysql_select_db('placement');

$query="INSERT INTO `compprofile`(`ID`, `Cname`, `Clogo`, `Cdesc`, `Curl`, `C10th`, `C12th`, `Cgrad`, `Cback`) VALUES (NULL,'$Cname','$Clogo','$Cdesc','$Curl','$C10th','$C12th','$Cgrad','$Cback')";
$rs=mysql_query($query);

if ($rs)
{
	echo "<script> alert('new company $Cname added');
	</script>";
}
else {
	echo "<script> alert(' try again') </script>";
}
}
else
{
	echo "<script>alert('Error while Uploading');</script>";	
}
}
?>