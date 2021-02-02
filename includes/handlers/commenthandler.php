<?php
	include 'C:\xampp\htdocs\social\includes\config\db.php';
	if(isset($_POST["submit"])){
		$text = $_POST["text"];
		$uid = $_SESSION["id"];
		$sql = "insert into social.comment(text, uid, pid) values('$text', '$uid', '$pid')";
		$comment = mysqli_query($conn, $sql);
		header("Location:post.php/?pid=".$pid);
	
	}
?>