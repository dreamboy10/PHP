<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File13</title>
</head>
<body>
	<?php
		header("Content-type: image/png");
		$string = $_GET['text'];
		$im     = imagecreatefrompng("button.png");
		$purple = imagecolorallocate($im, 60, 87, 156);
		$px     = (imagesx($im) - 7.5 * strlen($string)) / 2;
		imagestring($im, 4, $px, 9, $string, $purple);
		imagepng($im);
		imagedestroy($im);
	?>
</body>
</html>