<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Namespace1</title>
</head>
<body>
	<?php
		require_once 'greeting_ko.php';
		require_once 'greeting_en.php';
		echo welcome();
		echo welcome();
	?>
</body>
</html>