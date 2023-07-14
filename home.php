<?php
session_start();
error_reporting(0);
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
				$('#LOGO').airport(['Welcome TO SSITM']);
				
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
 <?php
mysql_connect('localhost','root','');
mysql_select_db('placement');
$query="select * from compprofile where dst=0 ";
$rs=mysql_query($query);
echo "<table width='100%' border=1 id='x1' width='80%' style='border:solid #dcdcdc 1px;'>
<tr> <td> "?> <p style="font-size:40px;text-transform:uppercase;" align="center" id="LOGO">Welcome TO SSITM Durg </p><?php echo "</td>		</tr>";

echo "</table>";
?> 
<p style="font-size:20px;">
<h3>
ABOUT TPC
</h3>
<h5>
Training and Placement Cell (TPC) acts as interface between institute and companies and maintains symbiotic, vibrant and purposeful relationship with industries across the country as a part of the efforts to develop and strengthen the relationship with the corporate world, SSITM has delineated long-term strategy to place Under Graduate students in prestigious organizations. The Training and Placement Cell also attempts to keep the students informed about potential job opportunities and guide them from time to time. As a part of Industrial Institute Interaction, students are exposed to the actual work environment of various Industries. Hands-on training is offered to the students both on the conventional as well as in advanced techniques. 
There are times when anxiety grips the student’s heart and they need advisory help. The department works extensively in developing the student’s attitude as well as aptitude and analytical skills, human resources techniques and preparing for written test in the form of mock tests. Each and every student is assessed carefully, there by pointing out his weak areas and providing solutions to correct them so as to enhance their performance. It is always encouraging for students to know that they are being cared for and their future is being shaped by the right hands.
</h5>
 
<h3>
AIM
</h3>
<h5>
The aim of training and placement department of this college is to place maximum number of students in reputed IT and core manufacturing, infrastructure companies. To achieve this aim, the department has a continuous interaction with industries to have an idea of what the industries expect from our students.
</h5>
<h3>
MISSION
</h3>
<h5>
The mission of the Training & Placement Department is to help students clarify their educational and career goals as well as acquire employment-seeking skills and ultimately attain desired employment.
</h5>
<h3>
VISION
</h3>
<h5>
Sustained Excellence in Training, Placement and Career Orientation.

 </h5>
<h3>
Department Long Term Goals
</h3>
<h5>
To develop the Department of placement & training as a single window nodal point for career counseling and Higher learning in Engineering & Technology fields.
To set up the Training Infrastructure for conducting value added training programs and enhance the employability of students.
To institute the best practices in conducting and co-ordinating the campus placement process for the industries in the institution
 </h5>
<h3>
Department Short Term Goals
</h3>
<h5>
To build up a computerized database of students of all the branches with a view to serve the industries requirement in a queue response mode.
To acquire the services of competent training agencies to train the students in soft skills and personality development programme.
</h5>
</p>
</center> </div>
 <div id="menu">
 <style>
 #sidebar a
 {
	 padding-top:20px;
	 font-family:"Times New Roman", Times, serif;
	 font-size:16px;
 }
 
 </style>
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


