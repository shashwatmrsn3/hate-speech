<?php
      session_start();
      if(isset($_SESSION['email'])) header('Location:dashboard.php');
     include 'C:\xampp\htdocs\social\includes\handlers\loginhandler.php';
      
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
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </nav>
    <section class="container">
      <!-- <div class="alert alert-danger">
        Invalid credentials
      </div> -->
      <h1 class="large text-primary">Sign In</h1>
      <p class="lead"><i class="fas fa-user"></i> Sign into Your Account</p>
      <form class="form" method='POST' action=<?php $_SERVER['PHP_SELF']?> >
        <div class="form-group">
          <p style="color: red"><?php echo $error?></p>
          <input
            type="email"
            placeholder="Email Address"
            name="email"
            required
          />
        </div>
        <div class="form-group">
          <input
            type="password"
            placeholder="Password"
            name="password"
          />
        </div>
        <input type="submit" class="btn btn-primary" name='submit' value="submit" />
      </form>
      <p class="my-1">
        Don't have an account? <a href="register.php">Sign Up</a>
      </p>
    </section>
  </body>
</html>
