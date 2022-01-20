<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Session3</title>
</head>
<body>
	<?php 
		ini_set("display_errors", "1");
		session_start();
		session_destroy();
		header('Location: ./login.html');
	?>
</body>
</html>