<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>정규표현</title>
</head>
<body>
	<?php 
		$str = "
		<html>
		<head>
			<title>HTML 태그 삭제</title>
		</head>
		<body>
			<a href="cookie2.php">
				PHP 프로그래밍
			</a>
		</body>
		</html>
		";

		$newstr = strip_tags($str, "");
		print $newstr;
	?>
</body>
</html>