<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Oop3</title>
</head>
<body>
	<?php 
		class MyFileObject {
			function isFile() {
				return is_file('data.txt');
			}
		}
		$file = new MyFileObject();
		var_dump($file->isFile());

		$file2 = new MyFileObject();
		var_dump($file2->isFile());
	?>
</body>
</html>