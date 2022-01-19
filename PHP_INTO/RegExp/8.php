<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RegExp8</title>
</head>
<body>
	<?php
		$patterns = array ('/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/', '/^\s*{(\w+)}\s*=/');
		$replace = array ('\3/\4/\1\2', '$\1 =');

		echo preg_replace($patterns, $replace, 
			'{startDate} = 1999-5-27');
	?>
</body>
</html>