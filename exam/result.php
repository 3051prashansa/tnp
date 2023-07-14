<?php
session_start();
$uid=$_SESSION['examid'];
//require_once("chkvalid.php");
$_SESSION['examid']=-1;
?>
<style>
body
{
background-image:url(b6.jpg);
}
table.result td
{
padding: 5px 4px;
}
table tr:nth-child(even)
{
font-family:"Times New Roman";
font-size:18px;
color:#FFFFFF;
background-color:#000000;
}

table tr:nth-child(odd)
{
font-family:"Times New Roman";
font-size:18px;
color:#000000;
background-color:#FFFFFF;
}

table tr:nth-child(1)
{
font-family:Georgia, "Times New Roman", Times, serif;
font-size:18px;
color:#FFFFFF;
background-color:#000000;
}
</style>
<?php
mysql_connect('localhost','root','');
mysql_select_db('exam');
$count=0;
$q="select u.uans,u.score,e.question,e.op1,e.op2,e.op3,e.op4,e.ans from useranswer u,exam e where  e.id=u.qid and u.examid=$uid";
$r1=mysql_query($q);
?>
<table style="position:absolute;top:150px;border-collapse:collapse" width="100%" style="border-collapse:collapse;" border="1" class="result">
<tr>
<td>S.No</td><td>Question</td><td>Option1</td><td>Option2</td><td>Option3</td><td>Option4</td><td>Answer</td><td>Your Answer</td><td>Score</td></tr>
</tr>
<?php
$i=1;
while($r2=mysql_fetch_array($r1))
{
$sc=$r2['score'];
?>
<tr>
<td><?php echo $i; ?></td><td> <?php echo $r2['question']; ?> </td><td><?php echo $r2['op1']; ?></td><td><?php echo $r2['op2']; ?></td><td><?php echo $r2['op3']; ?></td><td><?php echo $r2['op4']; ?></td><td><?php echo $r2['ans']; ?></td><td><?php echo $r2['uans']; ?></td><td><?php echo $r2['score']; ?></td></tr>
</tr>
<?php
if($sc=='1')
{
$count++;
}
$i++;
}
?>
</table>
<p style="color:#CCCCCC;position:absolute;top:10px;left:10px;font-family:Georgia, 'Times New Roman', Times, serif;font-size:28px;">Marks : <?php echo $count; ?> &nbsp; / &nbsp;30</p>
<p style="font-size:56px;font-family:Blazed;color:#FFFFFF;position:absolute;left:600px;top:10px">Result</p>