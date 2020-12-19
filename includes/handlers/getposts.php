<?php
	include 'C:\xampp\htdocs\social\includes\config\db.php';
	$sql = 'select * from social.post p INNER JOIN social.user u ON p.uid = u.id';
	$res = mysqli_query($conn,$sql);


?>