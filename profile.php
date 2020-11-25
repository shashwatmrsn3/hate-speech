<?php

session_start();
if($_SESSION['email']==null) header('Location:login.php');
    include 'C:\xampp\htdocs\social\includes\handlers\getprofile.php';

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

    <link rel="stylesheet" href="html_css_theme/css/style.css" />
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
          <a href="dashboard.php" title="Dashboard"
            ><i class="fas fa-user"></i>
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
      <a href="profiles.php" class="btn btn-light">Back To Profiles</a>

      <div class="profile-grid my-1">
         <!-- Top -->
        <div class="profile-top bg-primary p-2">
          <img
            class="round-img my-1"
            src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200"
            alt=""
          />
          <h1 class="large"><?php echo $name?></h1>
          <p class="lead"><?php echo $job?></p>
          <p><?php echo $address?></p>
          <div class="icons my-1">
            <a href="#" target="_blank" rel="noopener noreferrer">
              <i class="fas fa-globe fa-2x"></i>
            </a>
            <a href="#" target="_blank" rel="noopener noreferrer">
              <i class="fab fa-twitter fa-2x"></i>
            </a>
            <a href="#" target="_blank" rel="noopener noreferrer">
              <i class="fab fa-facebook fa-2x"></i>
            </a>
            <a href="#" target="_blank" rel="noopener noreferrer">
              <i class="fab fa-linkedin fa-2x"></i>
            </a>
             <a href="#" target="_blank" rel="noopener noreferrer">
              <i class="fab fa-youtube fa-2x"></i>
            </a>
            <a href="#" target="_blank" rel="noopener noreferrer">
              <i class="fab fa-instagram fa-2x"></i>
            </a>
          </div>
        </div>

        <!-- About -->
        <div class="profile-about bg-light p-2">
          <h2 class="text-primary"> Bio</h2>
          <p>
          <?php echo $bio?>
          </p>
          <div class="line"></div>
         
        <!-- Github -->
        
         
        </div>
      </div>
    </section>
  </body>
</html>
