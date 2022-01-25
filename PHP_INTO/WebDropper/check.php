<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WebDropper1</title>
</head>
<body>
	<?php
		include 'simple_html_dom.php';
		$url = $argv[1];
		$html = file_get_html($url);
		for($i = 2; $i < count($argv); $i++) {
			var_dump(substr($argv[$i], 0, 2));
			if(substr($argv[$i], 0, 2 === '-t')) {
				$output .= substr($argv[$i], 2);
			} else {
				$output .= trim($html->find($argv[$i][0])
					->plaintext);
			}
		}
		echo $output;
	?>
</body>
</html>