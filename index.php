<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="stylesheet" type="text/css" href="styles.css" />
	<title>DeliFull</title>
</head>
	<body>
		<div id="container">

			<div id="time">
				<?php
					echo date("l jS \of F Y h:i:s A") . "<br>";
				?>

				<!-- <?php
				echo "Today is " . date("Y/m/d") . "<br>";
				echo "Today is " . date("Y.m.d") . "<br>";
				echo "Today is " . date("Y-m-d") . "<br>";
				echo "Today is " . date("l");
				?>  -->
			</div>

			<div class="brand-info">
				<h1 class="brand-text">DeliFull</h1>
				<p class="brand-sub">Hunger quenched</p>
			</div>

			<div id="user">
				<form class="log">
					<p>
						<input type="text" placeholder="Username">
					</p>
					<p>
						<input type="text" placeholder="Password">
					</p>
					<p>
						<button type="button">Login</button>
					</p>
				</form>
		</div>
	</div>

	</body>
</html>