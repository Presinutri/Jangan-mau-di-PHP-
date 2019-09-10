<?php
	$ews = file_get_contents("http://10.33.34.31/src.txt");
	echo $ews;
	echo "</br>";
	//preg_match
	//preg_split
	//preg_replace

	if(preg_match("/jalan/", $ews)){
		echo "found";
	}else{
		echo "not found<br>";
	}

	$arr = preg_split("/jalan/", $ews);
	print_r($arr);

	$ews = preg_replace("/jalan/", "JALAN", $ews);
	echo $ews;