<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>정규표현</title>
</head>
<body>
	<?php 
		$strs = "171-0022";
		if(ereg("([0-9]{3} )-([0-9]{4} )", $strs)) {
			print "올바른 우편번호입니다.";
		} else {
			print "형식이 올바르지 않습니다.";
		}
	?>
</body>
</html>