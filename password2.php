<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>패스워드 입력화면</title>
</head>
<body>
	<?php 
		$password = $_POST['pass'];
		if(eregi("^[a-z][a-z0-9_]{2,7}$", $password)) {
			print "패스워드는 올바른 형식입니다. <br>\n";
		} else {
			print "패스워드는 올바른 형식이 아닙니다. <br>\n";
		}
	?>
</body>
</html>