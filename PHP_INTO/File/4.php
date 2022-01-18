<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File4</title>
</head>
<body>
	<?php 
		$filename = 'readme.txt';
		if (is_readable($filename)) {
    	echo 'The file is readable';
		} else {
    	echo 'The file is not readable';
		}
	?>
</body>
</html>