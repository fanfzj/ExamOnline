<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/exampaper.css" />
<body>
<form action="pd.php" method="post" name="pdform">
<iframe style="display: none" id="rfFrame"  name="rfFrame" src="about:blank"></iframe>
<?php  
include ("../conn/conn.php");   //连接数据库
include ("../conn/session.php");
$km=mysql_fetch_array(mysql_query("select km from exam_sj where sj='".$sj."'"));
$sno=mysql_fetch_array(mysql_query("select sno from user where user='".$user."'"));
$pagesize=1; // 每页显示的行数  
$i=1;
if(isset($_GET['page'])&&$_GET['page']!='')
{
	$page=$_GET['page'];
	$_SESSION['pdpage']=$page+1;
	$pageid=$page+1;
}
else{
	$page=0;
}
$sql="select pd from exam";
// 得到查询结果 
$numRecord=mysql_num_rows(mysql_query($sql));  
$totalpage=ceil($numRecord/$pagesize);
$pdsql=$sql ." LIMIT " .$pagesize*$page."," .$pagesize;
$pd=mysql_query($pdsql);
if (empty($offset)) {  
$offset=1;  
}  
 
// 现在显示查询结果  
while($apd=mysql_fetch_array($pd)) {
	// 在这里插入您要显示的结果以及样式  
?> 
<div id="t">
  第<?php echo $page+1; ?>题：
<div id="content">
<?php echo $apd['pd'];?> 
</div>
答：
<div id="pdanswer">
  <input type='radio' name='pd' value='对'/>对
  <input type='radio' name='pd' value='错'/>错
</div> 
<button onclick="loadXMLDoc()" onsubmit="return chickinput(form)" >提交</button>
</div> 
<div style="clear:both;"></div>
<div id="dashine"></div>
<div id="ym">
<span class="gratborder" style="background-color:#f6f6f6;"><a href='pd.php?page=<?php 
if($page>0) echo $page-1;
?>'>上一题</a></span>
<span class="gratborder" style="background-color:#f6f6f6;"><a href='pd.php?page=<?php if($page<$totalpage-1) echo $page+1;?>'>下一题</a></span>
</div>
<div id="myDiv">
<?php
$pdanswer=trim($_POST['pd']);
$score=0;
$pdtm=mysql_fetch_array(mysql_query("select answer from exam where pdid='".$pageid."'"));
echo "结果为：".$pdanswer;
if($pdanswer==$pdtm)
{
	$score=$score+1;
 mysql_query("UPDATE exam_score SET pd='".$score."' WHERE km='".$km[0]."',sno='".$sno[0]."'");
}
}
?>
</div>
<script language="javascript" type="text/javascript">
   function chickinput()              //定义一个判断函数
   {
	  if(pdform.pd.value=="")  
	  //判断pd选择框中的只是否为空
	  { 
          alert("请选择答案!");
		  form.pd.select();         //返回pd选择框
		  return (false);
	  }
	   return (true);                   //提交表单
   }
   function loadXMLDoc()
   {
	   var xmlhttp;
	  if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","pdsave.php",true);
xmlhttp.send();
}
</script>      
</body>
</html>
