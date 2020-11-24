<?php
	include 'C:\xampp\htdocs\social\includes\handlers\createprofilehandler.php';
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
    <title>Welcome To The Developer Connector</title>
  </head>
   <body>
    <nav class="navbar bg-dark">
      <h1>
        <a href="index.html"><i class="fas fa-code"></i>DevConnector</a>
      </h1>

      <ul>
        <li><a href="profiles.html">Developers</a></li>
        <li><a href="posts.html">Posts</a></li>
        <li>          |
          <a href="dashboard.php" title="Dashboard">
            <i class="fas fa-user"></i>
            <span class="hide-sm">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="includes/auth/logout.php" title="Logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="hide-sm">Logout</span>
          </a>
        </li>
      </ul>
    </nav>

    <section class="container">
      <h1 class="large text-primary">Create Your Profile</h1>
      <p class="lead">
        <i class="fas fa-user"></i> Let's get some information to make your profile stand out
      </p> 

      <?php echo $errorMessage?>
      <form class="form" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">        
        <div class="form-group">        
          <textarea placeholder="A short bio of yourself" name="bio" required="required"></textarea>
          <small class="form-text">Tell us a little about yourself</small>
        </div>
        <div class="form-group">
          <input type="text" placeholder="Address" name="address" required="required"/>
          <small class="form-text">Could be your own address</small>
        </div>
        <div class="form-group">
          <input type="text" placeholder="Education" name="education" required="required"/>
          <small class="form-text">Education</small>
        </div>
        <div class="form-group">
          <input type="text" placeholder="Job" name="job" required="required"/>
          <small class="form-text">Enter recent job</small>
        </div>
       
        <input type="submit" class="btn btn-primary" name="submit" value="Create" />
        <a class="btn btn-light" href="dashboard.php">Go Back</a>
      </form>
    </section>

  </body>
  </html>
