<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Autoload6</title>
</head>
<body>
	<?php
		require_once 'autoload.php';
		new greeting\en\Hi();
	?>
</body>
</html>