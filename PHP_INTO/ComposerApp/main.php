<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ComposerApp3</title>
</head>
<body>
	<?php
		// require_once __DIR__.'\Greeting/En/Hi.php';
		require_once __DIR__.'\vendor/autoload.php';
		use Greeting\En\Hi;
		new Hi();
	?>
</body>
</html>