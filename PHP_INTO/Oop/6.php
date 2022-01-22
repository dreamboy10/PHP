<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Oop6</title>
</head>
<body>
	<?php 
		class MyFileObject {
			private $filename;
			function __construct($fname) {
				$this->filename = $fname;
				if(!file_exists($this->filename)) {
					die('There is no file '.$this->filename);
				}
			}
			function isFile() {
				return is_file($this->filename);
			}
		}
		$file = new MyFileObject('data.txt');
		// $file = new MyFileObject();
		// $file->filename = 'data.txt';
		var_dump($file->isFile());
		var_dump($file->filename);
	?>
</body>
</html>