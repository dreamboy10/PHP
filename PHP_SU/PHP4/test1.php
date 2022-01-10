<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>제어문</title>
</head>
<body>
	<?php 
		$data = 70;

		if($data >= 90) {
			print "당신의 점수는 90점 이상 수입니다.";
		} else if($data >= 80) {
			print "당신의 점수는 80점 이상 우입니다.";
		} else if($data >= 70) {
			print "당신의 점수는 70점 이상 미입니다.";
		} else if($data >= 60) {
			print "당신의 점수는 60점 이상 양입니다.";
		} else {
			print "당신의 점수는 60점 이하 가입니다.";
		}
	?>
</body>
</html>