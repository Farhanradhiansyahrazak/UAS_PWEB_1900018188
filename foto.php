<?php include("includes/configuration.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Photo Information</title>
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">

	</head>
<body style="background-color: #43aa8b; ">

	<?php include("includes/navbar.php"); ?>
	

	<div class="container body" style="background-color: #f77f00;  color: white;">
		<?php
		$id = $_GET['id'];
		$query = $koneksi->query("SELECT * FROM galeri WHERE id='$id'") or die($koneksi->error);
		if($query->num_rows){
			$row = $query->fetch_assoc();
			echo '
			<h1>Photo Information</h1>
			<div class="row">
				<div class="col-md-8">
					<img src="gallery/'.$row['nama'].'" class="img-responsive">
				</div>
				<div class="col-md-4">
					<table class="table">
						<tr>
							<th width="120">File Name</th>
							<td>'.$row['nama'].'</td>
						</tr>
						<tr>
							<th>File Size</th>
							<td>';
							$size = filesize("gallery/".$row['nama']);
							$size = $size / 1024 / 1024;
							echo number_format($size, 2).' MB';
							echo '</td>
						</tr>
						<tr>
							<th>Photo Extension</th>
							<td>'; echo pathinfo($row['nama'], PATHINFO_EXTENSION); echo '</td>
						</tr>
						<tr>
							<th>File Dimensions</th>
							<td>'; 
							list($width, $height) = getimagesize("gallery/".$row['nama']); 
							echo $width . "x" . $height;
							echo '</td>
						</tr>
						<tr>
							<td colspan="2"><a href="gallery/'.$row['nama'].'" class="btn btn-primary btn-block">Download</a></td>
						</tr>
						<tr>
							<td colspan="2"><a href="delete_photo.php?id='.$id.'" class="btn btn-primary btn-block" >Delete</a></td>
						</tr>
					</table>
				</div>
			</div>
			';
		}else{
			echo '404 Not Found!';
		}
		?>
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>