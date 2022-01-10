<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>배열 연산자</title>
</head>
<body>
	<?php 
		// $a = array(1, 2);
		// $b = array(3, 4, 5);
		// $c = $a + $b;
		// print $c;

		$a = array(0 => 0, 1 => 1);
		$b = array(1 => 1, 0=> 0);
		$c = array(0 => 0, 1 => "1");

		var_dump($a == $b);
		var_dump($a === $b);
		print "<br>\n";
		var_dump($a == $c);
		var_dump($a === $c);
	?>
</body>
</html>