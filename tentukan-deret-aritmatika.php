<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
	$count=count($arr);
	$cekBeda = $arr[0];
	$hasil = 'true';
	for ($i=0; $i < $count ; $i++) {
		if (isset($arr[$i+1])) {
			$b = ($arr[$i+1]-$arr[$i]);
		if ($b != $cekBeda) {
			$hasil = 'false';

		}

		$cekBeda = $b;

		}
		
		
	}
	return $hasil;
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo("<br>");
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo("<br>");
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo("<br>");
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo("<br>");
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>