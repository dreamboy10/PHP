<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>쿠키</title>
</head>
<body>
	<?php 
		$getval = $_COOKIE['val'];
		print "페이지 2의 값은 $getval입니다. <br>\n";
	?>
	<a href="cookie1.php">
		페이지 1로
	</a>
</body>
</html>