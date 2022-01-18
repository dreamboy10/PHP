<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Composer</title>
</head>
<body>
	<?php 
		require 'vendor/autoload.php';
		use dflydev\markdown\MarkdownParser;
		$markdownParser = new MarkdownParser();
		echo $markdownParser->transformMarkdown
			("#Hello World");
	?>
</body>
</html>