<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/exampaper.css" />
<body>
<h1>判断题：</h1>
<form action="pdsave.php" method="post" onsubmit="return chickinput(form)">
<?php  
//本例子摘自phpbuilder.com  
//稍加翻译  
//<sprming@netease.com>
include ("../conn/conn.php");   //连接数据库
$limit=5; // 每页显示的行数  
$pdid=1;
$i=1;
$pd=mysql_query("select pd from exam_pd where pdid='".$pdid."'");// 得到查询结果 
$numrows=mysql_num_rows($pd);  
// next determine if offset has been passed to script, if not use 0  
if (empty($offset)) {  
$offset=1;  
}  
 
// 现在显示查询结果  
while($apd=mysql_fetch_array($pd)) {
	// 在这里插入您要显示的结果以及样式  
?> 
<div id="t">
<p>
  第<?php echo $i++; ?>题：
</p>
<div id="content">
<?php echo $apd['pd'];?> 
</div>
<p>答：</p>
<div id="pdanswer">
  <input type='radio' name='pd' value='对'/>对
  <input type='radio' name='pd' value='错'/>错
</div> 
</div> 
<?php 
}
// 显示按钮  

if ($offset!=1) { // bypass PREV link if offset is 1  
$prevoffset=$offset-5;  
print "<a href=\"$PHP_SELF?offset=$prevoffset\">上一题</a> &nbsp; \n";  
}  

// 计算页面数  
$pages=intval($numrows/$limit);  

// $pages now contains int of pages needed unless there is a remainder from division  
if ($numrows%$limit) {  
// has remainder so add one page  
$pages++;  
} 
?>
<div id="ym">
<?php 
// check to see if last page  
if (!(($offset/$limit)==$pages) && $pages!=1) {  
// not last page so give NEXT link  
$newoffset=$offset+$limit;  
print "<a href=\"$PHP_SELF?offset=$newoffset\">下一题</a><p>\n";  
}  
?> 
<input type="submit" id="button" value="提交" />
</div>
<script language="javascript" type="text/javascript">
   function chickinput(form)              //定义一个判断函数
   {
	  if(form.pd.value=="")  
	  //判断pd选择框中的只是否为空
	  { 
          alert("请选择答案!");
		  form.pd.select();         //返回pd选择框
		  return (false);
	  }
	   return (true);                   //提交表单
   }
</script>      
</body>
</html>
