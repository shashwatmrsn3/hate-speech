<?php
	include 'C:\xampp\htdocs\social\includes\config\db.php';
	 

//returns user profile image based on userId
function GetUserProfileImage($size='small')
{  
  global $conn;
  $userId =$_SESSION['id'];
  $isProfileImage = 1;
    //get user image 
    
    $sql ="SELECT * FROM social.userimages WHERE UserId ='$userId' AND IsProfileImage ='$isProfileImage'";
    $sqlResult=mysqli_query($conn,$sql); 
    $userImageResult =MYSQLI_FETCH_ASSOC($sqlResult);
    if ($userImageResult) 
    {
      $imglocation = $userImageResult['ImageContentLocation'];
      $imgName = $userImageResult['ImageName'];
     
     if($size=='small')
     {
 		echo('<img style="height: 20px; border-radius: 25px; width: 20px;" src ="'); 
 		echo $imglocation; 
 		echo('" alt="'); 
 		echo $imgName;  
 		echo('"/>'); 		
     }
     else
     {
      	echo('<img style="height: 150px; width: 150px; box-shadow: 5px 10px #61a6323d; margin-bottom: 40px; " src ="');
      	echo $imglocation; 
      	echo('" alt="');
  	 	echo $imgName; 
  	 	echo('"/>');  	 	
    }
}
}



?>