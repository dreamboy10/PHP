<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Oop5</title>
</head>
<body>
	<?php 
		class MyFileObject {
			function __construct($fname) {
				$this->filename = $fname;
			}
			function isFile() {
				return is_file($this->filename);
			}
		}
		$file = new MyFileObject('data.txt');
		// $file->filename = 'data.txt';
		var_dump($file->isFile());
		var_dump($file->filename);
	?>
</body>
</html>