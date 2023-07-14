<link rel="stylesheet" href="style.css">
 <div id="header"> </div>
<div id="main">
  <div id="content">
 <center>
<h1> <b> <u> Company Profile </u> </b> </h1> <br />
<form action="addcompany.php" method="post"  enctype="multipart/form-data">
<table>
<tr> <td> <label> Company Name </label> </td> <td> <input type="text" name="cname" /> <br /> </td> </tr>
<tr> <td> <label> Company Logo </label> </td> <td> <input type="file" name="clogo"> </td> </tr>
<tr> <td><label> Description </label></td> <td> <textarea name="cdesc"> </textarea> <br /> </td> </tr>
<tr> <td> <label> url </label> </td> <td>  <input type="url" name="curl" /> <br /> </td> </tr>
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
</center>
		</div>
 <div id="menu">
  <div id="sidebar"> <center>
     <b> <u> Menu </u> </b> <br>
     <a href="addcompany.php"> Add company </a> <br>
     <a href> Update </a> <br>
     <a href="search.php"> Search Student </a> <br>
     <a href> Approve </a> <br>
     <a href> Add Questions </a> <br>
     <a href> Notifications </a> <br>
     <a href> New Arrival </a> <br>
     <a href> Logout </a> </center> </div>
     <div id="notification"> <marquee> <b> Notifications </b> </marquee> <br /> <center>
     <form action="notification.php" method="get">
     <input type="submit" align="bottom" name="notific" value="Insert Notification" height="50px" width="100px"/> </form> </center> </div>
     </div> </div>
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