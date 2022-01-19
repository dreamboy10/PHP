<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RegExp2</title>
</head>
<body>
	<?php
		if (preg_match("/\bweb\b/i", "PHP is the web scripting language of choice.")) {
    	echo "A match was found."."<br>";
		} else {
    	echo "A match was not found."."<br>";
		}
 
		if (preg_match("/\bweb\b/i", "PHP is the website scripting language of choice.")) {
    	echo "A match was found."."<br>";
		} else {
    	echo "A match was not found."."<br>";
		}
	?>
</body>
</html>