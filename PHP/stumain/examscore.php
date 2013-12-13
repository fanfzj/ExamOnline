<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="../css/examsore.css"/>

</style>
</head>
   <?php
 include ("../conn/conn.php");   //连接数据库
   //$use=$_SESSION["unc"];
   $use="fanfzj";
?>
<body bgcolor="#9ac5b5" id="cj">
<ul id="tabnav">
      <li class="st"><a href="学生主界面右界面.html">试题查询</a></li>
      <li class="grzl"><a href="student.php" >个人资料</a></li>
     <li class="cj"><a href="成绩查询界面.html">成绩查询</a></li>
      <li class="ma"><a href="修改密码界面.html">修改密码</a></li>
      <li class="bk"><a href="补考查询界面.html">补考查询</a></li>

</ul>
<div id="content">
  <span id="leftpic">
  <form action="" method="post">
    <table width="1000" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <th width="230" scope="col">姓名：
        <?php
		     $sno=mysql_query("select sno from user where user='".$use."'");
			 $asno= mysql_fetch_array($sno);
		     $name=mysql_query("select name from user where sno='".$asno[0]."'");
			 $aname = mysql_fetch_array($name);
			 echo $aname[0];
		 ?>
		</th>
        <th width="400" scope="col">专业：
         	  <?php 
			 $xyid=mysql_query("select xyid from user where user='".$use."'");
			 $axyid=mysql_fetch_array($xyid);
			 $xyname=mysql_query("select xyname from db_xy where xyid='".$axyid[0]."'");
             $axyname=mysql_fetch_array($xyname);
			 echo $axyname[0];
			 ?>
        <th width="250" scope="col">学号：
         <?php
			 echo $asno[0];
		 ?>
         </th>
      </tr>
    </table>
    <div id="content1">
<table style="border: 1px dashed #698CC3; width: 94%; line-height: 200%;"
    cellpadding="0px" cellspacing="0px">
    <tr>
        <td align="center" colspan="8" class="tbhead">考试成绩</td>
    </tr>
    <tr>
        <th class="tbleft">科目</th>
        <th class="tbleft">填空题</th>
        <th class="tbleft">选择题</th>
        <th class="tbleft">多选题</th>
        <th class="tbleft">排序题</th>
        <th class="tbleft">判断题</th>
        <th class="tbleft">简答题</th>
        <th class="tbleft">得分</th>
    </tr>
    <?php
     include ("../conn/conn.php");   //连接数据库
        $sql = "select * from exam_score where sno='".$asno[0]."';";
		//".$sno."
        $rs = mysql_query ($sql);
        while ($arr = mysql_fetch_array($rs) ) {
            echo "<tr align='center'>";
            echo "<td class='tbright'>" . $arr ["km"] . "</td>";
            echo "<td class='tbright'>" . $arr ["tk"] . "</td>";
            echo "<td class='tbright'>" . $arr ["xz"] . "</td>";
            echo "<td class='tbright'>" . $arr ["dx"] . "</td>";
			echo "<td class='tbright'>" . $arr ["px"] . "</td>";
		    echo "<td class='tbright'>" . $arr ["pd"] . "</td>";
			echo "<td class='tbright'>" . $arr ["jd"] . "</td>";
			echo "<td class='tbright'>" . $arr ["score"] . "</td>";
            echo "</tr>";
        }
        mysql_free_result ($rs);
       mysql_close ($conn);
       ?>
   </table>
  </div>
 </form>
</span>
</body>
</html>

