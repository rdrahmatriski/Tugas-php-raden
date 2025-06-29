<?php

$a = "HAII";
$helo = "haii riski";

// menampilkan isi variabel $a
// haii
echo $a . "</br>";

// menampilkan isi variabel $a
// haii riski
echo $hello . "</br>";

// menampilkan isi dari variabel dengan nama yang sama seperti isi variabel $a
// isi variabel $a = haii. jadi, nanti akan menampilkan isi dari variabel $haii
// haii riski
echo $$a . "</br>";

?>