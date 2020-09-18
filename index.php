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
<body onload="fetch()">
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
		<section class="prevent">
			<div class="wrapper">
				<h2>To prevent the spread of COVID-19:</h2>
				<ul class="preventions-ul">
					<li>
						<figure>
							<img src="assets/images/corona-icon(1).gif" alt="Clean your hands">
						</figure>
						<p>Clean your hands often. Use soap and water, or an alcohol-based hand rub.</p>
					</li>
					<li>
						<figure>
							<img src="assets/images/corona-icon(17).gif" alt="Clean your hands">
						</figure>
						<p>Maintain a safe distance from anyone who is coughing or sneezing.</p>
					</li>
					<li>
						<figure>
							<img src="assets/images/corona-icon(6).gif" alt="Clean your hands">
						</figure>
						<p>Wear a mask when physical distancing is not possible.</p>
					</li>
					<li>
						<figure>
							<img src="assets/images/corona-icon(39).gif" alt="Clean your hands">
						</figure>
						<p>Don’t touch your eyes, nose or mouth.</p>
					</li>
					<li>
						<figure>
							<img src="assets/images/corona-icon(34).gif" alt="Clean your hands">
						</figure>
						<p>Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</p>
					</li>
					<li>
						<figure>
							<img src="assets/images/corona-icon(5).gif" alt="Clean your hands">
						</figure>
						<p>Stay home if you feel unwell.</p>
					</li>
					<li>
						<figure>
							<img src="assets/images/corona-icon(44).gif" alt="Clean your hands">
						</figure>
						<p>If you have a fever, cough and difficulty breathing, seek medical attention.</p>
					</li>					
				</ul>
			</div>
		</section>
		<section class="corona-update">
			<div class="wrapper">
				<h3>Coronavirus (COVID-19) Worldwide Update</h3>
				<table class="table corona-update-table table-bordered table-striped text-center" id="covidtable">
					<tr>
						<th>ID</th>
						<th>Country</th>
						<th>Total Confirmed</th>
						<th>Total Recovered</th>
						<th>Total Deaths</th>
						<th>New Confirmed</th>
						<th>New Recovered</th>
						<th>New Deaths</th>
					</tr>
				</table>
			</div>
		</section>
	</main>
	<footer>
		<div class="wrapper">
			&copy; ajinkyacodes
		</div>
	</footer>
	<script type="text/javascript"  src="assets/vendor/jquery-3.5.1.min.js"></script>
	<script type="text/javascript"  src="assets/vendor/bootstrap-4.3.1/bootstrap.min.js"></script>
	<script type="text/javascript" src=<?php 
	$jsfile = "assets/js/script.js";
	$timestamp = "?".time();
	echo $jsfile.$timestamp;
	?>></script>	
</body>
</html>
