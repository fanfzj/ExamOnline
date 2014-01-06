<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="../css/8-9.css" type="text/css" rel="stylesheet" />
</head>

<body id="st">
<ul id="tabnav">
      <li class="st"><a href="rightframesave.php">试题查询</a></li>
      <li class="grzl"><a href="student.php" >个人资料</a></li>
     <li class="cj"><a href="examscore.php">成绩查询</a></li>
      <li class="ma"><a href="修改密码界面.html">修改密码</a></li>
      <li class="bk"><a href="补考查询界面.html">补考查询</a></li>
  
</ul>

<div id="content">
<ul>
  <li>试题练习</li>
  <form action="rightframesave.php" name="sjform" method="post" onsubmit="return choose()">
  <select name="sj">
  <option value="1" selected="selected">请选择试卷</option>
  <?php
   include("../conn/conn.php");
   include("../conn/session.php");
   $sj=mysql_query("select sj from exam_sj");
   while($asj=mysql_fetch_array($sj))
   {
	   echo "<option>".$asj[0]."</option>";
	   $i++;
   }
  ?>
  </select>
  <br />
  <input type="submit" id="button" value="提交" />
  </form>
  <br />
  <li>周测</li>
  <li>月测</li>
</ul>

</div>
</body>
<script language="javascript" type="text/javascript">
function choose()
{
	if(document.sjform.sj.value=="1")
	{
		  alert("请选择试卷!");
		  form.sj.select();         //返回sj选择框
		  return (false);
	}
	return (true);
}
</script>
</html>



