<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php
   include ("../conn/conn.php");   //连接数据库
   include ("../conn/session.php");
?>
<?php /*?><?php
If($photo!= "none") {   
$PSize = filesize($photo);   
$mysqlPicture = addslashes(fread(fopen($photo,"r"), $PSize));    
mysql_query("INSERT INTO user (photo) VALUES ($mysqlPicture)") or die("Cant Perform Query");   
}else {   
echo"You did not upload any picture";   
}   
?><?php */?>
<?php
$sno=trim($_POST['sno']);
$username=trim($_POST['username']);
$sex=trim($_POST['sex']);
$datatime=trim($_POST['datatime']);
$nation=trim($_POST['mz']);
$xy=trim($_POST['xy']);
$zy=trim($_POST['zy']);
$bj=trim($_POST['bj']);
$ID_number=trim($_POST['idnumber']);
echo $sno ."<br>".$username."<br>".$sex."<br>".$datatime."<br>".$nation."<br>".$xy."<br>".$zy."<br>".$bj."<br>".$ID_number."<br>";
if(mysql_query("UPDATE user SET sno='".$sno."',name='".$username."', sex='".$sex."',birthday='".$datatime."',nation='".$nation."',xy='".$xy."',zy='".$zy."',bj='".$bj."',ID_number='".$ID_number."' WHERE user='".$user."'"))
{
	echo "<script>alert('个人资料修改成功！');history.back();</script>";
}
else echo "<script>alert('个人资料修改失败！');history.back();</script>";
?>
</body>
</html>