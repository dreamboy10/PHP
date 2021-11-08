<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>체크박스와 라디오 버튼 사용</title>
</head>
<body>
	<?php 
		$data1 = $_GET["check1"];
		$data2 = $_GET["check2"];
		$data3 = $_GET["check3"];
		$data4 = $_GET["group1"];

		echo "나의 취미는 $data1 $data2 $data3 입니다. <br>";
		echo "입력된 비밀번호는 $data2 입니다. <br>";
	?>
</body>
</html>