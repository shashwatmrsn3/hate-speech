<?php
	session_start();
	if($_SESSION['email']==null) header('Location:login.php');
	include 'C:\xampp\htdocs\social\includes\handlers\getpostbyid.php';
	include 'C:\xampp\htdocs\social\includes\handlers\commenthandler.php';
	include 'C:\xampp\htdocs\social\includes\handlers\getcomment.php';
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
  		<?php include "css/style.css" ?>
	</style>
    
    <title>Welcome To The Developer Connector</title>
  </head>
  <body>
    <nav class="navbar bg-dark">
      <h1>
        <a href="index.html"><i class="fas fa-code"></i> DevConnector</a>
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
          <a href="login.html" title="Logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="hide-sm">Logout</span></a
          >
        </li>
      </ul>
    </nav>
    <section class="container">
      <a href="posts.php" class="btn">Back To Posts</a>
      <div class="post bg-white p-1 my-1">
        <div>
          <a href="profile.php">
            <img
              class="round-img"
              src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200"
              alt=""
            />
            <h4><?php echo $row["name"] ?></h4>
          </a>
        </div>
        <div>
          <p class="my-1">
            <?php echo $row["text"] ?>
          </p>
        </div>
      </div>

      <div class="post-form">
        <div class="bg-primary p">
          <h3>Leave A Comment</h3>
        </div>
        <form class="form my-1" method='POST' action=<?php $_SERVER['PHP_SELF']?>>
          <textarea
            name="text"
            cols="30"
            rows="5"
            placeholder="Comment on this post"
            required
          ></textarea>
          <input type="submit" class="btn btn-dark my-1" value="Submit" name = 'submit'/>
        </form>
      </div>
      <?php while($row = mysqli_fetch_array($comment)){
      	echo "<div class='comments'>
        <div class='post bg-white p-1 my-1'>
          <div>
            <a href='profile.html'>
              <img
                class='round-img'
                src='https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200'
                alt=''
              />
              <h4>".$row['name']."</h4>
            </a>
          </div>
          <div>
            <p class='my-1'>".
              $row['text']."
            </p>
             <p class='post-date'>
                Posted on 04/16/2019
            </p>
          </div>
        </div>";
      }
      ?>
      

        
      </div>
    </section>
  </body>
</html>

