<?php	
	include 'C:\xampp\htdocs\social\includes\config\db.php';
?>


<?php 
$error="";
$userid ="";

if(isset($_POST['submit'])){
	
	$bio=$_POST['bio'];
	$address=$_POST['address'];
	$education=$_POST['education'];
	$job=$_POST['job'];
	$picture=" ";

	session_start();
	$userid = $_SESSION['id'];	


	//	check if the user already has the profile under profile table
	// 	if user has data then UPDATE, 
	//	else Insert the profile data
	$sqlGetUserProfileQuery ="SELECT * FROM social.profile WHERE uid='$userid'"; //query,statement
	$sqlGetUserProfileResult=mysqli_query($conn, $sqlGetUserProfileQuery); //query execute 
	$sqlGetUserProfileRow = mysqli_fetch_assoc($sqlGetUserProfileResult); // query result ko asociated row 

	if ($sqlGetUserProfileRow >0)  // record exists --> UPDATE
	{	
	
		//update the user profile
		$sqlUpdateQuery="UPDATE social.profile 
							SET job='$job',
								education='$education',
								address='$address',
								bio='$bio'
							WHERE uid='$userid' ";

		$sqlUpdateResult =mysqli_query($conn,$sqlUpdateQuery);		
		$sqlUpdateRowEffected =mysqli_affected_rows($conn);
		
		if($sqlUpdateResult==false && $sqlUpdateRowEffected<0){
			$error = "Cannot update user profile.". mysqli_error($conn);
		}else{
			header('Location:dashboard.php');
		}

	}
	else // record does not exist
	{		
		//insert user profile
		$sqlInsertQuery= "INSERT INTO social.profile(picture,job,education,address,bio,uid) 
							VALUES('$picture','$job','$education','$address','$bio','$userid')";
		$sqlInsertResult = mysqli_query($conn,$sqlInsertQuery);		
		$sqlUpdateRowEffected =mysqli_affected_rows($conn);
 	 	
		if(!$sqlInsertResult && $sqlUpdateRowEffected < 0)
		{
			$error = "Cannot insert user profile.".$userid. mysqli_error($conn);
		}
		else
		{			
			header('Location:dashboard.php');
		}

	}


	
}//end if

?>