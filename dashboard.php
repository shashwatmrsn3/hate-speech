<?php
    include 'C:\xampp\htdocs\social\includes\auth\get-user-data.php';
    include 'C:\xampp\htdocs\social\functions\userImagesTemplates.php';
   $warning="";
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Raleway"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <style>
      tr:nth-child(odd) {background-color: #f2f2f2;}
    </style>
    <link rel="stylesheet" href="css/style.css" />
    <title>Welcome To The Developer Connector</title>
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
          <!--  <i class="fas fa-user"></i> -->
            <span class="hide-sm">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="includes/auth/logout.php" title="Logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="hide-sm">Logout</span></a>
        </li>
      </ul>
    </nav>
    <section class="container">
      <h1 class="large text-primary">Dashboard</h1>
      <p class="lead"><i class="fas fa-user"></i> Welcome <?php echo $name?></p>
      <div class="userImage">
          <?php GetUserProfileImage('big')?>
      </div>
      <div class="dash-buttons">        
        <?php 
        // this is to generate the link based on user profile
          $linkName=""; $linkUrl="";
          if($profile==0) {
            $linkName ="Create"; 
            $linkUrl="createprofile.php";
            $warning="Other people can't connect with you unless you create a profile";
          }
          else{
            $linkName ="Edit"; 
            $linkUrl="editprofile.php";
          } 
        ?> 
      <span>  <a href="<?php echo $linkUrl ?>" class="btn btn-light"><i class="fas fa-user-circle text-primary"></i> <?php echo $linkName ?> Profile</a>      
      </div>  <p> <?php echo $warning?></p></span>
  
      <h2 class="my-2">Profile</h2>
      <table class="table" >          
          <tbody>
            <tr>
              <td><b>Bio</b></td>
              <td class="hide-sm" style='width:700px'><?php echo $bio?></td>              
              
            </tr>

            <tr>
              <td><b>Address</b></td>
              <td class="hide-sm" style='width:700px'><?php echo $address?></td>              
             
            </tr>

            <tr>
              <td><b>Education</b></td>
              <td class="hide-sm"><?php echo $education?></td>              
              
            </tr>

            <tr>
              <td><b>Job</b></td>
              <td class="hide-sm" style='width:700px'><?php  echo $job?></td>              
              
            </tr>
            <tr></tr>
          </tbody>
      </table>

      <div class="my-2">
        <button class="btn btn-danger"><i class="fas fa-user-minus"></i>Delete My Account</button>
      </div>
    </section>

  </body>
</html>
