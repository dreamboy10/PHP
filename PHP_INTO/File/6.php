<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File6</title>
</head>
<body>
	<?php 
		$filename = 'readme.txt';
		if (file_exists($filename)) {
    	echo "The file $filename exists";
		} else {
    	echo "The file $filename is not exists";
		}
	?>
</body>
</html>