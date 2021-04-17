<?php
	include 'C:\xampp\htdocs\social\includes\handlers\registerhandler.php';
  session_start();
  if(isset($_SESSION['email'])) header('Location:dashboard.php');

?>
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
      .error{
        color:red;
      }
    </style>
    <link rel="stylesheet" href="css/style.css" />
    <title>Welcome To The Developer Connector</title>
  </head>
<body>
    <nav class="navbar bg-dark">
      <h1>
        <a href="index.html"><i class="fas fa-code"></i> DevConnector</a>
      </h1>
      <ul>
        <li><a href="profiles.php">People</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </nav>
    <section class="container">
      <h1 class="large text-primary">Sign Up</h1>
      <p class="lead"><i class="fas fa-user"></i>Create Your Account</p>
      <p class='error'><?php echo  $errorMessage ?></p>

      <form class="form" method="POST" action="<?php $_SERVER['PHP_SELF']?>" enctype="multipart/form-data" >
        
        <div class="form-group">
          <input type="text" placeholder="Name" name="name" required />
        </div>

        <div class="form-group">   
          <input type="email" placeholder="Email" name="email" required />
        </div>       
       
        <div class="form-group">
          <input type="password" placeholder="Password" name="password" minLength="6"/>
        </div>

        <div class="form-group">
          <input type="password" placeholder="Confirm Password"name="password2" minLength="6"/>
        </div>
        <div class="form-group">
          <input type="file" name="userProfileImage" class="form-control" required="required" >          
        </div>

        <input type="submit" class="btn btn-primary" name='submit' value="submit"/>
      </form>

      <p class="my-1">Already have an account? <a href="login.php">Sign In</a></p>
    </section>
    

  </body>
