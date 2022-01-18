<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File10</title>
</head>
<body>
	<?php 
		$dir    = './';
		$files1 = scandir($dir);
		$files2 = scandir($dir, 1);
 
		print_r($files1);
		print_r($files2);
	?>
</body>
</html>