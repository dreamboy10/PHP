<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>날짜의 포맷 변환</title>
</head>
<body>
	<?php 
		$olddate = "2007/ 3/ 1";
		if(ereg("^[0-9]+/[0-9]+/[0-9]+$", $olddate)) {
			// 날짜이면 분할해서 배열에 저장한다.
			list($year, $month, $day) = split('/', $olddate);
			// 4열-2열-2열의 포맷으로 표시한다.
			$newdate = sprintf("%04d-%02d-%02d", $year, $month, $day);
			print $newdate;
		} else {
			print "날짜는 없었습니다. <br>\n";
		}
	?>
</body>
</html>