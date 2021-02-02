<?php
	include 'C:\xampp\htdocs\social\includes\config\db.php';
	$sql = "select * from social.comment c inner join social.user u on c.uid = u.id where c.pid = '$pid'";
	$comment = mysqli_query($conn,$sql);

?>