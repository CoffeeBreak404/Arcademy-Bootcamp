<?php
	include 'db.php';
?>
<form action="" method="post">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="Nama"></td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td><input type="text" name="Keterangan"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="number" name="Harga"></td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td><input type="number" name="Jumlah"></td>
		</tr>
	</table>
	<input type="submit" name="submit"><br>
</form>

<?php
	if (isset($_POST["submit"])){
		$Nama=$_POST["Nama"];
		$Keterangan=$_POST["Keterangan"];
		$Harga=$_POST["Harga"];
		$Jumlah=$_POST["Jumlah"];

		$query=mysqli_query($koneksi,"INSERT INTO produk(Nama, Keterangan, Harga, Jumlah) VALUES('$Nama','$Keterangan', '$Harga', '$Jumlah')");
		if($query){
			header("Location:index.php");
		}else{
			echo "input gagal";
		}
	}
?>