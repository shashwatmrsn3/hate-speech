<?php
	
	
	
	function checkIfLiked($pid){
		include 'C:\xampp\htdocs\social\includes\config\db.php';
		$uid = $_SESSION['id'];
		$sql = "select * from social.likes where pid = '$pid' and uid = '$uid' limit 1";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)>0) return "You like this post";
		return "Press the button to like";
	}
	

?>