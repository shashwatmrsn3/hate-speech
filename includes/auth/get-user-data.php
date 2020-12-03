<?php
	
	include 'C:\xampp\htdocs\social\includes\config\db.php';

	session_start();
	$email = $_SESSION['email'];

	$sql = "select * from social.user as user  where email = '$email'";
	$res = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($res);
	$name = $row['name'];
	$id = $row['id'];

	$sqlQueryProfile = "select * from social.profile where uid  = '$id'";
	$sqlResultProfile = mysqli_query($conn,$sqlQueryProfile);
	$profile = mysqli_fetch_assoc($sqlResultProfile);

	if ($profile!=null) {
		$bio = $profile['bio'];
		$address = $profile['address'];
		$education = $profile['education'];
		$job = $profile['job'];
	}
	else
	{
		$bio = '';
		$address = '';
		$education = '';
		$job ='';
	}
	 


?>