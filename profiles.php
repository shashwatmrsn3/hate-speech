<?php
   session_start();
   if($_SESSION['email']==null) header('Location:login.php');
   include 'C:\xampp\htdocs\social\includes\config\db.php';
   

    $sql = "select * from social.user inner join social.profile on social.user.id = social.profile.uid";
    $res = mysqli_query($conn,$sql);
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
      <h1 class="large text-primary">Browse people</h1>
      <p class="lead">
        <i class="fab fa-connectdevelop"></i> Browse and connect with people
      </p>
      <div class="profiles">
        <div class="profile bg-light">
          
        </div>
 <?php 
 while($row=mysqli_fetch_assoc($res)){
       
        echo "<div class='profile bg-light'>";
        echo  "<img
            class='round-img'
            src='https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200'
            alt=''
          />";
        echo  "<div>";
        echo    "<h2>".$row['name']."</h2>";
        echo    "<p>".$row['job']."</p>";
        echo    "<p>".$row['address']."</p>";
        echo    "<p>".$row['id']."</p>";
        // echo    "<a href=profile.php/?id=".$row['id']." class='btn btn-primary'>View Profile</a>
        //   </div>";
        echo "<a class='btn btn-primary' href = 'profile.php?id=".$row['id']."' >View Profile</a> </div>";
       

          
       echo "</div>";
   }

 ?>
      </div>
    </section>
  </body>
</html>
