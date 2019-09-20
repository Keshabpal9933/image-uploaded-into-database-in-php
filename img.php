<?php
 
 $host="localhost";
 $user="root";
 $pass="";
 $db="upload";

  $conn=mysqli_connect($host,$user,$pass,$db) or die();

  if (isset($_POST["submit"])) {
  	$name=$_POST['name'];
  	$pname=rand(0,1000)."-".$_FILES['image']['name'];
  	$tname=$_FILES['image']['tmp_name'];
    //$date=$_POST['date'];
  //$upload_dr= '/images';
  	//move_uploaded_file($tname,$upload_dr.'/'.$pname);
  	move_uploaded_file($tname, "images/" .$pname);
    
  	
  	$sql="INSERT INTO student(name,image) VALUES ('$name','$pname')";

  	$result=mysqli_query($conn,$sql);
  	if ($result) {
  		  		header('location:welcome.php');

  	}
  }
?>