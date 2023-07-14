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
						<a href="http://www.flickr.com/photos/strupler/2968268187" target="_blank"><img src="images/t.jpg" alt="t"/></a>
						<div class="sb-description">
							<h3>Honest Entertainer</h3>
						</div>
					</li>
					<li>
						<a href="http://www.flickr.com/photos/strupler/2968114825" target="_blank"><img src="images/3.jpg" alt="image3"/></a>
						<div class="sb-description" style="width:1024px">
							<h3>Brave Astronaut</h3>
						</div>
					</li>
					<li>
						<a href="http://www.flickr.com/photos/strupler/2968122059" target="_blank"><img src="images/4.jpg" alt="image4"/></a>
						<div class="sb-description">
							<h3>Affectionate Decision Maker</h3>
						</div>
					</li>
					<li>
						<a href="http://www.flickr.com/photos/strupler/2969119944" target="_blank"><img src="images/5.jpg" alt="image5"/></a>
						<div class="sb-description">
							<h3>Faithful Investor</h3>
						</div>
					</li>
					<li>
						<a href="http://www.flickr.com/photos/strupler/2968126177" target="_blank"><img src="images/6.jpg" alt="image6"/></a>
						<div class="sb-description">
							<h3>Groundbreaking Artist</h3>
						</div>
					</li>
					<li>
						<a href="http://www.flickr.com/photos/strupler/2968945158" target="_blank"><img src="images/7.jpg" alt="image7"/></a>
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
				$('#LOGO').airport(['Add New Notification']);
				
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
<p style="font-size:40px;text-transform:uppercase;" align="center" id="LOGO">Add New Notification  </p>
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
input[type=text],input[type=datetime],textarea
{
height:50px;
margin:20px;
width:100%;
font-family:Georgia, "Times New Roman", Times, serif;
font-size:18px;
padding:5px 10px;
	
	}
</style>

<form action="addnotification.php">
<table width="40%" align="center">
<tr>
<td>
<textarea placeholder="Enter Notifiction" name="t1"></textarea>
</td></tr><tr>
<td>
<input type="datetime" placeholder="Enter Date" name="t2">
</td>
</td></tr>
<tr>
<td>
<input type="submit" value="Submit" name="b1">
</td>
</td></tr>

</table>


</form>



<?php
     
     include"dbConnect.php";
	if(isset($_REQUEST['b1']))
	{
	 $msg=$_REQUEST['t1'];
	 $date=$_REQUEST['t2'];
	 $dt=date('d:M:y h:i:s');
	 
$rs=	mysql_query("insert into notification values(NULL,'$date-$msg','$dt')",$con);
	if($rs)
	{
	echo"<h2 class='m'>Inserted Sucessfully</h2>";	
		
	} 
	else
	{
		echo "<h2 class='m'>Error</h2>";	
	}
	}
	 	 
?>
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


