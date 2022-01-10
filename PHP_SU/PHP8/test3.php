<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>파일 존재 여부</title>
</head>
<body>
	<?php 
		$fp = fopen("test.txt", "w");
		if($fp == null) {
			print "파일이 존재하지 않습니다.";
		} else {
			print "파일 열기 완료했습니다.";
			fclose($fp);
		}
	?>
</body>
</html>