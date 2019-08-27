<?php
	
	$max=20;
	$jumlah=0;
	//for
	for ($i=0; $i < $max; $i++) { 
		if ($i%2==1) {
			echo $i," ";
			$jumlah+=$i;
		}
	}
	echo "<br/>";
	echo "Hasil penjumlahan bilangan ganjil adalah " .$jumlah;

echo "<br/>";
	 //while
	$i=0;
	 while ($i <= $max) {
	 	if ($i%2==1) {
	 		echo $i," ";
	 	}
	 	$i++;
	 }

echo "<br/>";
	 //do-while
	 $i=0;
	 do {
	 	if ($i%2!=0) {
	 		echo $i, " ";
	 	}
	 	$i++;
	 } while ($i <= $max); 