<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Interface3</title>
</head>
<body>
	<?php
		require_once __DIR__ . '\vendor\autoload.php';
 
		use Monolog\Logger;
		use Monolog\Handler\StreamHandler;
		use Monolog\Handler\NativeMailerHandler;
 
		$log = new Logger('name');
		$log->pushHandler(new StreamHandler(__DIR__ . '/app.log', Logger::ERROR));
		$log->pushHandler(new NativeMailerHandler(
    	'egoing@gmail.com',
    	'Emergence!!!!',
    	'out@system.com',
    	Logger::EMERGENCY));
 
		$log->warning('EGO');
		$log->error('ING');
		$log->emergency('emergency');
	?>
</body>
</html>