<?php

$GLOBALS['varglobal'] = 18; //variabel global

function testvar()
{
    $varlokal = 1; variabel lokal
    echo "<p> test variabel didalam function.<p>";
    // mengakses variabel global didalam function
    echo "variabel global : ".$globals['varglobal'];
    echo "</br>";
    echo "variabel lokal : $varlokal ";
    echo  "<br>";
}

testvar();

    echo "<p> test variabel didalam function.<p>";
    echo "variabel global : $varglobal ";
    echo "<br>";
    // mengakses variabel lokal didalam function
    echo "variabel lokal : $varlokal ";
    echo "<br>";

    ?>