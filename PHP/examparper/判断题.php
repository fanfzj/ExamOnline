<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/exampaper.css" />
<body>
<?php  
//本例子摘自phpbuilder.com  
//稍加翻译  
//<sprming@netease.com>  
$limit=20; // 每页显示的行数  
$pdid=1;
$pd=mysql_query("select pd form db_pd where pdid='".$pdid."'");
$apd=mysql_fetch_array($pd);
$numrows=mysql_num_rows($pd);  

// next determine if offset has been passed to script, if not use 0  
if (empty($offset)) {  
$offset=1;  
}  

// 得到查询结果  
$pd=mysql_query("select pd form db_pd where pdid='".$pdid."'");
// 现在显示查询结果  
while ($apd) {
	// 在这里插入您要显示的结果以及样式  
?> 
<div id="t">
<p>判断题：</p>
<p>题目：</p>
<?php echo $apd['pd'];?> 
<div  id="content">
</div>
<p>答：</p>
<div  id="pdanswer">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type='radio' name='sex' value='对'/>对
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type='radio' name='sex' value='错'/>错
</div> 
<?php 
}
// 显示按钮  

if ($offset!=1) { // bypass PREV link if offset is 1  
$prevoffset=$offset-20;  
print "<a href=\"$PHP_SELF?offset=$prevoffset\">上一页</a> &nbsp; \n";  
}  

// 计算页面数  
$pages=intval($numrows/$limit);  

// $pages now contains int of pages needed unless there is a remainder from division  
if ($numrows%$limit) {  
// has remainder so add one page  
$pages++;  
}  
for ($i=1;$i<=$pages;$i++) { // 显示页数  
$newoffset=$limit*($i-1);  
print "<a href=\"$PHP_SELF?offset=$newoffset\">$i</a> &nbsp; \n";  
}  
// check to see if last page  
if (!(($offset/$limit)==$pages) && $pages!=1) {  
// not last page so give NEXT link  
$newoffset=$offset+$limit;  
print "<a href=\"$PHP_SELF?offset=$newoffset\">下一页</a><p>\n";  
}  

?> 
</div> 
</body>
</html>
