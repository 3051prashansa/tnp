<?php
session_start();
$uid=$_SESSION['examid'];
mysql_connect('localhost','root','');
mysql_select_db('exam');
$id=$_REQUEST['id'];
$actans=$_REQUEST['actans'];
$uans=$_REQUEST['uans'];
$val=$_REQUEST['val'];
$opno=$_REQUEST['opno'];
$q="select * from useranswer where qid=$id and examid=$uid";
$r1=mysql_query($q);
//echo $q;
if($r2=mysql_fetch_array($r1))
{
$q1="update  useranswer set cp='$opno',score=$val,uans='$uans' where qid='$id' and examid=$uid";
//echo $q1;
$r=mysql_query($q1);
if($r)
{
//echo "save";
}
else
{
//echo "not";
}

}
else
{
$q1="insert into useranswer values('bhawana','$id','$uans','$actans','$val','$opno',$uid)";
$r=mysql_query($q1);
if($r)
{
//echo "save";
}
else
{
//echo "not";
}
}
?>