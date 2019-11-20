<<?php
$getal = intval($argv[1]);
if ($getal == 0){
	echo "Geen wisselgeld\n";
	exit;
}
echo $getal . " x 1 euro";
?>