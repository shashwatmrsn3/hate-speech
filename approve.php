<?php
	include 'C:\xampp\htdocs\social\includes\config\db.php';
	$postId = $_GET['id'];

	$sql = "update social.post set hate=0 where post_id='$postId'";
	mysqli_query($conn,$sql);
	header("Location:adminpanel.php");
	
	
?>