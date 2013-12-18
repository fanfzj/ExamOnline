<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style>
#main{
	margin-left: 80px;
	color: #000;
}
</style>
</head>
   <?php
 include ("../conn/conn.php");   //连接数据库
   //$use=$_SESSION["unc"];
   $use="fanfzj";
?>
<body id="main"> <table width="95%" height="76"  border="1" cellpadding="0"  cellspacing="0" id="top1">
    <tr>
            <th width="300" bgcolor="#66FF00" scope="col">姓名：
        <?php
		     $sno=mysql_query("select sno from user where user='".$use."'");
			 $asno= mysql_fetch_array($sno);
		     $name=mysql_query("select name from user where sno='".$asno[0]."'");
			 $aname = mysql_fetch_array($name);
			 echo "<color='#66FF00'>".$aname[0];
		 ?>
		</th>
        <th width="360" bgcolor="#339900" scope="col">专业：
         	 <?php 
			 $xyid=mysql_query("select xyid from user where user='".$use."'");
			 $axyid=mysql_fetch_array($xyid);
			 $xyname=mysql_query("select xyname from db_xy where xyid='".$axyid[0]."'");
             $axyname=mysql_fetch_array($xyname);
			 echo $axyname[0];
			 ?>
      <th width="300" bgcolor="#9900CC" scope="col">学号：
         <?php
			 echo $asno[0];
		 ?>
      <th width="298" bgcolor="#666600"  scope="col">考试项目：
         <?php
         $rs = mysql_query ("select * from exam_score where sno='".$asno[0]."';");
		 $arr = mysql_fetch_array($rs);
		 echo $arr ["km"];
		 ?>
         </th>
    </tr>
    </table>
</body>
</html>
