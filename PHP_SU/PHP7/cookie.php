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

		if($getval == 100) {
			print "로그인 페이지를 통해 들어 오셨군요.";
		} else {
			print "로그인 페이지를 통해 들어 오셔야 합니다.";
		}
	?>
	<a href="login.php">
		로그인 페이지로 이동
	</a>
</body>
</html>