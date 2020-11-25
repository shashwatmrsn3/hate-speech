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
    $sql = "select name,education,bio,address,job from social.profile inner join social.user 
            on social.user.id = social.profile.uid where social.profile.id= '$id'";
    $result  = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    
    //assigning variables to result
    $bio = $row['bio'];
    $address = $row['address'];
    $job = $row['job'];
    $education = $row['education'];
    $name = $row['name'];

?>