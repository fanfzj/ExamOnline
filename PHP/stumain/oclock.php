<meta http-equiv="Refresh" content="1" >
<?php   

function clock(){	
	$hour=date("H");    
    $mitute=date("i");
    $second=date("s");

	$hour=str_split($hour);
	$mitute=str_split($mitute);
	$second=str_split($second);
    
	foreach($hour as $h){
	echo "<img src='../img/".$h.".png'>";
	}
	
	echo "<img src='../img/fg.png'>";
	
	foreach($mitute as $m){
	echo "<img src='../img/".$m.".png'>";
	}
	
	echo "<img src='../img/fg.png'>";
	
	foreach($second as $s){
	echo "<img src='../img/".$s.".png'>";
	}
}
clock();
?>

