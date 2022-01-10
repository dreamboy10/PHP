<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>정규표현</title>
</head>
<body>
	<?php 
		$strs = "234-3426";

		if(ereg("([0-9]{4}) - ([0-9]{3})", $strs) ||
			ereg("([0-9]{3}) - ([0-9]{4})", $strs)) {
				print "올바른 전화번호입니다.";
		} else {
			print "잘못된 전화번호입니다.";
		}
	?>
</body>
</html>