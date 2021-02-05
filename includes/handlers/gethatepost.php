<?php
	include 'C:\xampp\htdocs\social\includes\config\db.php';
	
		$sql = "select * from social.post where hate=1";
		$res = mysqli_query($conn, $sql);
		
?>