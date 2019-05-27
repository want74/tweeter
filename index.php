<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<meta charset="utf-8">
</head>
<body class="bg-light">

	<!--navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
  <a class="navbar-brand" href="#">NeTweeter</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vk.com/keker2281337">VK Владыки</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Уведомления</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Сообщения</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Имя друга" aria-label="Search">
      <button class="btn btn-outline-white my-2 my-sm-0" type="submit" id="1">Поиск друзей</button>
    </form>
  </div>
</nav>
	
</div>
<!--content-->
<div class="container " style="margin-top: 1rem">
	<div class="row ">

	 	<div class="col-3">
			 		<div class= "bg-white">
			 				<div class="row bg-white">
			 					<div class="col">
			 						<img src="background.jpg" class="w-100">
			 						<div class="row">
			 							<div class="col-4">
			 						<img src="avatar.jpg" style="border-radius: 100px">
			 					</div>
			 					<dib class="col-6">
			 						<div>
			 							<a href="">Mary Smith</a>
			 						</div>
			 						<div>
			 							<a href="">@Mary Smith</a>
			 						</div>
			 					</dib>
			 						</div>
			 					</div>
			 				</div>
			 				<div class="bg-white">
			 					<div class="row" style="margin-top: 1rem">
			 						<div class="col-6">
			 						<div>
			 							<a href="">Твиты</a>
			 						</div>
			 						<div>
			 							<a href="">228</a>
			 						</div>
			 					</div>
			 					<div class="col-6">
			 						<div>
			 							<a href="">Читаемые</a>
			 						</div>
			 						<div>
			 							<a href="">1337</a>
			 						</div>
			 					</div>
			 					</div>
			 				</div>
			 			</div>
			 			<div style="margin-top: 70px" class=" bg-white">
			 				<div>
			 					<h5>
			 						Актуальные темы
			 					</h5>
			 				</div>
			 				<div>
			 					<div>
			 						<a href="">Тема1</a>
			 					</div>
			 					<div>
			 						<a href="">Тема2</a>
			 					</div>
			 					<div>
			 						<a href="">Тема3</a>
			 					</div>
			 					<div>
			 						<a href="">Тема4</a>
			 					</div>
			 					<div>
			 						<a href="">Тема5</a>
			 					</div>
			 				</div>
			 			</div>
			 		</div>
			
	 	<div class="col-6 bg-white">
	 		<div class="row">
	 			<h2 class="offset-md-4">
	 				Создать пост
	 			</h2>
	 		</div>
	 		<div class="row">
	 			<form action="LOLKEK.php" method="GET">
	 				<input type="tweet" name="title" placeholder="Заголовок поста" class=" offset-11 form-control">
	 				<input type="tweet" name="text" placeholder="Текст поста" class="offset-11 form-control">
	 				<input type="tweet" name="img" placeholder="Фото поста" class="offset-11 form-control">
	 				<div class="row">
	 				<button class="btn offset-11">
	 					Создать
	 				</button>
	 				</div>
	 			</form>
	 		</div>
	 		<?php $connect=mysqli_connect('127.0.0.1','root','','tweetBD'); 
	 		$query=mysqli_query($connect,'SELECT * FROM tweet ORDER BY id ASC');
	 		for ($i=0; $i < $query->num_rows; $i++) { 
	 			$avatar=$query->fetch_assoc();
	 		
	 		?>
	<div class="row">
		
		<div class="col-2 ">
			<?php
echo '<img class="w-100" src="' . $avatar['logo']  .'">';
	 		?>
			 
		</div>
		<div class="col-10 ">
			<div>
			<div class="row">
				
				<?php
echo '<h1>'
					.$avatar['title'].
					'</h1>';
	 		?>

					
				
			</div>
			<div class="">
								<?php
echo '<p>'.$avatar['text'].'</p>';
	 		?>
			</div>
			<div class="">
							<?php
echo '<img class="w-100" src="' .$avatar['img']  .'">';
?>
			</div>
			<div class="row">
				<div class="col align-self-center">
	 		<form action="keklol.php" method="GET">
	 			<?php 
	 			echo '<input name = "id" value = "'.$avatar['id']. '" style="display:none">'; ?>
	 			<button class="btn col align-self-center">удалить</button>
	 		</form>
	 		<form action="new.php" method="POST">
	 			<?php 
	 			echo '<input name = "id" value = "'.$avatar['id']. '" style="display:none">';
	 			echo '<input name = "title" value = "'.$avatar['title']. '" style="display:none">'; ?>
	 			<button class="btn col align-self-center">Редактировать</button>
	 		</form>														
			</div>
			</div>
			<div class="row">
				<div class="col-3">
					<img src="comment.png">
				</div>
				<div class="col-3">
					<img src="gif.png">
				</div>
				<div class="col-3">
					<img src="envelope.png">
				</div>
				<div class="col-3">
					<img src="like.png">
				</div>
			</div>
			</div>
		</div>
	</div>
	
	
		
	
<?php 
} ?>
	</div>
	</div>
	</div>
		
	</div>
	<script type="text/javascript">
		let one = document.getElementById('1')
		one.onclick = function() {
			alert('У тебя нет друзей')
		}
	</script>
</body>
</html>