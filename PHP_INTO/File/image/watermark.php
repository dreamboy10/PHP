<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File15</title>
</head>
<body>
	<?php
		$stamp = imagecreatefrompng('./text.png');
		$im = imagecreatefrompng('./original.png');

		$marge_right = 10;
		$marge_bottom = 10;
		$sx = imagesx($stamp);
		$sy = imagesy($stamp);

		imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));
 
		header('Content-type: image/png');
		imagepng($im);
		imagedestroy($im);
	?>
</body>
</html>