<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php
    $sjname=trim($_POST['sj']);
    session_start();                     //初始化session变量
	$_SESSION['sj']=$sjname;
	if($sjname!="1")
	{
	echo "<script>alert('进入考试！');window.location.href='../examparper/index.html';</script>";
	}
	else
	{
	echo "<script language='javascript'>history.back();</script>";
   exit;
	}
?>
<body>
</body>
</html>