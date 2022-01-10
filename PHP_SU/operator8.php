<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>기타 연산자</title>
</head>
<body>
	<?php 
		$a = 100; $b = 0;
		$c = ($a / $b);
		print $c;
		print "-----<br>\n";
		@print $c;
	?>
</body>
</html>