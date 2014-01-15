<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>判断题</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="author" content="Eric" />
	<meta name="copyright" content="www.houheaven.com" />
	<meta name="generator" content="Adobe Dreamweaver CS5" />
	<meta name="BuiltDate" content="2012.11.01" />
	<meta name="revised" content="Eric 2012.11.01" />

	<style type="text/css">
		*{margin:0; padding:0;}
		body{background:#eee;}
		#container{background:#9bd1fa; margin:10px 10%;}
		b#rtop,b#rbottom{display:block; background:#eee;}
		b#rtop b,b#rbottom b{display:block; height:1px; background:#9bd1fa;}
		b.r1{margin:0 12px;}
		b.r2{margin:0 8px;}
		b.r3{margin:0 6px;}
		b.r4{margin:0 4px;}
		b.r5{margin:0 3px;}
		b.r6{margin:0 3px;}
		b.r7{margin:0 2px;}
		b.r8{margin:0 1px;}
		b.r9{margin:0 1px;}
		b.r10{margin:0 1px;}
		h1{padding:10px; font-family:"courier new"; text-align:center;}
		p{ font-family:"courier new"; text-align:center;}
		p#declare{font-size:12px; color:#333;}
	</style>
</head>
<link rel="stylesheet" type="text/css" href="../css/exampaper.css" />
<body>
<form action="pd.php" method="post" name="pdform">
<iframe style="display: none" id="rfFrame"  name="rfFrame" src="about:blank"></iframe>
<?php  
include ("../conn/conn.php");   //连接数据库
include ("../conn/session.php");
$km=mysql_fetch_array(mysql_query("select km from exam_sj where sj='".$sj."'"));
$sno=mysql_fetch_array(mysql_query("select sno from user where user='".$user."'"));
$pagesize=5; // 每页显示的行数  
$i=1;
if(isset($_GET['page'])&&$_GET['page']!='')
{
	$page=$_GET['page'];
	$_SESSION['pdpage']=$page+1;
	$pageid=$page+1;
}
else{
	$page=0;
}
$sql="select pd from exam";
// 得到查询结果 
$numRecord=mysql_num_rows(mysql_query($sql)); //获得结果集中的记录数 
$totalpage=ceil($numRecord/$pagesize);//获得总页数
$pdsql=$sql ." LIMIT " .$pagesize*$page."," .$pagesize;
$pd=mysql_query($pdsql);
// 现在显示查询结果
$id=1;  
while($apd=mysql_fetch_array($pd)) {
	// 在这里插入您要显示的结果以及样式
?> 
<div id="container">
	<b id="rtop">
		<b class="r1"></b><b class="r2"></b><b class="r3"></b><b class="r4"></b><b class="r5"></b><b class="r6"></b><b class="r7"></b><b class="r8"></b><b class="r9"></b><b class="r10"></b>
	</b>
<div id="t">
第<?php echo $id; ?>题： <?php echo htmlspecialchars($apd['pd']); 
$id=$id+1;?> 
    <br>
答：
<div id="pdanswer">
  <input type='radio' name='pd' value='对'onclick="check_pd(this)"/>对
  <input type='radio' name='pd' value='错'onclick="check_pd(this)"/>错
</div> 
<button onclick="loadXMLDoc()" onsubmit="return chickinput(form)" >提交</button>
</div> 
	<b id="rbottom">
		<b class="r10"></b><b class="r9"></b><b class="r8"></b><b class="r7"></b><b class="r6"></b><b class="r5"></b><b class="r4"></b><b class="r3"></b><b class="r2"></b><b class="r1"></b>
	</b>
</div> 
<?php }?>
</div>
<div style="clear:both;"></div>
<div id="ym">
<span class="gratborder" style="background-color:#f6f6f6;"><a href='pd.php?page=<?php 
if($page>0) echo $page-1;
?>'>上一题</a></span>
<span class="gratborder" style="background-color:#f6f6f6;"><a href='pd.php?page=<?php if($page<$totalpage-1) echo $page+1;?>'>下一题</a></span>
</div>
<div id="myDiv">
结果为: 
<script>
$( "#pdanswer" ).load("pd.php","check_pd(this)");
</script>
<script language="javascript" type="text/javascript">
 function check_sex(obj) {
           alert(obj.value);
		   return obj.value;  
       }
</script>

<?php /*?><?php
$pdanswer=trim($_POST['pd']);
$score=0;
$pdtm=mysql_fetch_array(mysql_query("select answer from exam where pdid='".$pageid."'"));
echo "结果为：".$pdanswer ;
if($pdanswer==$pdtm)
{
	$score=$score+1;
 mysql_query("UPDATE exam_score SET pd='".$score."' WHERE km='".$km[0]."',sno='".$sno[0]."'");
}
}
?><?php */?>
</div>

<script language="javascript" type="text/javascript">
   function chickinput()              //定义一个判断函数
   {
	  if(pdform.pd.value=="")  
	  //判断pd选择框中的只是否为空
	  { 
          alert("请选择答案!");
		  form.pd.select();         //返回pd选择框
		  return (false);
	  }
	   return (true);                   //提交表单
   }
   function loadXMLDoc()
   {
	   var xmlhttp;
	  if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","pdsave.php",true);
xmlhttp.send();
}
function dx()
{
	var sex=document.getElementsByName("pd");//不能getElementById，ById又只会读数组第一个值
 var pdid;
 for(var i = 0; i < spd.length; i++)
{
     if(pd[i].checked)
     pdid=i;
	 alert (paid);
 }
}
</script>      
</body>
</html>
