<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="../css/8-9.css" type="text/css" rel="stylesheet" />
<style type="text/css">
#leftpic{
	
	width:160px;
	float:left;
	padding-right:15px;
	text-align:center;/*居中(新增属性)*/
	white-space:nowrap;/*强制不换行(新增属性)*/}
}
#leftpic a:link,#leftpic a:visited{
	color:#006eb3;
	text-decoration:none;
	text-align:center;/*居中(新增属性)*/
	white-space:nowrap;/*强制不换行(新增属性)*/}
}
#leftpic a:hover{
	
	color:#000000;
	text-decoration:underline;
	text-align:center;/*居中(新增属性)*/
	white-space:nowrap;/*强制不换行(新增属性)*/}
	}
img{
	border:1px solid #069;
	margin-bottom:5px;
}
ul#list{

	list-style-type:none;
	margin:0px;
	padding:5px 0px 5px 2px;
}
ul#list li{
	line-height:18px;
}
ul#list li a:link{
	color:#000;
	text-decoration:none;
}
ul#list li a:visited{
	color:#333;
	text-decoration:none;
}
ul#list li a:hover{
	
	color:#006;
	text-decoration:underline;
}
</style>
</head>
<body id="grzl">
<?php
   include ("../conn/conn.php");   //连接数据库
   include ("../conn/session.php");
?>
<ul id="tabnav">
      <li class="st"><a href="rightframe.php">试题查询</a></li>
      <li class="grzl"><a href="student.php" target="_self">个人资料</a></li>
     <li class="cj"><a href="examscore.php">成绩查询</a></li>
      <li class="ma"><a href="修改密码界面.html">修改密码</a></li>
      <li class="bk"><a href="补考查询界面.html">补考查询</a></li>
</ul>
<div id="content">
  <span id="leftpic">
   <form action="upset.php?<?=session_name();?>=<?=session_id();?>" method="post" enctype="multipart/form-data">
     <table width="950" height="383" border="1" cellpadding="0" cellspacing="0">
       <tr>
         <th colspan="1" rowspan="5">照片
<?php /*?>            <?php
		     $photo=mysql_query("select photo from user where user='fanfzj'");
			 $aphoto= mysql_fetch_array($sno);
			 echo "<input type='image' name='photo' value='".$asno[0]."'>";
		 ?><?php */?>
        </th>
         <th width="201" scope="col">学号：</th>
         <th width="180" scope="col">
         <?php
		     $sno=mysql_query("select sno from user where user='".$user."'");
			 $asno= mysql_fetch_array($sno);
			 echo "<input type='text' name='sno' value='".$asno[0]."'>";
		 ?>
         </th>
         <th width="175" scope="col">姓名：</th>
         <th width="178" scope="col">
         <?php
		     $name=mysql_query("select name from user where sno='".$asno[0]."'");
			 $aname = mysql_fetch_array($name);
			 echo "<input type='text' name='username' value='".$aname[0]."'>";
		 ?>
         </th>
       </tr>
       <tr>
         <th>性别：</th>
         <th>
          <?php
		     $sex=mysql_query("select sex from user where sno='".$asno[0]."'");
			 $asex = mysql_fetch_array($sex);
			 if($asex[0]=="男")
			 {
			 echo "<input type='radio' name='sex' value='男' checked='checked'/>男";
			 echo "<input type='radio' name='sex' value='女'/>女";
			 }
			 else
			 {
				echo "<input type='radio' name='sex' value='男'/>男";
			 echo "<input type='radio' name='sex' value='女checked='checked'/>女"; 
			 }
			?>
           </th>
         <th>出生日期：</th>
         <th>
          <?php
		     $date=mysql_query("select birthday from user where sno='".$asno[0]."'");
			 $adate = mysql_fetch_array($date);
			 echo "<input type='date' name='datatime' value='".$adate[0]."' id='data'/>";
		 ?>
        </th>
       </tr>
       
       <tr>
         <th>民族：</th>
         <th>
          <?php
		     $nation=mysql_query("select nation from user where sno='".$asno[0]."'");
			 $anation = mysql_fetch_array($nation);
			 echo "<input type='text' name='mz' value='".$anation[0]."'/>";
			 ?>
			</th>
         <th>学院：</th>
         <th><select name="xy" method="post" />
          <?php 
			 $i=0;
			 $rs = mysql_query("select xyname from db_xy");
			 $xy=mysql_query("select xy from user where sno='".$asno[0]."'");
             $axy=mysql_fetch_array($xy);	
             $xyid=mysql_query("select xyid from db_xy where xyname='".$axy[0]."'");	
             $axyid=mysql_fetch_array($xyid);
			 while($arr = mysql_fetch_array($rs))
			 {
				 if($axy[0]==$arr[$i])
				 {
					 echo "<option selected='selected'>".$arr[$i]."</option>";
				 }
				 else{
		      echo "<option>".$arr[$i]."</option>";
				 }
			 }
          ?>
             </select>
             </th>
       </tr>
       <tr>
         <th>专业：</th>
         <th><select name="zy" c />
         	 <?php 
			 $zy=mysql_query("select zy from user where sno='".$asno[0]."'");
			 $azy=mysql_fetch_array($zy);//从学生表中获取专业
			 echo $axyid[0];
			 $i=0;
			 $rs = mysql_query("select zyname from db_zy where xyid='".$axyid[0]."'");
			 while($arr = mysql_fetch_array($rs))
			 {
				if($arr[$i]==$azy[0])
				 {
					 echo "<option selected='selected'>". $arr[$i]. "</option>";
				}
				else{
				 echo "<option>". $arr[$i]. "</option>";
			    }
				 /*echo "<option>". $arr[$i]. "</option>";*/
			 }
			 ?></select>
             </th>
             
         <th>班级：</th>
         <th><select name="bj" action="bj.php"/>
         <?php 
			 $i=0;
			 $rs = mysql_query("select bjname from db_bj");
			 $bj=mysql_query("select bj from user where sno='".$asno[0]."'");
			 $abj=mysql_fetch_array($bj);
             while($arr = mysql_fetch_array($rs))
			 {
				 if($abj[0]==$arr[$i])
				 {
					 echo "<option selected='selected'>".$arr[$i]."</option>";
				}
				else{
				 echo "<option>".$arr[$i]."</option>";
				}
			 }
			 ?>
         </select></th>
       </tr>
       
       <tr>  
         <th>身份证号：</th>
         <th>
          <?php
		     $ID_number=mysql_query("select ID_number from user where sno='".$asno[0]."'");
			 $aidnumber = mysql_fetch_array($ID_number);
			 echo "<input type='text' name='idnumber' value='".$aidnumber[0]."'/>";
			 ?>
          </th>
       </tr>
       
       <tr>
        <td colspan="2"bordercolor="#FFFFFF"  bgcolor="#00FF66">
        <label for="file"></label>
         <input type="file" name="file" id="file" /> 
         </td>
         <td colspan="2"bordercolor="#FFFFFF"  bgcolor="#00FF66">
        <input type="submit" id="button" value="提交" />
        </td>
         <td colspan="2"bordercolor="#FFFFFF"  bgcolor="#00FF66">
        <input name="button1" type="reset" value="重置" />
         </td>
       </tr>
       <tr>
         <th height="39" colspan="6"bordercolor="#FFFFFF" > 如有错误，请尽快修正！</th>
       </tr>
       </table>
   </form>
</span>
</body>
</html>

