<?php
    include 'C:\xampp\htdocs\social\includes\config\db.php';
    
    //getting id from url
    $id = $_GET['id'];

    //initializing variables
    // $bio = "";
    // $address="";
    // $job="";
    // $education="";
    // $name="";

    //sql query
    $sql = "SELECT 
                user.name
                ,profile.education
                ,profile.bio
                ,profile.address
                ,profile.job
                ,userimages.ImageName                AS UserImageName              
                ,userimages.ImageContentLocation     AS UserImageContentLocation
            FROM social.profile AS profile
            INNER JOIN social.user AS user
                ON user.id = profile.uid 
            INNER JOIN social.userimages AS userimages ON user.id = userimages.UserId    
            WHERE 
                social.profile.id= '$id'
                AND userimages.IsProfileImage= 1";
    $result  = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    
    //assigning variables to result
    $bio = $row['bio'];
    $address = $row['address'];
    $job = $row['job'];
    $education = $row['education'];
    $name = $row['name'];
    $imageName =$row['UserImageName'];
    $imageLocation =$row['UserImageContentLocation'];

?>