<?php
	
	include 'C:\xampp\htdocs\social\includes\config\db.php';

	session_start();
	$email = $_SESSION['email'];

	$sql = "select * from social.user as user  where email = '$email'";
	$res = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($res);
	$name = $row['name'];
	$id = $row['id'];

	$sql2 = "select * from social.profile where uid  = '$id'";
	$res2 = mysqli_query($conn,$sql2);
	$row2 = mysqli_fetch_assoc($res2);
	$bio = $row2['bio'];
	$address = $row2['address'];
	$education = $row2['education'];
	$job = $row2['job'];
	 


?>