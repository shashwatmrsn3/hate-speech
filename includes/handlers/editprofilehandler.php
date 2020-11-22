<?php
	
	include 'C:\xampp\htdocs\social\includes\config\db.php';

	if(isset($_POST['submit'])){
		$bio = $_POST['bio'];
		$education = $_POST['education'];
		$address = $_POST['address'];
		$job = $_POST['job'];
		session_start();
		$id = $_SESSION['id'];
		$sql = "insert into social.profile(bio,address,education,job,uid) values('$bio','$address','$education','$job','$id')";
		mysqli_query($conn,$sql);

	}
?>