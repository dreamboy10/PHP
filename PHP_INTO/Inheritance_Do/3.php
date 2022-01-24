<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inheritance_Do3</title>
</head>
<body>
	<?php
		final class ParentClass {
			function a() {
				echo 'Parent';
			}
			function b() {
				echo 'parent B';
			}
		}
		class ChildClass extends ParentClass {
			function a() {
				echo 'Child';
			}
			function b() {
				echo 'Child B';
			}
		}
		$obj = new ChildClass();
		$obj->a();
	?>
</body>
</html>