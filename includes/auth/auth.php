<?php 
  if($_SESSION['email']==null){
    header('Location:login.php');
  }else{
    header('Location:dashboard.php');
  }
 ?>