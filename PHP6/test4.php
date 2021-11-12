<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>정규표현</title>
</head>
<body>
	<?php 
		$strs = "Conglatulations";

		$place1 = strpos($strs, "a", 0);
		$place2 = strrpos($strs, "a", 0);

		print "\$length1 = $place1";
		print "<br>";
		print "\$length2 = $place2";
	?>
</body>
</html>