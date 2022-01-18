<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File5</title>
</head>
<body>
	<?php 
		$filename = 'writeme.txt';
		if (is_writable($filename)) {
    	echo 'The file is writable';
		} else {
    	echo 'The file is not writable';
		}
	?>
</body>
</html>