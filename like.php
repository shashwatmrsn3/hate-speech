<?php
    $userId = $_SESSION['id'];
    include 'C:\xampp\htdocs\social\includes\config\db.php';
    
    if(isset($_POST['like'])){
        $postId = $_POST["postID"];
        echo $postId;
        echo $userId;
        $sql = "insert into social.likes (type, uid, pid) values (1, '$userId', '$postId')";
        $result = mysqli_query($conn, $sql);
        $likeMessage = "You like this post";
    }
    if(isset($_POST['dislike'])){
        echo $_POST['dislike'];
    }
?>