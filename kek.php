<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'andreykych_pn_09');
	$lol = mysqli_query($connect, "UPDATE  tweet SET title = '". $_POST['title'] . "' WHERE id = '". $_POST['id'] . "'");
	header("Location: index.php")
	?>