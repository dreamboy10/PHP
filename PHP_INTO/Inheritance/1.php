<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inheritance1</title>
</head>
<body>
	<?php
		class Animal {
			function run() {
				print('running...<br>');
			}
			function breathe() {
				print('breathing...<br>');
			}
		}
		class Human extends Animal {
			function think() {
				print('thinking...<br>');
			}
			function talk() {
				print('talking...<br>');
			}
		}
		$human = new Human();
		$human->run();
		$human->think();
	?>
</body>
</html>