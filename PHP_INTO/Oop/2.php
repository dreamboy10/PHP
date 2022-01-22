<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Oop2</title>
</head>
<body>
	<h1>Function Style</h1>
	<?php 
		$adata = array('a', 'b', 'c');
		array_push($adata, 'd');
		foreach($adata as $item) {
			echo $item.'<br>';
		}
		var_dump(count($adata));
	?>

	<h1>Object Style</h1>
	<?php 
		$odata = new ArrayObject(array('a', 'b', 'c'));
		$odata->append('d');
		foreach($odata as $item) {
			echo $item.'<br>';
		}
		var_dump($odata->count());
	?>
</body>
</html>