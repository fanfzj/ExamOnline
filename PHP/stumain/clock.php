<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php

$n=chr(13);

echo "<SCRIPT LANGUAGE=\"JavaScript\">".$n;

echo "document.write('<div id=\"TimeShow\" align=\"center\" style=\"MARGIN-right:0px;font-size:9pt;font-family:宋体\">?</div>');".$n;

echo "var y=".date("Y")."; //年 ".$n;

echo "var m=".date("n")."; //月 ".$n;

echo "var d=".date("j")."; //日 ".$n;

echo "var w=".date("w")."; //星 ".$n;

echo "var h=".date("H")."; //时 ".$n;

echo "var i=".date("i")."; //分 ".$n;

echo "var s=".date("s")."; //秒 ".$n;

echo "var hstr=istr=sstr=a='';".$n;

echo "var ww = Array('日','一','二','三','四','五','六');".$n;

echo "function clock()(){".$n;

echo " s++;".$n;

echo " if (s==60) {i+=1;s=0;}//秒进位".$n;

echo " if (i==60) {h+=1;i=0;}//分进位".$n;

echo " if (h==24) {w+=1;d+=1;h=0;}//时进位".$n;

echo " if (w==7) {w=0;}//星期进位".$n;

echo " if (m==2) { //是否是二月份？".$n;

echo " if (!y%4>0) { //不是闰月（二月有28天）".$n;

echo " if (d==30){".$n;

echo " m+=1;".$n;

echo " d=1;}".$n;

echo " }".$n;

echo " else { //是闰月（二月有29天）".$n;

echo " if (d==29){".$n;

echo " m+=1;".$n;

echo " d=1;}".$n;

echo " }".$n;

echo " }".$n;

echo " else { //非2月份的月份".$n;

echo " if (m==4 || m==6 || m==9 || m==11) { //只有30天的月份".$n;

echo " if (d==31) {".$n;

echo " m+=1;".$n;

echo " d=1;}".$n;

echo " }".$n;

echo " else { //有31天的月份".$n;

echo " if (d==32){".$n;

echo " m+=1;".$n;

echo " d=1;}".$n;

echo " }".$n;

echo " }".$n;

echo " if (m==13) {y+=1;m=1;}//月进位".$n;

echo " if (h < 10) {hstr=' 0'+h} else {hstr=' '+h};".$n;

echo " if (i < 10) {istr=':0'+i} else {istr=':'+i};".$n;

echo " if (s < 10) {sstr=':0'+s} else {sstr=':'+s};".$n;

echo " if (h < 13) {astr=' 上午';} else {astr=' 下午';};".$n;
echo " TimeShow.innerHTML=y+'年'+m+'月'+d+'日 '+'<font color=blue>星期'+ww[w]+'</font>'+hstr+istr+sstr+astr;".$n;

echo " setTimeout('clock()()',1000);".$n;

echo "}".$n;
echo "clock()();".$n;
echo "</SCRIPT>".$n;
?>
</body>
</html>