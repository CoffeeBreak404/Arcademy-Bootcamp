<?php
	include 'db.php';

	$ID=$_GET['id'];

		$query=mysqli_query($koneksi,"DELETE FROM produk WHERE ID='$ID'");
	if($query){
		header("Location:index.php");
	}else{
		echo "hapus data gagal";
	}
?>