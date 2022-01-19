<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RegExp1</title>
</head>
<body>
	<?php
		if (preg_match("/php/i", "PHP is the web scripting language of choice.")) {
    	echo "A match was found.";
		} else {
    	echo "A match was not found.";
		}
	?>
</body>
</html>