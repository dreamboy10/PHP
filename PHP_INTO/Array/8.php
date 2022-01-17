<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array8</title>
</head>
<body>
	<?php
		function get_members(){
    	return ['dreamboy', 'juliyr', 'bdiop'];
		}
 
		$members = get_members();
 
		for($i = 0; $i < count($members); $i++) {
    	echo ucfirst($members[$i]).'<br>';
		}
	?>
</body>
</html>