<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>String7</title>
</head>
<body>
	<?php
		$mystring = 'abc';
		$findme   = 'a';
		$pos = strpos($mystring, $findme);

		if ($pos !== false) {
    	echo "'$findme' 문자열을 '$mystring' 문자열에서 찾았습니다.";
    	echo "위치 $pos에 존재합니다.";
		} else {
    	echo "'$findme' 문자열을 '$mystring' 문자열에서 찾지 못했습니다.";
		}
	?>
</body>
</html>