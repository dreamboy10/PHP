<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>연산자의 우선순위</title>
</head>
<body>
	<?php 
		print "2 X 8 - 6 / 2 = " . (2 * 8 - 6 / 2) . "<br>\n";
		print "2 X ( 8 - 6 ) / 2 = " . (2 * ( 8 - 6 ) / 2) . "<br>\n";
		print "1 -2 + 3 = " . (1 - 2 + 3) . "<br>\n";
		print "1 - ( 2 + 3 ) = " . (1 - (2 + 3) );
	?>
</body>
</html>