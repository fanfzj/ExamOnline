<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php
include("../conn/conn.php");
$truepwd=trim($_POST['pwd']);
$pwd=md5($truepwd);
$password=trim($_POST['textfield2']);
$newpwd=md5($password);
if(mysql_query("select truepwd='".$truepwd."' from stu_user where user='fanfzj'"))
{
	if(mysql_query("UPDATE stu_user SET pwd='".$newpwd."',truepwd='".$password."' WHERE user='fanfzj'"))
	//WHERE user='".$_SESSION["unc"]."'
{
	echo "<script>alert('密码修改成功！');history.back();</script>";
}
else echo "<script>alert('密码修改失败！');history.back();</script>";
}
else echo "<script>alert('密码错误！');history.back();</script>";

?>
<body>
</body>
</html>