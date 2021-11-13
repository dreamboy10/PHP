<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>파일 존재 여부</title>
</head>
<body>
	<?php 
		$filename = "test.txt";

		if(file_exists($filename)) {
			$size = filesize($filename);
			print "파일이 존재합니다. 파일 크기는 $size byte입니다.";
		} else {
			print "파일이 존재하지 않습니다.";
		}
	?>
</body>
</html>