<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File2</title>
</head>
<body>
	<?php 
		$file = './writeme.txt';
		file_put_contents($file, 'coding everybody');
	?>
</body>
</html>