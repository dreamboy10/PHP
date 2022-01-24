<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ComposerApp1</title>
</head>
<body>
	<?php
		// require_once __DIR__.'\vendor\monolog\monolog\src\monolog\Logger.php';
		// require_once __DIR__.'\vendor\monolog\monolog\src\monolog\Handler\StreamHandler.php';
		require_once __DIR__.'\vendor\autoload.php';

		use Monolog\Logger;
		use Monolog\Handler\StreamHandler;

		$log = new Logger('name');
		$log->pushHandler(new StreamHandler
			(__DIR__.'\app.log', Logger::WARNING));

		$log->warning('DREAM');
		$log->error('BOY');
	?>
</body>
</html>