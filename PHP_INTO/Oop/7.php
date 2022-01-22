<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Oop7</title>
</head>
<body>
	<?php
		class Person {
			private $name;
			function sayHi() {
				print("Hi, I'm {$this->name}.");
			}
			function setName($_name) {
				if(empty($_name)) {
					die('I need name');
				}
				$this->name = $_name;
			}
			function getName() {
				return $this->name;
			}
		}
		$dreamboy = new Person();
		// $dreamboy->name = 'dreamboy';
		$dreamboy->setName('dreamboy');
		$dreamboy->sayHi();
		// print($dreamboy->name);
		print($dreamboy->getName());
	?>
</body>
</html>