<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Coronavirus Update</title>
	<link rel="icon" href="favicon.gif" type="image/gif" sizes="16x16">
	<link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200;1,300;1,400;1,500;1,600;1,700&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
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
				<img src="assets/images/strong-together.png" alt="Strong Together" draggable="false">
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
				<h2>To prevent the spread of COVID-19</h2>
				<ul class="preventions-ul">
					<li>
						<figure>
							<img src="assets/images/corona-icon(1).gif" alt="Clean your hands" draggable="false">
						</figure>
						<p>Clean your hands often. Use soap and water, or an alcohol-based hand rub.</p>
					</li>
					<li>
						<figure>
							<img src="assets/images/corona-icon(17).gif" alt="Clean your hands" draggable="false">
						</figure>
						<p>Maintain a safe distance from anyone who is coughing or sneezing.</p>
					</li>
					<li>
						<figure>
							<img src="assets/images/corona-icon(6).gif" alt="Clean your hands" draggable="false">
						</figure>
						<p>Wear a mask when physical distancing is not possible.</p>
					</li>
					<li>
						<figure>
							<img src="assets/images/corona-icon(39).gif" alt="Clean your hands" draggable="false">
						</figure>
						<p>Don’t touch your eyes, nose or mouth.</p>
					</li>
					<li>
						<figure>
							<img src="assets/images/corona-icon(34).gif" alt="Clean your hands" draggable="false">
						</figure>
						<p>Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</p>
					</li>
					<li>
						<figure>
							<img src="assets/images/corona-icon(5).gif" alt="Clean your hands" draggable="false">
						</figure>
						<p>Stay home if you feel unwell.</p>
					</li>
					<li>
						<figure>
							<img src="assets/images/corona-icon(44).gif" alt="Clean your hands" draggable="false">
						</figure>
						<p>If you have a fever, cough and difficulty breathing, seek medical attention.</p>
					</li>					
				</ul>
			</div>
		</section>
		<?php
			$covid19_api_data = file_get_contents('http://api.covid19api.com/summary'); //API DATA
			$cdata = json_decode($covid19_api_data);
			if(empty($cdata->Message)):
		?>
		<section class="corona-update" id="corona-update">
			<div class="wrapper">
				<h3>
					Coronavirus (COVID-19) Worldwide Update: 
					<?php 
						$total_records = count($cdata->Countries);
						date_default_timezone_set('Asia/Calcutta');
						$date = date('D, j M Y, h:i A', time());
						echo $date;						
					?>
				</h3>
				<div class="card" style="overflow: auto;">                   
                    <div class="card-body">
                		<table class="table corona-update-table table-bordered table-striped text-center" id="covidtable">
							<tr>
								<th>ID</th>
								<th>Country</th>
								<th>Total Confirmed</th>
								<th>Total Recovered</th>
								<th>Total Recovery</th>
								<th>Total Deaths</th>
								<th>New Confirmed</th>
								<th>New Recovered</th>
								<th>New Deaths</th>
							</tr>
							<?php
								for($i=1; $i<$total_records; $i++) {
							?>
							<tr>
								<td style="background-color:#000; color:#fff;"><?php echo $i; ?></td>
								<td style="background-color:#777; color:#fff;"><?php echo $cdata->Countries[$i-1]->Country; ?></td>
								<td style="background-color:#ffbe73; color:#000;"><?php echo $cdata->Countries[$i-1]->TotalConfirmed; ?></td>
								<td style="background-color:#00f700; color:#000;"><?php echo $cdata->Countries[$i-1]->TotalRecovered; ?></td>
								<!-- Total Recovery Rate -->
								<?php
									$tot_recovered = $cdata->Countries[$i-1]->TotalRecovered;
									$tot_confirmed = $cdata->Countries[$i-1]->TotalConfirmed;
									$tot_deaths = $cdata->Countries[$i-1]->TotalDeaths;
									$tot_recovery_rate = @($tot_recovered/($tot_confirmed-$tot_deaths))*100;
									if (is_nan($tot_recovery_rate) || (is_finite($tot_recovery_rate)==false)){ ?>									
										<td style="background-color:#fff; color:#000;">N/A</td>
									<?php
									} else { 
											if($tot_recovery_rate==100) {
										?>
											<td style="background-color:#e2ffe0; color:#080; font-weight:700;"><?php echo round($tot_recovery_rate,2)."%" ?></td>
										<?php
											} else {
										?>
										<td style="background-color:#fff; color:#000;"><?php echo round($tot_recovery_rate,2)."%" ?></td>
									<?php
											} //End If: Recovery rate 100%
									} //End of If: Nan and Finite
								?>
								<td style="background-color:#ff4343; color:#000;"><?php echo $cdata->Countries[$i-1]->TotalDeaths; ?></td>
								<td style="background-color:#f80; color:#000;"><?php echo $cdata->Countries[$i-1]->NewConfirmed; ?></td>
								<td style="background-color:#080; color:#000;"><?php echo $cdata->Countries[$i-1]->NewRecovered; ?></td>						
								<td style="background-color:#f00; color:#000;"><?php echo $cdata->Countries[$i-1]->NewDeaths; ?></td>
							</tr>
							<?php
								} //End of For Loop
							?>    	
						</table>
                    </div>
                </div>
			</div>
		</section>
		<?php
			else :
		?>
		<section class="corona-update" id="corona-update">
			<div class="wrapper">
				<h3>
					Coronavirus (COVID-19) Worldwide Update: 
				</h3>
				<p class="text-center mb-4">COVID-19 data is updating... Please come back after some time.</p>
			</div>
		</section>
		<?php
			endif;
		?>
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
