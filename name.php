<?php  $connect=mysqli_connect('127.0.0.1','root','','tweetBD'); 
$kek = mysqli_query($connect, "DELETE FROM store WHERE id = '".$_GET['id'] . "'");
header("Location: http://andreyneneustroev/46/index.php");
 ?>