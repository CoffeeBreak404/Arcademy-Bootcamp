<?php
	include "db.php";
?>

<html>
<head>
	<meta charset='utf-8'>	
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<tittle></tittle>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./styles/main.css'>
</head>
<body>
	<br>
	<div class="content">
	<table border="1">
		<tr>
			<td>Nama</td>
			<td>Keterangan</td>
			<td>Harga</td>
			<td>Jumlah</td>
			<td colspan="2" align="center">Delete/Edit</td>
		</tr>
		<?php
			$query=mysqli_query($koneksi,"SELECT*FROM produk");
			while ($data=mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $data['Nama']; ?></td>
			<td><?php echo $data['Keterangan']; ?></td>
			<td><?php echo $data['Harga']; ?></td>
			<td><?php echo $data['Jumlah']; ?></td>
			<td><a href="hapus.php?id=<?php echo $data['ID']; ?>">Hapus</a></td>
			<td><a href="ubah.php?id=<?php echo $data['ID']; ?>">Ubah</a></td>
		</tr>
		 
		<?php } ?>
	</table>
	<br>
	<a href="tambah.php">tambah</a>
	</div>
</body>
</html>

