<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inheritance_Do1</title>
</head>
<body>
	<?php
		class ParentClass {
			function callMethod($param) {
				echo "<h1>Parent {$param}</h1>";
			}
		}
		class ChildClass extends ParentClass {
			function callMethod($param) {
				parent::callMethod($param);
				echo "<h1>Child {$param}</h1>";
			}
		}
		$obj = new ChildClass();
		$obj->callMethod('method')
	?>
</body>
</html>