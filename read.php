<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>파일 읽기</title>
</head>
<body>
	<?php
		$fp = @fopen("abc.txt", "r") or die("Error!\n");
		while(!feof($fp)) {
			print fgets($fp) . "<br>\n";
		}
		fclose($fp);
	?>
</body>
</html>