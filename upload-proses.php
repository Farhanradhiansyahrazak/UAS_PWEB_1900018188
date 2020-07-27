<?php
include("includes/configuration.php");
$target_dir = "gallery/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["submit"])) {

	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}

	if ($_FILES["foto"]["size"] > 2097152) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}

	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}

	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";

	} else {
		if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
			$nama = basename( $_FILES["foto"]["name"]);
			$tgl = date("Y-m-d");
			$query = $koneksi->query("INSERT INTO galeri(tgl_upload, nama) VALUES('$tgl','$nama')") or die($koneksi->error);
			if($query){
				$i = $koneksi->insert_id;
				header("Location: foto.php?id=".$i);
			}else{
				echo '<script>alert("Gagal sob!"); document.location="upload.php?menu=upload";</script>';
			}
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
}
?>