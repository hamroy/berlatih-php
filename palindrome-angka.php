<?php
function reverseString($string='')
{
	$nama = strval( $string );
    $i=strlen($nama)-1;
    $hasil ='';
    while ($i >= 0) {
        $hasil .= $nama[$i];
        $i--;
    }

    // echo $nama;

    if ($hasil == $nama) {
            return true;
        }else{
            return false;
        }
    // return 9999;
}

function cari_palindrome($angka='')
{
	$i = $angka;
    while ($i >= 8) {
        $cek = reverseString($i);
        if ($cek == true) {
        	return $i;
        	break;
        }
        $i++;
    }
    
}

function palindrome_angka($angka) {
  // tulis kode di sini
	$cek = reverseString($angka);
	if ($cek == true) {
			$angka = cari_palindrome($angka+1);
	    }else{
	        $angka = cari_palindrome($angka);
	    }

	    return $angka;

}

// TEST CASES
echo palindrome_angka(8); // 9
echo "<br>";
echo palindrome_angka(10); // 11
echo "<br>";
echo palindrome_angka(117); // 121
echo "<br>";
echo palindrome_angka(175); // 181
echo "<br>";
echo palindrome_angka(1000); // 1001

?>