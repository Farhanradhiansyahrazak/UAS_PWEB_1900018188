<?php include("includes/configuration.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>My Web Portofolio</title>
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">

	
	</head>
<body style=" background-color:  #43aa8b;">

	<?php include("includes/navbar.php"); ?>
	
	<div class="container body" style="background-color: #f77f00; #0a0908;  color: white;">
		<h1>Food Blogger</h1>
		<div class="gal">
			<?php
			$query = $koneksi->query("SELECT * FROM galeri ORDER BY id DESC") or die($koneksi->error);
			if($query->num_rows){
				while($row = $query->fetch_assoc()){
					echo '<a href="foto.php?id='.$row['id'].'"><img src="gallery/'.$row['nama'].'" alt=""></a>';					

				}
			}
			?>
		</div>
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<div>
		<footer style=" width: 1170px; height: 18px; margin-left: 11.5%;  	text-align: center;   background-color: #0a0908;color: white; ">Copyright Farhan Radhiansyah Razak - 1900018188 </footer>
	</div>
</body>
</html>