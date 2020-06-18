<?php
	include 'db.php';
	$ID=$_GET['id'];
	$sql_select=mysqli_query($koneksi,"SELECT*FROM produk WHERE ID='$ID' ");
	$data=mysqli_fetch_array($sql_select);

?>
	<form action="" method="post">
		<input type="hidden" name="ID" value="<?php echo $data['ID']; ?>"><br>
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="Nama" value="<?php echo $data['Nama']; ?>"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="Keterangan" value="<?php echo $data['Keterangan']; ?>"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="Harga" value="<?php echo $data['Harga']; ?>"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="number" name="Jumlah" value="<?php echo $data['Jumlah']; ?>"></td>
			</tr>
		</table>
		<input type="submit" name="submit" >
	</form>

	<?php
	if (isset($_POST["submit"])){
		$ID=$_POST['ID'];
		$Nama=$_POST["Nama"];
		$Keterangan=$_POST["Keterangan"];
		$Harga=$_POST["Harga"];
		$Jumlah=$_POST["Jumlah"];

		$query=mysqli_query($koneksi,"UPDATE produk SET Nama='$Nama',Keterangan='$Keterangan',Harga='$Harga',Jumlah='$Jumlah' WHERE ID='$ID' ") OR DIE(mysqli_error($koneksi));
		if($query){
			header("Location:index.php");
		}else{
			echo "input gagal";
		}
	}
?>