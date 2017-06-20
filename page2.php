<?php error_reporting(0);?>
<?php
	@mysql_connect("localhost","root","") or die("Demo is not available, please try again later");
	@mysql_select_db("project") or die("Demo is not available, please try again later");
?>
<?php
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=qn.doc");
echo "<html>";
echo "<body bgcolor='CCFFFF'>";
$br_code=$_POST['br_code'];
$name=$_POST['varname'];
$name1=$_POST['varname1'];
$name2=$_POST['varname2'];
$name3=$_POST['varname3'];
$name4=$_POST['varname4'];
$name5=$_POST['varname5'];
$j=0;
$sql7="select * from twomarks where sem_id='$br_code' and subject_name='$name3' and s_no='$name5'";
$sql_row=mysql_query($sql7);
while($sql_res4=mysql_fetch_assoc($sql_row))
{
	$count[$j]=$sql_res4["questions"];
	$j=$j+1;
}
$text5=$count[0];
$text6=$count[1];
$text7=$count[2];
$text8=$count[3];
$text9=$count[4];
$text10=$count[5];
$text11=$count[6];
$text12=$count[7];
$text13=$count[8];
$text14=$count[9];
$j=0;
$sql8="select * from sixteenmarks where sem_id='$br_code' and subject_name='$name3' and s_no='$name5' and l_no='$name4'";
$sql_row=mysql_query($sql8);
while($sql_res4=mysql_fetch_assoc($sql_row))
{
	$c[$j]=$sql_res4["questions"];
	$j=$j+1;
}
$text15=$c[0];
$j=0;$k=0;
if('1'!=$name4)
{
$sql8="select * from sixteenmarks where sem_id='$br_code' and subject_name='$name3' and s_no='$name5' and l_no='1'";
$sql_row=mysql_query($sql8);
while($sql_res4=mysql_fetch_assoc($sql_row))
{
	$c[$j]=$sql_res4["questions"];
	$j=$j+1;
}
$t[$k]=$c[0];
$k=$k+1;
$t[$k]=$c[1];
$k=$k+1;
}
$j=0;
if('2'!=$name4)
{
$sql8="select * from sixteenmarks where sem_id='$br_code' and subject_name='$name3' and s_no='$name5' and l_no='2'";
$sql_row=mysql_query($sql8);
while($sql_res4=mysql_fetch_assoc($sql_row))
{
	$c[$j]=$sql_res4["questions"];
	$j=$j+1;
}
$t[$k]=$c[0];
$k=$k+1;
$t[$k]=$c[1];
$k=$k+1;
}
$j=0;
if('3'!=$name4)
{
$sql8="select * from sixteenmarks where sem_id='$br_code' and subject_name='$name3' and s_no='$name5' and l_no='3'";
$sql_row=mysql_query($sql8);
while($sql_res4=mysql_fetch_assoc($sql_row))
{
	$c[$j]=$sql_res4["questions"];
	$j=$j+1;
}
$t[$k]=$c[0];
$k=$k+1;
$t[$k]=$c[1];
$k=$k+1;
}
$j=0;
if('4'!=$name4)
{
$sql8="select * from sixteenmarks where sem_id='$br_code' and subject_name='$name3' and s_no='$name5' and l_no='4'";
$sql_row=mysql_query($sql8);
while($sql_res4=mysql_fetch_assoc($sql_row))
{
	$c[$j]=$sql_res4["questions"];
	$j=$j+1;
}
$t[$k]=$c[0];
$k=$k+1;
$t[$k]=$c[1];
$k=$k+1;
}
$j=0;
if('5'!=$name4)
{
$sql8="select * from sixteenmarks where sem_id='$br_code' and subject_name='$name3' and s_no='$name5' and l_no='5'";
$sql_row=mysql_query($sql8);
while($sql_res4=mysql_fetch_assoc($sql_row))
{
	$c[$j]=$sql_res4["questions"];
	$j=$j+1;
}
$t[$k]=$c[0];
$k=$k+1;
$t[$k]=$c[1];
$k=$k+1;
}
$text16=$t[0];
$text17=$t[1];
$text18=$t[2];
$text19=$t[3];
$text20=$t[4];
$text21=$t[5];
$text22=$t[6];
$text23=$t[7];
echo "<b><center><font size='4'>Question Paper</font></center></b>";
echo "<br>";
echo "<b><font size='3'>Campus:</font></b>";
echo $name;
echo "<br><br>";
echo "<b><font size='3'>Branch:</font></b>";
echo $name1;
echo "<br><br>";
echo "<b><font size='3'>Sem:</font></b>";
echo $name2;
echo "<br><br>";
echo "<b><font size='6'><center>".$name3."</center></font></b><br><br>";
echo "<b><font size='4'><center>Part-A (10X2=20)</center></font></b>";
echo "<br><br>";
echo "<font size='3'><b>1.".$text5."</b></font><br><br>";
echo "<font size='3'><b>2.".$text6."</b></font><br><br>";
echo "<font size='3'><b>3.".$text7."</b></font><br><br>";
echo "<font size='3'><b>4.".$text8."</b></font><br><br>";
echo "<font size='3'><b>5.".$text9."</b></font><br><br>";
echo "<font size='3'><b>6.".$text10."</b></font><br><br>";
echo "<font size='3'><b>7.".$text11."</b></font><br><br>";
echo "<font size='3'><b>8.".$text12."</b></font><br><br>";
echo "<font size='3'><b>9.".$text13."</b></font><br><br>";
echo "<font size='3'><b>10.".$text14."</b></font><br><br>";
echo "<b><font size='4'><center>Part-B (5X16=80)</center></font></b>";
echo "<font size='3'><b>11.".$text15."</b></font><br><br>";
echo "<font size='3'><b>12)a).".$text16."</b></font><br><br>";
echo "<font size='3'><b><center>(OR)</center></b></font><br><br>";
echo "<font size='3'><b>12)b).".$text17."</b></font><br><br>";
echo "<font size='3'><b>13)a).".$text18."</b></font><br><br>";
echo "<font size='3'><b><center>(OR)</center></b></font><br><br>";
echo "<font size='3'><b>13)b).".$text19."</b></font><br><br>";
echo "<font size='3'><b>14)a).".$text20."</b></font><br><br>";
echo "<font size='3'><b><center>(OR)</center></b></font><br><br>";
echo "<font size='3'><b>14)b).".$text21."</b></font><br><br>";
echo "<font size='3'><b>15)a).".$text22."</b></font><br><br>";
echo "<font size='3'><b><center>(OR)</center></b></font><br><br>";
echo "<font size='3'><b>15)b).".$text23."</b></font><br><br>";
echo "</body>";
echo "</html>";
?>
