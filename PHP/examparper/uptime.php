<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php
session_start();
switch ($_POST['submit']) {
	case 'start':
		unset($_SESSION['start']);
		unset($_SESSION['stop']);
		$_SESSION['start'] = microtime(true);
		echo 'start: ' . $_SESSION['start'];
		break;
	case 'stop':
		$_SESSION['stop'] = microtime(true);
		echo 'start: ' . $_SESSION['start'] . '<br />';
		echo 'stop: ' . $_SESSION['stop'] . '<br />';
		break;
	default:
		break;
}
if($_SESSION['start'] && $_SESSION['stop']){
	$rs = $_SESSION['stop'] - $_SESSION['start'];
	echo 'total: ' . $rs;
}
?>
<body>
</body>
</html>