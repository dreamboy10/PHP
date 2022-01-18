<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File7</title>
</head>
<body>
	<?php 
		$file = 'readme.txt';
		$newfile = 'example.txt.bak';
 
		if (!copy($file, $newfile)) {
    	echo "failed to copy $file...\n";
		}
	?>
</body>
</html>