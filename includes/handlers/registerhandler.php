<?php
	
	include 'C:\xampp\htdocs\social\includes\config\db.php';

	$name='';
	$email='';
	$password='';
	$password2='';
	$emailError='';
	$errorMessage='';
	$valid='valid';
	//$passwordError='';
	$userProfileImage='';

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		$userProfileImage =$_POST['userProfileImage'];

		//check if password matches
		if($password != $password2)//password does not match
		{
			$valid='invalid';
			$errorMessage = 'Passwords do not match.';				
		}
		else //password matches
		{
			//check if user email exists in user table
			$getUserQuery ="SELECT * FROM social.user WHERE email = '$email'";//create statement / query
			$getUserQueryResult = mysqli_query($conn,$getUserQuery); //execute the query statement
		
			if(mysqli_num_rows($getUserQueryResult) >0)  //record already exists
			{
				$valid = 'invalid';
				$errorMessage = 'Email already registered.';
			}

		}//end if password matches

		//profile image validation 
		if (!file_exists($_FILES['userProfileImage']['tmp_name'])) //file does not exists 
		{
			$errorMessage="Please upload profile image.";
			exit();
		}
		//end profile image validation 
						
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
				$userId=$userResultRow['id'];
				$createdDate=DATE('Y-M-D H:I:S');
				$isProfileImage=1;

				//upload user profile 
				$target_dir = "images/";// set folder to save uploaded files					        
        		$target_file = $target_dir . basename($_FILES["userProfileImage"]["name"]); // Get file path

        		//create local variable to hold uploaded file data
				$imgName=$_FILES["userProfileImage"]["name"];				
				$imgContentType =strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
				$imgContentLocation=$target_dir . basename($_FILES["userProfileImage"]["name"]);
				$imgContent= $imgContentLocation;

				if (move_uploaded_file($_FILES["userProfileImage"]["tmp_name"], $target_file)) 
				 {
				 	$sql="INSERT INTO social.userimages
				 				(ImageName,ImageContent,ImageContentType,ImageContentLocation,IsProfileImage,CreatedDate,UserId)VALUES('$imgName','$imgContent','$imgContentType','$imgContentLocation','$isProfileImage','$createdDate','$userId')";

				 	$sqlInsertResult =mysqli_query($conn,$sql); //EXECUTE QUERY
 					$insertRow = mysqli_affected_rows($conn); 
 					if ($insertRow <0)  // no upload user image
 					{ 					
 						$errorMessage="Sorry! Unable to upload the image. Please try again later."; 	
 					}
 					else // image uploaded true
 					{
 						//start session and save email and user id under session variable
						session_start();
						$_SESSION['email'] = $email;
						$_SESSION['id']= $userId;
						header('Location:dashboard.php');//redirect to dashboard page
 					} //end image upload true
				 }
				 else
				 {
				 	$errorMessage="Image cannot be uploaded. Please try again later.";				 
				 }

				// end upload user profile 
				
			}
			else// if user record inserted == false
			{
				$errorMessage="Server error please try again";
			}
		}		
		
	}//end if post submit

	
	

?>