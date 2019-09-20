<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Image Upload with database</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="icon" href="logo.png">
</head>
<body background="mustang.png">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="text-center text-success">Image Upload With Database</h2>
				<hr>
				<form action="img.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="name" class="col-3"><strong><h2>Name :</h2></strong></label>
						<div class="col-9">
							<input type="text" name="name" class="form-control form-control-sm">
						</div>
					</div>
					<div class="form-group">
						<label for="Upload" class="col-3"><strong><h2>Upload File :</h2></strong></label>
						<div class="col-9">
							<input type="file" name="image" type="image/*" class="form-control form-control-sm">
						</div>
					</div>
					
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-success">Upload</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>