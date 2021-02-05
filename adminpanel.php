<?php
    include 'C:\xampp\htdocs\social\includes\handlers\gethatepost.php';
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
        
        <li>
          <a href="includes/auth/logout.php" title="Logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="hide-sm">Logout</span></a>
        </li>
      </ul>
    </nav>
    <section class="container">
      <h1 class="large text-primary">Admin panel</h1>
      <p class="lead"><i class="fas fa-user"></i> Welcome Admin</p>
     

      <table class="table" >          
        <?php 
        while($row = mysqli_fetch_array($res) ){
        echo  "<tr>
        <td style='width:700px'>".$row['text']."</td>
        <td><a href='approve.php?id=".$row['post_id']."'><button class='btn btn-primary'>Approve</button></a></td>";
      }
        ?>
      </table>

      
    </section>

  </body>
</html>
