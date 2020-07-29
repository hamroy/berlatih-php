<?php
function ubah_huruf($string){
//kode di sini
$abjad = "abcdefghijklmnopqrstuvwxyz";
$output='';
for ($i=0; $i < strlen($string) ; $i++) { 
	# code...
	$posisi=strrpos($abjad, $string[$i]) ;//posisi index
	$output .=substr($abjad, $posisi+1, 1);
}

return $output;
}

// TEST CASES
echo "<br>". ubah_huruf('wow'); // xpx
echo "<br>". ubah_huruf('developer'); // efwfmpqfs
echo "<br>". ubah_huruf('laravel'); // mbsbwfm
echo "<br>". ubah_huruf('keren'); // lfsfo
echo "<br>". ubah_huruf('semangat'); // tfnbohbu

?>