<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>제어문</title>
</head>
<body>
	<?php 
		$data = 10;
		switch($data) {
			case 100:
				print "data 변수에 저장된 값은 $data 입니다.";
			case 200:
				print "data 변수에 저장된 값은 $data 입니다.";
			case 300:
				print "data 변수에 저장된 값은 $data 입니다.";
			default:
				print "data 변수에 저장된 값은 100, 200, 300이 아닙니다.";
		}
	?>
</body>
</html>