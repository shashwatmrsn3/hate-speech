<?php
	
	$uid = $_SESSION['id'];
	include 'C:\xampp\htdocs\social\includes\config\db.php';
	if(isset($_POST['submit'])){
		echo 'inside post handler';
		$text = $_POST['text'];
		$sql = "insert into social.post(text, uid) values('$text', '$uid')";
		$result = mysqli_query($conn,$sql);				
 		header('Location:posts.php');
		
	}
	
?>