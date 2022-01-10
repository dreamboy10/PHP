<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>연산자</title>
</head>
<body>
	<?php 
		$a = 10;
		$b = $a++;
		$c = ++$a;
		$d = --$a;
		$e = $a--;
		print "$b $c $d $e";
	?>
</body>
</html>