<?php

function cari_mean($arr){
//kode di sini
	$jum=0;
	$sum=count($arr);
	for ($i=0; $i < count($arr) ; $i++) { 
		$jum+=$arr[$i];
	}

	return Round($jum/$sum);
}

// TEST CASE 
echo cari_mean([1, 2, 3, 4, 5]); // 3
echo "<br>";
echo cari_mean([3, 5, 7, 5, 3]); // 5
echo "<br>";
echo cari_mean([6, 5, 4, 7, 3]); // 5
echo "<br>";
echo cari_mean([1, 3, 3]); // 2
echo "<br>";
echo cari_mean([7, 7, 7, 7, 7]); // 7


?>