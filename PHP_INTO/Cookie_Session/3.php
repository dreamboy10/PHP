<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Session1</title>
</head>
<body>
	<?php 
		session_save_path('./session');
		session_start();
		$_SESSION['title'] = '생활코딩';
	?>
</body>
</html>