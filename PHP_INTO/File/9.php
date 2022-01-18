<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File9</title>
</head>
<body>
	<?php 
		echo getcwd().'<br>';
		chdir('../');
		echo getcwd().'<br>';
	?>
</body>
</html>