<!DOCTYPE html>
<html>
<head>
	<title>Статья 1</title>
	<meta charset="utf-8">
</head>
<body>
	<?php

	$db  = [
			'title' => 'Заголовок',
			'short_text' => 'Короткий текст',
			'long_text' => 'Очень длинный текст ',

		]

	

	?>
	<?php
		$index = $_GET['index'];
	 ?>
	 <h3><?php echo $db['title'] ?></h3>
	 <hr>
	 <p><?php echo $db['short_text'] ?></p>
	 <p><?php echo $db['long_text'] ?></p>
	 
</body>
</html>