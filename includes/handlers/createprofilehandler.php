<?php
	include 'C:\xampp\htdocs\social\includes\config\db.php'; //include database 
?>


<?php
	$errorMessage="";
	$userId="";

	//checl if it is POST
	if (isset($_POST['submit'])) {
		
		//STEP 1: get post form data and save in local variable 
		$bio=$_POST['bio'];
		$education=$_POST['education'];
		$address=$_POST['address'];
		$job=$_POST['job'];
		$picture=" ";
		session_start();
		$userid = $_SESSION['id'];	

		//STEP 2:check if the user profile exists 
		$sqlProfileQuery="SELECT * FROM social.profile WHERE uid='$userid'"; //create query 
		$sqlQueryResult=mysqli_query($conn,$sqlProfileQuery); //execute query
		$sqlQueryRowCount =  mysqli_num_rows($sqlQueryResult);

		if ($sqlQueryResult==true && $sqlQueryRowCount>0)//user profile  exist
		 {
			$errorMessage="Oops! You already have a profile.";
		}
		else//user profile doesnt exist
		{
			//create user profile 
			$sqlInsertQuery="INSERT INTO social.profile (address,bio,education,job,uid, picture)	 	 		VALUES ('$address','$bio','$education','$job',$userid, '$picture')";
			$sqlInsertQueryResult=mysqli_query($conn,$sqlInsertQuery);//execute query
			$sqlLastInsertedId = mysqli_insert_id($conn);//get inserted recordid
			
			if ($sqlLastInsertedId>0) //record is inserted
			{
				//go to dashboard 
				header("Location:dashboard.php");
			}
			else //record not inserted
			{
				$errorMessage="Sorry, unable to create profile.. Try again later.".mysqli_error($conn);
			}

		}
		
	}



?>