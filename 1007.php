<?php

$kiiras = <<<'SZOVEG'
adjfjdskbengknksl,
fsjflksjflkfdskfs
SZOVEG;

$file = fopen("vers.txt","w");
fwrite($file,$kiiras);
fclose($file);

$olvas = fopen("vers.txt","r") or die("Nem tudom beolvasni");

while(!feof($olvas)){
    $sor = fgets($olvas);
    echo $sor;
}

echo "" . PHP_EOL;

include "osszeg.php";

echo Osszeg(11,6);
echo PHP_EOL;
echo kulonbseg(20,6);


?>