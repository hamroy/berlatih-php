<?php
function tentukan_deret_geometri($arr) {
// kode di sini
	$count=count($arr);
	$cekBeda = $arr[1]/$arr[0];
	$hasil = 'true';
	for ($i=0; $i < $count ; $i++) {
		if (isset($arr[$i+1])) {
			$b = ($arr[$i+1]/$arr[$i]);
		if ($b != $cekBeda) {
			$hasil = 'false';

		}

		$cekBeda = $b;

		}
		
		
	}
	return $hasil;
}

// TEST CASES
//TEST CASES
echo '<br>'. tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo '<br>'. tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo '<br>'. tentukan_deret_geometri([2, 4, 6, 8]); // false
echo '<br>'. tentukan_deret_geometri([2, 6, 18, 54]); // true
echo '<br>'. tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false

?>