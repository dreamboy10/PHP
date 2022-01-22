<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Oop1</title>
</head>
<body>
	<h1>Function</h1>
	<?php 
		var_dump(is_file('data.txt'));
		var_dump(is_dir('data.txt'));
		var_dump(file_get_contents('data.txt'));
		file_put_contents('data.txt', rand(1,100));
	?>
	
	<h1>Object</h1>
	<?php 
		$file = new SplFileObject('data.txt');
		var_dump($file->isFile());
		var_dump($file->isDir());
		var_dump($file->fread($file->getSize()));
		$file->fwrite(rand(1,100));

		$file2 = new SplFileObject('data2.txt');
		var_dump($file2->isFile());
		var_dump($file2->isDir());
		var_dump($file2->fread($file->getSize()));
		$file2->fwrite(rand(1,100));
	?>
</body>
</html>