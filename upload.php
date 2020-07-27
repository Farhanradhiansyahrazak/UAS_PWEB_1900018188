<?php include("includes/configuration.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Uploaded Photos</title>
	
	<link href="css/bootstrap.css"s rel="stylesheet">
	<link href="css/jasny-bootstrap.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet"> 

	
	</head>
<body style="background-color: black;">

	<?php include("includes/navbar.php"); ?>
	
	<div class="container body" style="background-image: url(bgupload.jpg); background-attachment: all; color: white; text-align: center;">
		<h1 style="color: white;">Upload a Photo</h1>
		<form method="post" action="upload-proses.php" enctype="multipart/form-data">
			<div class="fileinput fileinput-new" data-provides="fileinput">
			  <div class="fileinput-new thumbnail" style="width: 300px; height: 300px;">
				<img data-src="holder.js/100%x100%" >
			  </div>
			  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 300px; max-height: 300px;"></div>
			  <div>
				<span class="btn btn-default btn-file"><span class="fileinput-new" >Select a Photo</span><span class="fileinput-exists">Change</span><input type="file" name="foto" required></span>
				<input type="submit" class="btn btn-primary" name="submit" value="Upload">
			  </div>
			</div>
		</form>
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jasny-bootstrap.js"></script>
	
</body>
</html>