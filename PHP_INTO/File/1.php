<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File1</title>
</head>
<body>
	<?php 
		$file = './readme.txt';
		echo file_get_contents($file);
	?>
</body>
</html>