<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>제어문</title>
</head>
<body>
	<?php 
		$shiki = array(
						 'spr' => '봄',
						 'sum' => '여름',
						 'aut' => '가을',
						 'win' => '겨울');
		foreach($shiki as $key => $a) {
			print "$key 은(는) $a <br>\n";
		}
	?>
</body>
</html>