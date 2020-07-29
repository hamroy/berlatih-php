<?php
function pasangan_terbesar($angka){
// kode di sini
$number = $angka;
$array  = array_map('intval', str_split($number));
$tampung=[];
for ($i=0; $i < count($array) ; $i++) { 
	if (isset($array[$i+1])) {
		$angka2=$array[$i].$array[$i+1];
		array_push($tampung, (int)$angka2);		
	}

}


$hasilMax=0;
for ($i=0; $i < count($tampung); $i++) { 
		if ($hasilMax > $tampung[$i]) {
			$hasilMax=$hasilMax;
		}else{
			$hasilMax=$tampung[$i];
		}

	
}

return $hasilMax;
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo "<br/>";
echo pasangan_terbesar(12783456); // 83
echo "<br/>";
echo pasangan_terbesar(910233); // 91
echo "<br/>";
echo pasangan_terbesar(71856421); // 85
echo "<br/>";
echo pasangan_terbesar(79918293); // 99

?>