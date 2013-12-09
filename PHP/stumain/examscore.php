<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php
 include ("../conn/conn.php");   //连接数据库
  $sno=trim($_POST['sno']);
  $sql = "select * from exam_score where sno='".$sno."';";
        $rs = mysql_query ( $sql );
        while ( $arr = mysql_fetch_array ( $rs ) ) {
            echo "<tr align='center'>";
            echo "<td class='tbright'>" . $arr ["km"] . "</td>";
            echo "<td class='tbright'>" . $arr ["tk"] . "</td>";
            echo "<td class='tbright'>" . $arr ["danx"] . "</td>";
            echo "<td class='tbright'>" . $arr ["duox"] . "</td>";
			echo "<td class='tbright'>" . $arr ["px"] . "</td>";
		    echo "<td class='tbright'>" . $arr ["pd"] . "</td>";
			echo "<td class='tbright'>" . $arr ["jd"] . "</td>";
			echo "<td class='tbright'>" . $arr ["score"] . "</td>";
            echo "</tr>";
        }
        mysql_free_result ($rs);
       mysql_close ($conn);
?>
</body>
</html>