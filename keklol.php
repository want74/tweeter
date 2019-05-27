<?php  $connect=mysqli_connect('127.0.0.1','root','','tweetBD'); 
	$kek = mysqli_query($connect, "DELETE FROM tweet WHERE id = '".$_GET['id'] . "'");
	header("Location: index.php")

 ?>