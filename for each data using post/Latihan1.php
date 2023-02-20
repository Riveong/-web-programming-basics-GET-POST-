<?php

$suhu = [23,45,36,27,33,32,30,28,35,32];
$num = 1;


echo "<table style='border:1px solid black'>";

foreach ($suhu as $s) {
	echo "<tr style='border:1px solid black'>";
	echo "<td style='border:1px solid black'>hari ke-$num<td style='border:1px solid black'>$s";
	$num = $num+1;
	echo "</tr>";
}
echo "<table>";

?>