<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>정의가 끝난 변수</title>
</head>
<body>
	<?php 
		print "서버의 도메인명은 \ "
		.$_SERVER['HTTP_HOST'] . "\ 입니다.<br>\n";
		print "스크립트의 상대 패스는 \ "
		.$_SERVER['SCRIPT_NAME'] . "\ 입니다.<br>\n";
	?>

	<form action="super2.php" method="POST">
		내 이름은 <input type="text" name="MYNAME">
		<input type="submit" value="확인">
	</form>
</body>
</html>