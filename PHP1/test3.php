<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>이름과 비밀번호를 입력받아 출력하기</title>
</head>
<body>
	<?php 
		$data1 = $_POST["name"];
		$data2 = $_POST["pass"];

		print "입력된 이름은 $data1 입니다. <br>";
		print "입력된 비밀번호는 $data2 입니다. <br>";
	?>
</body>
</html>