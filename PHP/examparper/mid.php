<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="../css/exampaper.css" />
</head>
<body>
<div id="t">
欢迎进入试题界面，请选择试卷！
 <form action="sj.php" name="sjform" method="post" onsubmit="return choose()">
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
</div>
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
</body>
</html>
