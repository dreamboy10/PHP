<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>제어문</title>
</head>
<body>
	<?php 
		$data = 101;
		while($data <= 100) {
			$hap += $data++;
		}
		print "hap = $hap";

		$data = 101;
		do {
			$hap += $data++;
		}
		while($data <= 100);
		print "hap = $hap";
	?>
</body>
</html>