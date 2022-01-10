<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>비교 연산자</title>
</head>
<body>
	<?php 
		$a = array("김철민", "김재동");
		$b = array("홍길동", "베트맨", "슈퍼맨", "X맨");
		$c = $a + $b;
		for($i = 0; $i <= 4; $i++) {
			print $c[$i];
			print "<br>";
		}
	?>
</body>
</html>