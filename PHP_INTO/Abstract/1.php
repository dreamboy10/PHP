<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Abstract1</title>
</head>
<body>
	<?php
		abstract class ParentClass {
			public function a() {
				echo 'a';
			}
			public abstract function b();
		}
		class ChildClass extends ParentClass {
			public function b() {
				
			}
		}
	?>
</body>
</html>