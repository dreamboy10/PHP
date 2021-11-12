<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>함수</title>
</head>
<body>
	<?php 
		function addstring($a, $b) {
			$c = "$a. $b 님 즐거운 시간 되십시오.";
			return $c;
		}

		$d = addstring("안녕하세요. ", "홍길동");
		print $d;
	?>
</body>
</html>