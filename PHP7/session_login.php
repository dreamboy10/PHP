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

		$_SESSION['val'] = 100;
	?>
	<a href="session.php">
		페이지 1로 이동
	</a>
</body>
</html>