<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'andreykych_pn_09');
	$lol = mysqli_query($connect, "INSERT INTO tweet ( title, img, text, logo ) VALUES ('". $_GET['title'] . "', '". $_GET['img'] . "','". $_GET['text'] . "' , 'post1.jpg')");
	header("Location: index.php")
?>