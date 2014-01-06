<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php
   include ("/conn/conn.php");
   $sno=mysql_query("select sno from user where user='fanfzj'");
  $asno= mysql_fetch_array($sno);
  $xy=mysql_query("select xy from user where sno='".$asno[0]."'");
  $axy=mysql_fetch_array($xy);	
  $xyid=mysql_query("select xyid from db_xy where xyname='".$axy[0]."'");	
  $axyid=mysql_fetch_array($xyid);
  $zy=mysql_query("select zy from user where sno='".$asno[0]."'");
$azy=mysql_fetch_array($zy);//从学生表中获取专业
$i=0;
$rs = mysql_query("select zyname from db_zy where xyid='".$axyid[0]."'");
$arr = mysql_fetch_array($rs);
$bj=mysql_query("select bj from user where sno='".$asno[0]."'");
$abj=mysql_fetch_array($bj);
 echo $azy[0] ."<br>". $asno[0] ."<br>". $abj[0];
?>

<body>
</body>
</html>