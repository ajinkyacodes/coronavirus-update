<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Coronavirus Update</title>
	<link rel="icon" href="favicon.gif" type="image/gif" sizes="16x16">
	<link rel="stylesheet" media="screen" href="assets/vendor/bootstrap-4.3.1/bootstrap.min.css">
	<link rel="stylesheet" media="screen" href=<?php 
	$cssfile = "assets/css/style.css";
	$timestamp = "?".time();
	echo $cssfile.$timestamp;
	?>>
</head>
<body>
	<header>
		<div class="wrapper">
			<figure>
				<img src="assets/images/strong-together.png" alt="Strong Together">
			</figure>
			<div class="header-text">
				<h1>Stay Safe and Stay Strong</h1>
				<p>Let's fight against Coronavirus (COVID-19) together</p>
			</div>
		</div>
	</header>
	<main>
		<div class="wrapper">
			
		</div>
	</main>
	<footer>
		<div class="wrapper">
			
		</div>
	</footer>
	<script src="assets/vendor/bootstrap-4.3.1/bootstrap.min.js"></script>
	<script src=<?php 
	$jsfile = "assets/js/script.js";
	$timestamp = "?".time();
	echo $jsfile.$timestamp;
	?>></script>
</body>
</html>
