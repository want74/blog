<!DOCTYPE html>
<html>
<head>
	<title>LOL</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>
		Блог
	</h1>
	<hr>
	<?php
	 $db = [
	 	['title' => 'Статья1',
		'short_text' => 'Здесь какой-то маленький текст','long_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		'],['title' => 'Статья2',
		'short_text' => 'Здесь какой-то маленький текст','long_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		'],['title' => 'Статья3',
		'short_text' => 'Здесь какой-то маленький текст','long_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		']
	 ];
	 	
	 
	?>
	 <?php 
	 	for ($i=0; $i < count($db) ; $i++) { 
	 ?>
	 <a href="page.php"></a>
	 <div>
	 <?php
	 		echo '<h3>' . $db[$i]['title'] . '</h3>';
	 		echo '<p>' . $db[$i]['short_text'] . '</p>';
	 		echo '<a href="page.php?index=' . $i .'">Далее</a>';
	 		echo '<hr>';
	 	
	  ?>
	  </div>
	  <?php } ?>
</body>
</html>