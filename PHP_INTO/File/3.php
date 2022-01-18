<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File3</title>
</head>
<body>
	<?php 
		$homepage = file_get_contents('http://php.net/manual/en/function.file-get-contents.php');
		echo $homepage;
	?>
</body>
</html>