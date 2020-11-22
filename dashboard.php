<?php
    include 'C:\xampp\htdocs\social\includes\auth\get-user-data.php';
    include 'C:\xampp\htdocs\social\includes\auth\auth.php';


  

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
          <a href="dashboard.php" title="Dashboard"
            ><i class="fas fa-user"></i>
            <span class="hide-sm">Dashboard</span></a
          >
        </li>
        <li>
          <a href="login.php" title="Logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="hide-sm">Logout</span></a
          >
        </li>
      </ul>
    </nav>
    <section class="container">
      <h1 class="large text-primary">
        Dashboard
      </h1>
      <p class="lead"><i class="fas fa-user"></i> Welcome <?php echo $name?></p>
      <div class="dash-buttons">
        <a href="editprofile.php" class="btn btn-light"
          ><i class="fas fa-user-circle text-primary"></i> Edit Profile</a
        >
        
      </div>

      <h2 class="my-2">Profile</h2>
      

      <table class="table" >
          
          <tbody>
            <tr>
              <td><b>Bio</b></td>
              <td class="hide-sm"><?php echo $bio?></td>
              
              <td>
                <button class="btn btn-danger">
                  Delete
                </button>
              </td>
            </tr>

            <tr>
              <td><b>Address</b></td>
              <td class="hide-sm"><?php echo $address?></td>
              
              <td>
                <button class="btn btn-danger">
                  Delete
                </button>
              </td>
            </tr>

            <tr>
              <td><b>Education</b></td>
              <td class="hide-sm"><?php echo $education?></td>
              
              <td>
                <button class="btn btn-danger">
                  Delete
                </button>
              </td>
            </tr>

            <tr>
              <td><b>Job</b></td>
              <td class="hide-sm"><?php  echo $job?></td>
              
              <td>
                <button class="btn btn-danger">
                  Delete
                </button>
              </td>
            </tr>
            <tr></tr>
          </tbody>
        </table>

        <div class="my-2">
            <button class="btn btn-danger">
                <i class="fas fa-user-minus"></i>

                Delete My Account
            </button>
          </div>
    </section>

  </body>
</html>
