<?php
echo "<h1>Tampilkan Pesan</h1>";
echo $_POST["nama"]," memesan :";
echo "<br>makanan :";

$madhang = $_POST['makan'];
if (empty($madhang)) {
	echo "tidak pesan makanan";
}
else {
	$piro1 = count($madhang);
	echo "<ol>";
	for ($i=0; $i < $piro1 ; $i++) { 
		echo "<li>",$madhang[$i];
	}
	echo "</ol>";
}
echo "<br>minuman :";
$ngunjuk = $_POST['minum'];
if (empty($ngunjuk)) {
	echo "tidak pesan minum";
}
else {
	$piro2 = count($ngunjuk);
	echo "<ol>";
	for ($i=0; $i < $piro2 ; $i++) { 
		echo "<li>",$ngunjuk[$i];
	}
	echo "</ol>";
}

echo "<a href='halamanInput.php'>Kembali</a>";























  ?>