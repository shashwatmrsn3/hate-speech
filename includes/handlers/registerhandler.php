<?php
	
	include 'C:\xampp\htdocs\social\includes\config\db.php';

	$name='';$email='';$password='';$password2='';$emailError='';$error='';$valid='valid';$passwordError='';

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];

		//check if password matches
		if($password != $password2)//password does not match
		{
			$valid='invalid';
			$passwordError = 'Passwords do not match';
		}
		else //password matches
		{
			//check if user email exists in user table
			$getUserQuery ="SELECT * FROM social.user WHERE email = '$email'";//create statement / query
			$getUserQueryResult = mysqli_query($conn,$getUserQuery); //execute the query statement
		
			if(mysqli_num_rows($getUserQueryResult) >0)  //record already exists
			{
				$valid = 'invalid';
				$emailError = 'Email already registered';
			}

		}//end if password matches

						
		// IF everything is valid --> proceed
		if($valid == 'valid') 
		{
			$insertUserSqlQuery = "INSERT INTO social.user (name,email,password) 
									VALUES ('$name','$email','$password')"; //create insert query statement

			$insertUserSqlQueryResult = mysqli_query($conn,$insertUserSqlQuery);//execute insert query

			if($insertUserSqlQueryResult==true) // if user record inserted == true
			{			

				$getUserQuery ="SELECT * FROM social.user WHERE email = '$email'";//create query
				$getUserQueryResult= mysqli_query($conn,$getUserQuery);//execute query
				$userResultRow = mysqli_fetch_assoc($getUserQueryResult);//get the assocated user record

				//start session and save email and user id under session variable
				session_start();
				$_SESSION['email'] = $email;
				$_SESSION['id']= $userResultRow['id'];
				header('Location:dashboard.php');//redirect to dashboard page
			}
			else// if user record inserted == false
			{
				$error="Server error please try again";
			}
		}		
		
	}//end if post submit
	
	

?>