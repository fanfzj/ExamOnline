<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style>
#t{
	width:800px;
	height:1000px;
	margin-top:20px;
	margin-left:30px;

	border-top:1px solid #11a3ff; 
	border-left:1px solid #11a3ff;      /*大边框宽度*/
	border-right:1px solid #11a3ff;
	border-bottom:1px solid #11a3ff;
	padding:15px;/*整体内容与大边框的距离*/
	font-size:22px;/*内容（字）的大小*/
	}
#content{
	
	width:800px;
	height:200px;
	margin-top:20px;
	margin-left:30px;
	
	border-top:1px solid #11a3ff; 
	border-left:1px solid #11a3ff;      /*大边框宽度*/
	border-right:1px solid #11a3ff;
	border-bottom:1px solid #11a3ff;
	padding:10px;/*整体内容与大边框的距离*/
	font-size:12px;/*内容（字）的大小*/
	}
#answer{
	
	width:800px;
	height:50px;
	margin-top:20px;
	margin-left:30px;
	border-top:1px solid #11a3ff; 
	border-left:1px solid #11a3ff;      /*大边框宽度*/
	border-right:1px solid #11a3ff;
	border-bottom:1px solid #11a3ff;
	padding:10px;/*整体内容与大边框的距离*/
	font-size:12px;/*内容（字）的大小*/
	}
#con{width:700px;
	height:100px;
	margin-top:20px;
	margin-left:30px;
	
	border-top:1px solid #11a3ff; 
	border-left:1px solid #11a3ff;      /*大边框宽度*/
	border-right:1px solid #11a3ff;
	border-bottom:1px solid #11a3ff;
	padding:10px;/*整体内容与大边框的距离*/
	font-size:12px;/*内容（字）的大小*/
	
	}

</style>
</head>

<body>
<div id="t">
<p>判断题：</p>
<p>题目：</p>
<div  id="content">
<?php
   $pdid=1;
   $pd=mysql_query("select pd form db_pd where pdid='".$pdid."'");
   $apd=mysql_fetch_array("$pd");
   echo $apd[0];
?>
</div>
<p>答：</p>
<div  id="answer">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type='radio' name='sex' value='对'/>对
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type='radio' name='sex' value='错'/>错
</div>
<p align="center"> <input name="上一题" type="button" value="上一题" id="上一题" />&nbsp;
  <input name="全部提交" type="button" id="全部提交" value="全部提交" />&nbsp;&nbsp;<input name="下一题" type="button" value="下一题" id="下一题" />
</p>

</div>

</body>
</html>
