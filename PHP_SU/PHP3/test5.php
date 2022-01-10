<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>연산자의 우선순위</title>
</head>
<body>
	<?php 
		$a = 5 * 2 / 2 + 10 / 2;
		$b = $a – 5 * 2 + ( 3 – 2 );
		$c = ( $b – 5 ) * 2 + ( 3 – 2 );
		$d = $c * 1 - ( 4 – 2 + ( 2 + 3 ));
	?>
</body>
</html>