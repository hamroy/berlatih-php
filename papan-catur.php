<?php

function papan_catur($angka) {
// tulis kode di sini
	$angka2=$angka;
	$spasi=" ";
	for ($i=0; $i < $angka; $i++) { 
		
		if ($i%2==1) {
			// $as=1;
			$angka2 = $angka2-1;
			$spasi="&nbsp";
			echo "&nbsp";
		}else{
			$angka2 = $angka2+1;
			$spasi="&nbsp";
		}

		for ($j=0; $j < $angka2; $j++) { 
			
			echo $spasi."#";
		}
		
		
		echo "<br>";
	}

	echo "<br>";
}

// TEST CASES
echo papan_catur(4) ;
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5) ;
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/