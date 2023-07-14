<?php

session_start();

error_reporting(0);
$uid=$_SESSION['examid'];
mysql_connect('localhost','root','');
mysql_select_db('exam');
$id=$_REQUEST['id'];$qno=$_REQUEST['qno'];
$q="select * from useranswer where qid=$id and examid=$uid";
$q1="select * from exam where id=$id";
$rs=mysql_query($q1);
//echo $q;
$r1=mysql_query($q);
if($r2=mysql_fetch_array($r1))
{
 $ans= $r2['cp'];






?>
<p class="logo">Question <?php echo $qno; ?> </p>
<table style="width:100%;font-size:24px;font-family:'Times New Roman', Times, serif;">

<?php 
if($r=mysql_fetch_array($rs))
{?>
<tr>

<td colspan="2"><?php echo $r['question'];?></td>
</tr>
<tr>
<td>
<?php 
if($ans=='op1') 
{
?>    
<input id="op1" type="radio" name="option" class="a" value="<?php echo $r['op1']; ?>" checked="checked" /> 
<?php  
}
else
{
?>
<input id="op1" type="radio" name="option" class="a" value="<?php echo $r['op1']; ?>" />
<?php
}?> 
 <?php echo $r['op1']; ?> 
</td>
<td>
<?php
if($ans=='op2') 
{
?>    

<input id="op2" checked="checked" type="radio" class="a" name="option" value="<?php  echo $r['op2']; ?>" /><?php echo $r['op2']; ?>
<?php
}
else
{
?>
<input id="op2"  type="radio" name="option" class="a" value="<?php  echo $r['op2']; ?>" /><?php echo $r['op2']; ?>

<?php
}
?>
 </td>

</tr>
<tr>
<td>
<?php
if($ans=='op3') 
{
?>    

<input type="radio" name="option" class="a" value="<?php echo $r['op3']; ?>" id="op3" checked="checked" /><?php echo $r['op3']; ?> 
<?php
}
else
{

?>

<input type="radio" name="option" class="a" value="<?php echo $r['op3']; ?>" id="op3" /><?php echo $r['op3']; ?> 


<?php
}
?>

</td>
<td>
<?php
if($ans=='op4') 
{
?>    

<input type="radio" name="option" class="a" value="<?php echo $r['op4']; ?>" id="op4" checked="checked" /><?php echo $r['op4']; ?>
<?php
}
else
{
?>
<input type="radio" name="option" class="a" value="<?php echo $r['op4']; ?>" id="op4" /><?php echo $r['op4']; ?>


<?php

}
?>
 </td>

</tr>

<tr>
<td><input id="answer" type="button" name="b1" value="Answer"  style="width:70px;height:70px;border-radius:360px;color:#000000"/></td>
<td><input type="button" name="b2" value="Next"  id="next"  style="width:70px;height:70px;border-radius:360px;color:#000000"/></td>

</tr>
<tr>
<td colspan="2" align="center"><input id="finish" type="button" style="width:70px;height:70px;border-radius:360px;color:#000000" name="b1" value="Finish" /></td>

</tr>





<?php
}














}




else
{


?>

<p class="logo">Question <?php echo $qno; ?> </p>
<table style="width:100%;font-size:24px;font-family:'Times New Roman', Times, serif;">

<?php 
if($r=mysql_fetch_array($rs))
{?>
<tr>

<td colspan="2"><?php echo $r['question'];?></td>
</tr>
<tr>
<td><input id="op1" class="a" type="radio" name="option" value="<?php echo $r['op1']; ?>" /><?php echo $r['op1']; ?> </td>
<td><input id="op2"  class="a" type="radio" name="option" value="<?php  echo $r['op2']; ?>" /><?php echo $r['op2']; ?> </td>

</tr>
<tr>
<td><input type="radio"  class="a" name="option" value="<?php echo $r['op3']; ?>" id="op3" /><?php echo $r['op3']; ?> </td>
<td><input type="radio" class="a"  name="option" value="<?php echo $r['op4']; ?>" id="op4" /><?php echo $r['op4']; ?> </td>

</tr>

<tr>
<td><input style="width:70px;height:70px;border-radius:360px;color:#000000" id="answer" type="button" name="b1" value="Answer" /></td>
<td><input style="width:70px;height:70px;border-radius:360px;color:#000000" type="button" name="b2" value="Next"  id="next" /></td>

</tr>

<tr>
<td colspan="2" align="center"><input id="finish" type="button" name="b1" style="width:70px;height:70px;border-radius:360px;color:#000000" value="Finish" /></td>

</tr>




<?php
}
}
?>
</table>