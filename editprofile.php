<?php 
	include 'C:\xampp\htdocs\social\includes\handlers\editprofilehandler.php';

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
        <a href="index.html"><i class="fas fa-code"></i> DevConnector</a>
      </h1>
      <ul>
        <li><a href="profiles.html">Developers</a></li>
        <li><a href="posts.html">Posts</a></li>
        <li>
          |
          <a href="dashboard.html" title="Dashboard"
            ><i class="fas fa-user"></i>
            <span class="hide-sm">Dashboard</span></a
          >
        </li>
        <li>
          <a href="login.html" title="Logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="hide-sm">Logout</span></a
          >
        </li>
      </ul>
    </nav>
    <section class="container">
      <h1 class="large text-primary">
        Create Your Profile
      </h1>
      <p class="lead">
        <i class="fas fa-user"></i> Let's get some information to make your
        profile stand out
      </p>
      
      <form class="form" method="POST" action=<?php $_SERVER['PHP_SELF']?>>
        
        <div class="form-group">
          <input type="text" placeholder="Bio" name="bio" />
          <small class="form-text"
            >Add your bio</small
          >
        </div>
        <div class="form-group">
          <input type="text" placeholder="Address" name="address" />
          <small class="form-text"
            >Enter your address</small
          >
        </div>
        <div class="form-group">
          <input type="text" placeholder="Education" name="education" />
          <small class="form-text"
            >Enter your recent education profile</small
          >
        </div>
        <div class="form-group">
          <input type="text" placeholder="Job" name="job" />
          <small class="form-text"
            >Enter your current job</small
          >
        </div>
        
        <input type="submit" value="submit" name="submit" class="btn btn-primary my-1" />
        <a class="btn btn-light my-1" href="dashboard.html">Go Back</a>
      </form>
    </section>
  </body>
</html>