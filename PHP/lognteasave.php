<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php
 include ("conn/conn.php");   //连接数据库
 $use=trim($_POST['username']);
 $truepwd=trim($_POST['pwd']);
 $pwd=md5($truepwd);
  session_start();                     //初始化session变量
   //获取注册的用户名
   //判断指定的用户名是否存在
   $sql=mysql_query("select * from tea_user where user='".$use."'");
   if($sql!=false)   //按指定条件检索
   {
	echo "<script language='javascript'>alert('用户名不正确');history.back();</script>";
	exit; 
    }
	if(mysql_query("select pwd='".$truepwd."' from tea_user where user='".$use."'",$conn))
	{
	session_register("unc");
	$_SESSION["unc"]=$use;
	echo "<script>alert('登陆成功！');window.location.href='stumain/index.html';</script>";
   }
   else{
   echo "<script language='javascript'>alert('对不起，密码错误！');history.back();</script>";
   exit;
   }
?>
</body>
</html>