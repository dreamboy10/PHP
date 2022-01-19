<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RegExp4</title>
</head>
<body>
	<?php
		preg_match('@^(?:http://)?([^/]+)@i',
    	"http://www.php.net/index.html", $matches);
		print_r($matches);
		$host = $matches[1];

		preg_match('/[^.]+\.[^.]+$/', $host, $matches);
		echo "domain name is: {$matches[0]}\n";
	?>
</body>
</html>