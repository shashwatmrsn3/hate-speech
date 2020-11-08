<?php
	
	include 'C:\xampp\htdocs\social\includes\config\db.php';

	$name='';$email='';$password='';$password2='';$emailError='';$error='';$valid='valid';$passwordError='';

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		
		$checkEmail ="select * from social.user where email = '$email'";
		$emailRes = mysqli_query($conn,$checkEmail);
		
		if(mysqli_num_rows($emailRes) >0) {
			$valid = 'invalid';
			$emailError = 'Email already registered';
		}
		
		if($password != $password2){
			$valid='invalid';
			$passwordError = 'Passwords do not match';
		}

		if($valid == 'valid'){
		$sql = "insert into social.user (name,email,password) values ('$name','$email','$password')";
		if(mysqli_query($conn,$sql)){
			session_start();
			$_SESSION['email'] = $email;
			header('Location:dashboard.php');
		}
		else{
			$error="Server error please try again";
		}
	}
		
		
	}

	

	

	
	
	

?>