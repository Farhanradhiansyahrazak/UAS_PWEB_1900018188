<?php include ("includes/configuration.php");

$id = $_GET['id'];

$query = "DELETE FROM galeri WHERE id = $id";

$hasil = mysqli_query($koneksi,$query);

if($hasil) {
header('location:index.php');	
}
else{
	echo 'Failed to uploaded';
}

?>