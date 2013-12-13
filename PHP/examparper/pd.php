<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>

<link rel="stylesheet" type="text/css" href="../css/exampaper.css" />
</head>
  <?php
 include ("../conn/conn.php");   //连接数据库
   //$use=$_SESSION["unc"];
   $use="fanfzj";
?>
<body>
<div id="t">
<p>判断题：</p>
<p>题目：</p>
<div  id="content">
<?php
   $pdid=1;
   $pd=mysql_query("select pd from exam_pd where pdid='".$pdid."'");
   $apd=mysql_fetch_array($pd);
   echo $apd[0];
?>
</div>
<p>答：
<div  id="pdanswer">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type='radio' name='sex' value='对'/>对
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type='radio' name='sex' value='错'/>错
</div>
</p>
<p align="center"> <input name="上一题" type="button" value="上一题" id="上一题" />&nbsp;
  <input name="全部提交" type="button" id="全部提交" value="全部提交" />&nbsp;&nbsp;<input name="下一题" type="button" value="下一题" id="下一题" />
</p>

</div>

</body>
</html>
