<?php	
	include 'C:\xampp\htdocs\social\includes\config\db.php';
?>


<?php 
	$errorMessage="";
	$userid ="";
	$bio="";
	$address="";
	$education="";
	$job="";
	$picture="";

if(isset($_POST['submit']))
{
	
	$bio=$_POST['bio'];
	$address=$_POST['address'];
	$education=$_POST['education'];
	$job=$_POST['job'];
	$picture=" "; //TODO this needs implementation

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
		
		if($sqlUpdateResult==false && $sqlUpdateRowEffected<0)
		{
			$errorMessage = "Cannot update user profile.". mysqli_error($conn);
		}
		else
		{
			header('Location:dashboard.php');
		}
	}	
	
}//end if post submit
else
{	
	//STEP 1: get the userId from session 
	session_start();
	$userid = $_SESSION['id'];			

	//STEP 2: get the user profile data from db 
	$sqlSelectQuery ="SELECT * FROM social.profile where uid ='$userid'";//crerate query
	$sqlSelectQueryResult = mysqli_query($conn,$sqlSelectQuery);//execute query
	$sqlSelectQueryResultRow =mysqli_num_rows($sqlSelectQueryResult); // get no of rows


	if ($sqlSelectQueryResultRow >0) // user profile exists
	{
		//get the user profile data and bind it to the local variable
		$sqlSelectRow =mysqli_fetch_assoc($sqlSelectQueryResult);

		$bio=$sqlSelectRow['bio'];
		$address=$sqlSelectRow['address'];
		$education=$sqlSelectRow['education'];
		$job=$sqlSelectRow['job'];
		$picture=$sqlSelectRow['picture'];
	}//end if
	else// user profile does not exist //// this case should never happen
	{		
		$errorMessage ="Sorry user profile does not exist. Please create user profile." . mysqli_error($conn);
	}//end else

}//end else get 

