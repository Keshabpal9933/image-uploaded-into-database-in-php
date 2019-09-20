<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Herp-Technology</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="icon" href="logo.png">
	<style>
        img.fullscreen {
            max-height: 100%;
            max-width: 100%;
        }
    </style>
</head>
<body>
	<div class="container">
		<h2 class="text-center text-white bg-dark">Register Name With Profile</h2>
		<hr>
		<div class="table-responsive">
		<table class="table table-striped table-hover" border="1px">
			<thead>
				<th>ID</th>
					<th>Name</th>
					<th>Profile</th>
					<th>Date</th>
			</thead>
			<?php
				 
				 $host="localhost";
				 $user="root";
				 $pass="";
				 $db="upload";

				  $conn=mysqli_connect($host,$user,$pass,$db) or die();

                  $sql="SELECT *FROM student ORDER BY name ASC";
                  $result=mysqli_query($conn,$sql);

                if ($result) {
			     while ($row= mysqli_fetch_array($result)) {
			     	$id=$row['id'];
			     	$name=$row['name'];
			     	$pname=$row['image'];
								     	//$date=$row['date'];
					date_default_timezone_set('Asia/Kathmandu');
					$now=date('15S '.'\of F Y  h:i:s: A');

                   ?>
			
			<tbody>
				<tr>
					<th><?php echo $id; ?></th>
					<th><?php echo $name; ?></th>
					<?php
					$img = 'images/'.$pname; 
					 ?>
					<th><img class="img img-fluid img-thumbnail" src="<?php echo $img ;?>" height="100px" width="100px"></th>
					<th><?php echo $now; ?></th>

                       
				</tr>
                

			</tbody>
			<?php

			     }
			}

		 ?>
		</table>
		</div>
	</div>
	
</body>
</html>