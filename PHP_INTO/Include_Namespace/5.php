<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Namespace3</title>
</head>
<body>
	<?php
		require_once 'greeting_lang.php';
		echo language\ko\welcome();
		echo language\en\welcome();
	?>
</body>
</html>