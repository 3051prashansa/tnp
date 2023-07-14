<?php

error_reporting(0);
require_once("chkvalid.php");

?>

<style>
body
{
background-image:url(2.jpg);

}
.logo
{
font-family:Georgia, "Times New Roman", Times, serif;
font-size:24px;
}
*
{
color:#FFFFFF;
}
.aptbtn
{
width:50px;
height:50px;
border-radius:360px;
background-image:url(notans.png);
color:#FFFFFF;
}
.d
{
background-image:url(ans.png);
color:#000000;
font-weight:bold;
}
.two
{
background-image:url(2.jpg);
color:#000000;
font-weight:bold;
}
.one
{
background-image:url(3.jpg);
color:#000000;
font-weight:bold;
}
.three
{
background-image:url(4.jpg);
color:#000000;
font-weight:bold;
}

</style>


<script src="jquery-1.9.1.js"></script>

<script src="airport/jquery.airport-1.1.source.js"></script>
<script>

var myVar=setInterval(function(){myTimer()},1000);
var minute=10 ;
var second=60;
function myTimer()
{

if(minute==-1)
{
alert('Exam Over...');
window.location="result.php";

clearInterval(myVar);
}
else
{

document.getElementById("demo").innerHTML= "Time Left  : "+minute+" M :  "+ second+" S";
second--;

if(second==-1)
{
 second=60;
minute--;
}
}
}
</script>



<script type="text/javascript">
$(document).ready(function(){
var actans;
var id;
$('.airpo').airport(['ONLINE EXAM']);
var nextqid;
var vimg=["one","two","one"];
var imgcount=0;
/*var myVar=setInterval(function(){
$('body').removeClass(vimg[(imgcount%3)-1]).addClass(vimg[imgcount%3]).fadeIn(2000);
alert(vimg[imgcount%3]);
imgcount++;
},5000);
*/

function nextQ()
{
id=nextqid;
actans=$('#'+nextqid).attr('name');
 var qno=$('#'+nextqid).val();
$.post('question.php',{id:nextqid,qno:qno},function(data){

$('.question').html(data);

});

//alert(nextqid);
}

$('.aptbtn').click(function(){
 id=$(this).attr('id');
 var qno=$(this).val();
 
actans=$(this).attr('name');
//alert(id);
$.post('question.php',{id:id,qno:qno},function(data){
$('.question').html(data);

});
});

$('body').on('click','#finish',function(){
window.location="result.php";
});

$('body').on('click','#answer',function(){
var val;
var opno=$('input.a:checked').attr('id');
var uans=$('input.a:checked').val();
//var c=$('#'+id).closest('td').next().find('input').val();//val();
//alert(c);
//alert(uans+" "+opno);
//alert(actans+" "+uans+" "+'#'+id);
$('#'+id).addClass('d');
if(actans==uans)
{
val=1;
}
else
{
val=0;
}
$.post('answer.php',{val:val,actans:actans,uans:uans,id:id,opno:opno},function(data){
$('.question').append(data);

});

})
$('body').on('click','#next',function(){
nextqid=parseInt(id)+1;
nextQ();
});

});

</script>
<?php
mysql_connect('localhost','root','');
mysql_select_db('exam');
$q1="select * from exam where type='aptitute'";
$i=0;
$rs=mysql_query($q1);
?>
<span style="position:fixed;left:30px;top:0%;font-family:Sketchy;font-size:60px;">Exam System</span><br/><div style="position:absolute;left:300px;top:12%;">Prepares You For Examination</div>
<div id="contentbk" style="background-color:#000000;height:550px;position:absolute;top:120px;left:19%;width:80%;border-radius:15px;opacity:0.4;box-shadow:3px 5px 170px blue"><p  style="float:right;margin-top:-30px;font-family:'CHE LIVES!';font-size:40px;" class="airpo">Online Exam</p></div>
<p class="logo" style="margin-top:100px;"></p>
<table>
<tr>
<?php 
while($r=mysql_fetch_array($rs))
{
if($i%4==0)
{?>
</tr>
<tr>
<?php
}?>
<td> <input   title="<?php echo $i+1; ?>" class="aptbtn" type="button" value="<?php echo $i+1;  ?>" id="<?php echo $r['ID'];  ?>" name="<?php echo $r['ans'];  ?>" /> </td>
<?php
$i++;
}
?>
</tr>
</table>

<?php
$q1="select * from exam where type='tech'";
$i=0;
$rs=mysql_query($q1);
?>
<p class="logo"></p>
<table>
<tr>
<?php 
while($r=mysql_fetch_array($rs))
{
if($i%4==0)
{?>
</tr>
<tr>
<?php
}?>
<td> <input class="aptbtn" type="button" value="<?php echo $i+1;  ?>"  id="<?php echo $r['ID'];  ?>" name="<?php echo $r['ans'];  ?>" /> </td>
<?php
$i++;
}
?>
</tr>
</table>
<div id="demo" style="color:#FFFFFF;font-family:Georgia, 'Times New Roman', Times, serif;height:450px;width:40%;position:absolute;font-size:36px; top:20%;left:60%;"></div>
<div id="showinstruction" style="color:#FFFFFF;font-family:Georgia, 'Times New Roman', Times, serif;height:450px;width:40%;position:absolute;font-size:36px; top:20%;left:20%;"><img style="border-radius:360px;" src="ans.png" />: Answer<br/> <img style="border-radius:360px;" src="notans.png" />Not - Ans </div>
<div class="question" style="color:#000000;font-family:'Ribeye Marrow';height:450px;width:600px;position:absolute;font-size:36px; top:30%;left:40%;">

</div>
