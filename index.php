<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Coronavirus Update</title>
	<link rel="icon" href="favicon.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" media="screen" href="assets/vendor/bootstrap-4.3.1/bootstrap.min.css">
	<link rel="stylesheet" media="screen" href=<?php 
	$cssfile = "assets/css/style.css";
	$timestamp = "?".time();
	echo $cssfile.$timestamp;
	?>>
</head>
<body>
	<p>Coronavirus Update</p>
	<script src="assets/vendor/bootstrap-4.3.1/bootstrap.min.js"></script>
	<script src=<?php 
	$jsfile = "assets/js/script.js";
	$timestamp = "?".time();
	echo $jsfile.$timestamp;
	?>></script>
</body>
</html>
