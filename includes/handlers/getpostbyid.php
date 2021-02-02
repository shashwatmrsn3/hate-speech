<?php
	include 'C:\xampp\htdocs\social\includes\config\db.php';
	$pid = $_GET["pid"];
	$sql = "select * from social.post p inner join social.user u on p.uid = u.id where p.post_id = '$pid'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
?>