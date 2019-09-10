<?php

function f1($bilangan){
	//cek bilangan ganjil/genap
	if ($bilangan%2!=0) {
		echo "ganjil";
	}else{
		echo "genap";
	}
}

function f2($bilangan){
	if ($bilangan%2==1) {
		echo "ganjil";
	}else{
		echo "genap";
	}
	return 0;
}

function f3($bilangan){
  //mencari bilangan prima
      for($i=1;$i<=$bilangan;$i++){  //smw angka yg akan di cek
              
              $counter = 0; 
              for($j=1;$j<=$i;$j++){ //smw kemungkinan faktor pembagi
                  
                    //jika angka yg akan dicek habis dibagi faktor pembagi, counter nya +1
                    if($i % $j==0){ 
                        
                          $counter++;
                    }
              }
            
           //jumlah warna hijau / faktor habis bagi nya harus 2 
            if($counter==2){
                 
                   print $i." adalah prima <br/>";
            }
     }
} 



f1(6482);
echo "<hr/>";
f2(2757);
echo "<hr/>";
f3(20);  //cari bilang prima dari 1-...