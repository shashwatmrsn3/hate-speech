<?php

$uid = $_SESSION['id'];
include 'C:\xampp\htdocs\social\includes\config\db.php';
if(isset($_POST['submit'])){
	echo 'inside post handler';
	$text = $_POST['text'];

	$data = array('post' => $text);
	$url = 'http://127.0.0.1:5000/';
	$options = array(
		'http' => array(
			'method'  => 'POST',
			'content' => json_encode( $data ),
			'header'=>  "Content-Type: application/json\r\n" .
			"Accept: application/json\r\n"
		)
	);

	$context  = stream_context_create( $options );
	$result = file_get_contents( $url, false, $context );
	if($result == "not hate speech"){
		$sql = "insert into social.post(text, uid) values('$text', '$uid')";
		$result = mysqli_query($conn,$sql);				
		header('Location:posts.php');
	}else{
		echo '<script language="javascript">';
		echo 'alert("Please be kind with your words :)")';
		echo '</script>';
	}


	

}

?>