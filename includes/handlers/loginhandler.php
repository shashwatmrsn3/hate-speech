<?php
	
	include 'C:\xampp\htdocs\social\includes\config\db.php';
	$email='';$password='';$error='';
	
	if(isset($_POST['submit'])){

		$email = $_POST['email'];
		$password = $_POST['password'];
	

		$sql = "select * from social.user where email = '$email' and password = '$password'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)==0){
			$error = "Invalid credentials";
		}else{
			session_start();
			$_SESSION['email']  = $email;
			
			$row = mysqli_fetch_assoc($result);
			$id = $row['id'];
			$_SESSION['id'] = $id;
 			header('Location:dashboard.php');
		}
	}

?>