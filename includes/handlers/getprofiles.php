<?php
    include 'C:\xampp\htdocs\social\includes\config\db.php';

    $sql = "select * from user";
    $res = mysqli_query($conn,$sql);
    
?>