<?php
  session_start();
  if($_SESSION['email']==null) header('Location:login.php');
  include 'C:\xampp\htdocs\social\includes\config\db.php';
  include 'C:\xampp\htdocs\social\functions\userImagesTemplates.php';

   

    $userid = $_SESSION['id'];
    $sql = "SELECT 
               user.id                             as UserId 
              ,user.name                           as UserName              
              ,profile.id                          as ProfileId 
              ,profile.bio                         as Bio 
              ,profile.address                     as Address
              ,profile.education                   as Education
              ,profile.job                         as Job
              ,userimages.ImageName                as UserImageName              
              ,userimages.ImageContentLocation     as UserImageContentLocation
            FROM social.user as user 
              INNER JOIN social.profile  as profile ON social.user.id = social.profile.uid 
              INNER JOIN social.userimages as userimages ON social.user.id = social.userimages.userid 
            WHERE userimages.IsProfileImage= 1";
    $result = mysqli_query($conn,$sql);


    // summary <returns the user profile container with image and  basic profile info>
    // parameter  $row = object containing user, user profile and userimages
    function GiveMeUserProfileContainer($row){
      $imageSrc = $row['UserImageContentLocation'];
      $profileId = $row['ProfileId'];
      $imageName= $row['UserImageName'];

      echo "<div class='profile bg-light'>";
        echo"<img class='round-img'src='"; echo $imageSrc; echo"' alt='"; echo $imageName; echo"'/>";
        echo"<div class='infoDiv'>
             <h2>"; echo $row['UserName']; echo "</h2>";
          echo"<p>"; echo $row['Education']; echo"</p>"; 
          echo"<p>"; echo $row['Job']; echo" from "; echo $row['Address']; echo"</p>";             
        echo"<a class='btn btn-primary' href='profile.php?id="; echo $row['ProfileId']; echo"'>View Profile</a>
            </div>";
      echo"</div>";

    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"/>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="css/style.css" />
    <title>Welcome To NepLink</title>

  </head>
  <body>
  <nav class="navbar bg-dark">
    <h1>
      <a href="index.html"><i class="fas fa-code"></i> NepLink</a>
    </h1>
      <ul>
        <li><a href="profiles.php">People</a></li>
        <li><a href="posts.php">Posts</a></li>
        <li>
          |
          <a href="dashboard.php" title="Dashboard">
            <?php GetUserProfileImage()?> 
            <!--<i class="fas fa-user"></i>-->
            <span class="hide-sm">Dashboard</span></a
          >
        </li>
        <li>
          <a href="includes/auth/logout.php" title="Logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="hide-sm">Logout</span></a>
        </li>
      </ul>
  </nav>

    <section class="container">
      <h1 class="large text-primary">Browse people</h1>

      <p class="lead">
        <i class="fab fa-connectdevelop"></i> Browse and connect with people
      </p>

      <div class="profiles">           
        <?php while($row=mysqli_fetch_assoc($result)){ ?>         
        <?php GiveMeUserProfileContainer($row)?> 
        <?php }?>
      </div>      
     
    </section>
  </body>
</html>


