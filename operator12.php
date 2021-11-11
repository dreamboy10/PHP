<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>연산자의 우선순위</title>
</head>
<body>
	<?php 
		$a = 5; $b = 5;
		$a2 = pow($a, 2);
		$b2 = pow($b, 2);
		$c2 = $a2 + $b2;
		$c = sqrt($c2);
		print "\ $a가 $a이고 \ $b가 $b일 때 <br>\n";
		print "\ $c의 값은 $c입니다.";
	?>
</body>
</html>