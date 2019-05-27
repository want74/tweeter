<?php  $connect = mysqli_connect('127.0.0.1', 'root', '', 'andreykych_pn_09');
	$kek = mysqli_query($connect, "DELETE FROM tweet WHERE id = '".$_GET['id'] . "'");
	header("Location: index.php")

 ?>