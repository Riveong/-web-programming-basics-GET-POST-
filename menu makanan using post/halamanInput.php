<!DOCTYPE html>
<html>
<head>



	<title>Halaman Input 205314111</title>
	<style>




	</style>




</head>
<body>

	<h1>Pesan Makanan dan Minuman</h1>
	<form action="halamanTampil.php" method="post">
	<table>
		<tr>
			<td>Nama pemesan</td>
			<td><input type="text" name="nama"></td>
		</tr>

		<tr>
			<td>makanan:</td>
			<td><input type="checkbox" name="makan[]" value="Nasi goreng">Nasi Goreng</td>
		</tr>

		<tr>
			<td></td>
			<td><input type="checkbox" name="makan[]" value="Mie Goreng">Mie Goreng</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="checkbox" name="makan[]" value="Mie godog">Mie Godog</td>
		</tr>

		<tr>
			<td>minuman:</td>
			<td><input type="checkbox" name="minum[]" value="Es teh manis">Es teh manis</td>
		</tr>

		<tr>
			<td></td>
			<td><input type="checkbox" name="minum[]" value="Es jeruk">Es jeruk</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="checkbox" name="minum[]" value="Teh panas">Teh panas</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="checkbox" name="minum[]" value="Jeruk panas">Jeruk panas</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="" value="simpan"></td>
		</tr>


	</table>
</form>





</body>
</html>