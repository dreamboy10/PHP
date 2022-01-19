<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RegExp3</title>
</head>
<body>
	<?php
		$subject = 'coding everybody http://naver.com egoing@naver.com 010-0000-0000';
		preg_match('~(http://\w+\.\w+)\s(\w+@\w+\.\w+)~', $subject, $match);
		var_dump($match[0]);
		echo "homepage:".$match[1];
		echo "<br>";
		echo "email:".$match[2];
	?>
</body>
</html>