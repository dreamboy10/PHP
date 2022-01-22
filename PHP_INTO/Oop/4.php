<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Oop4</title>
</head>
<body>
	<?php 
		class MyFileObject {
			function isFile() {
				return is_file($this->filename);
			}
		}
		$file = new MyFileObject();
		$file->filename = 'data.txt';
		var_dump($file->isFile());
		var_dump($file->filename);

		$file2 = new MyFileObject();
		$file2->filename = 'data2.txt';
		var_dump($file2->isFile());
		var_dump($file2->filename);
	?>
</body>
</html>