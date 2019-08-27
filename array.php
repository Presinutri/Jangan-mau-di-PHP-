<?php
	$a=array(0,'satu',2,'tiga',4);
	//echo $a;
	print_r($a);	

	echo "<br/>";
	$b = array('key' => 0, 'angka' => 'ganjil', 1 => 'satu', 4 => 16843);
	print_r($b);

	echo "<br/>";
	$b[5]='value';
	print_r($b);

	echo "<br/>";
	unset($b['angka']);
	print_r($b);

	echo "<br/>";
	echo $b[2];

	echo "<br/>";
	$b[] = $a; //menjadi multidimensional array
	print_r($b);

	echo "<br/>";
	foreach ($b as $key => $value) {
		echo "$key - $value <br/>";
	}

	echo "<br/>";
	foreach ($b as $key => $value) {
		echo "$value <br/>";
	}
