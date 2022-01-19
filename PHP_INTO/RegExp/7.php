<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RegExp7</title>
</head>
<body>
	<?php
		$string = 'The quick brown fox jumped over the lazy dog.';
		$patterns = array();
		$patterns[0] = '/quick/';
		$patterns[1] = '/brown/';
		$patterns[2] = '/fox/';
		$replacements = array();
		$replacements[2] = 'bear';
		$replacements[1] = 'black';
		$replacements[0] = 'slow';
		echo preg_replace($patterns, $replacements, $string);
	?>
</body>
</html>