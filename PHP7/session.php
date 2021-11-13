<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>세션</title>
</head>
<body>
	<?php
		session_start();

		$getval = $_SESSION['val'];

		if($getval == 100) {
			print "로그인한 상태입니다. 감사합니다.";
		} else {
			print "로그인 하지 않았습니다. 로그인 하신 후에 접속해 주세요.";
		}
	?>
	<a href="session_login.php">
		로그인 페이지로 이동
	</a>
</body>
</html>