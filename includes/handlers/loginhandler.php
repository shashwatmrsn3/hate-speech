<?php
	
	include 'C:\xampp\htdocs\social\includes\config\db.php';
	$email='';$password='';$error='';
	
	if(isset($_POST['submit'])){

		$email = $_POST['email'];
		$password = $_POST['password'];
	

		$sql = "select * from social.user where email = '$email' and password = '$password'";
		$result = mysqli_query($conn,$sql);		
		$resultRow = mysqli_fetch_assoc($result);

		if(mysqli_num_rows($result)==0)
		{
			$error = "Invalid credentials";
		}
		else
		{		
			session_start();
			$_SESSION['email']  = $email;
			$_SESSION['id'] = $resultRow['id'];
			if($resultRow['role'] == "MODERATOR"){
				header('Location:adminpanel.php');
			}		
			else{
				 header('Location:dashboard.php');
			}
		}
	}

?>