<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="favicon.ico">
		
		<title>house/boat</title>
		
		<!-- Bootstrap core CSS -->
		<link href="theme/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Custom styles for this template -->
		<link href="theme/css/houseboat.css" rel="stylesheet">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="site-wrapper">
			<div class="site-wrapper-inner">
				<div class="cover-container">
					<div class="masthead clearfix">
						<div class="inner">
							<h3 class="masthead-brand"><a href="#query">house/boat</a></h3>
							
							<ul class="nav masthead-nav">
								<li><a href="#climate-change">climate change</a></li>
								<li><a href="#calculation">sea level rise</a></li>
								<li><a href="#facts">facts</a></li>
								<li><a href="#about">about</a></li>
							</ul>
						</div>
					</div>
					
					<div class="inner cover">
						<section id="query">
							<div id="pre-search">
								<h1 class="cover-heading">Do you need a <em class="red">House</em> or a <em>Boat</em>?</h1>
								
								<p class="lead">Find out if your house will be below water in the future</p>
								
								<form action="#" method="post">
									<fieldset>
										<label for="postcode">I live at</label><input type="text" id="postcode" name="postcode" placeholder="postcode" size="8" /> <label for="form-submit">will I</label> <input id="form-submit" type="submit" value="sink or swim?" class="btn btn-lg btn-default" />
									</fieldset>
									<p><a href="" class="advanced-query-show">Advanced options</a></p>
									<div id="advanced-query">
										<fieldset>
											<label for="outlook">I am …</label>
											
											<select id="outlook" name="outlook">
												<option value="optimist">an optimist</option>
												<option value="pessimist" selected="selected">a pessimist</option>
												<option value="denial">a climate change denier</option>
											</select>
										</fieldset>
										
										<fieldset>
											<label for="years">I want to live here for</label>
											
											<select id="years" name="years">
												<option value="1">1 year</option>
												<option value="10">10 years</option>
												<option value="100" selected="selected">100 years</option>
												<option value="1000">1000 years</option>
											</select>
										</fieldset>
									</div>
								</form>
							</div>
							<div id="post-search">
								<a href="#" class="repeat-search">Start again [X]</a>
								<div id="res-house" class="result house"></div>
								<div id="res-boat" class="result boat"></div>
								<div id="res-deny" class="result denial">
									You'll probably be fine!
								</div>
								<p id="res-blurb"></p>
								<p id="res-calc"><a href="#calculation">*Find out about how we calculated this value</a></p>
							</div>
							<p class="cta"><a href="#climate-change">Learn more</a></p>
						</section>
						<section id="climate-change" class="text">
							<h2>Climate Change</h2>
							<p>Climate Change is a very real phenomenon, with 97% of climate scientists in agreement, <a href="http://climate.nasa.gov/scientific-consensus">according to NASA</a>.</p>
							<p>Its effects will become increasingly relevant to people around the world.</p>
							
							<p><img src="theme/images/Temp_anomaly.jpg" alt="" /></p>
							
							<p class="reference">Agreement of temperature data from four leading international science institutions. From <a href="http://climate.nasa.gov/scientific-consensus">http://climate.nasa.gov/scientific-consensus</a>, all rights retained by original owner(s).</p>
						</section>
						<section id="calculation" class="text">
							
							<h2>Factors considered in your future housing solution</h2>
							
							<p>Climate change will have a wide variety of effects on our lives, we've chosen to look at the effect that sea level rise may have.</p>
							<p>Whether your house will be underwater at some point in the future is dependant on a number of factors.</p>
							
							<p>The two major factors are 1) whether a <em>short-term change in weather</em>, such as a period of heavy rain, has led to flooding and 2) whether <em>long-term changes to climate</em> has led to longer-term movement of coastline.</p>
							
							<ul>
								<li>
									<h3>1) flooding</h3>
									<p>Short-term weather conditions can have a dramatic effect on the environment, and an extended period of severe weather can lead to localised flooding, as happened cross the UK during the first quarter of 2014.</p>
								</li>
								<li>
									<h3>2) sea level rise</h3>
									<p>The longer-term effect of changing sea level will lead to potential permanent dampness at your place of residence.</p>
									
									<p>Sea level rise is complicated, so this tool makes a few assumptions:</p>
									<ol>
										<li>
											<p>Future sea level rise is based on estimations, since it's not possible (yet) to know the future.</p>
											
											<h4>10 and 100 years</h4>
											<p>Our estimation, up to the year 2100, is based on the <a href="http://www.ipcc.ch/pdf/unfccc/cop19/3_gregory13sbsta.pdf">results of modelling sea level rise</a>, as reported in the Intergovernmental Panel on Climate Change's <a href="http://www.climatechange2013.org/">Climate Change 2013 Report</a>.</p>
											
											<p>The optimistic estimate is the low end of rise, as predicted by IPCC's RCP2.6 model, of sea level rising by 28cm by 2100. The pessimistic estimate is the high end of the RCP8.5 model.</p>
											<p>See more at: http://www.realclimate.org/index.php/archives/2013/10/sea-level-in-the-5th-ipcc-report/#sthash.ltcqZBm9.dpuf</p>
											
											<h4>1000 years</h4>
											<p>Our estimations up to 2000 years in the future are based on <a href="http://www.pnas.org/content/early/2013/07/10/1219414110">Levermann et al.'s 2013 paper in PNAS</a>, which predicts that 1°C of global warming would result in a global sea level rise of 2.3m within 2000 years, with 2°C of warming leading to 4.8m within 2000 years.</p>
											
											<p>This 2°C of temperature change over the next 2000 years is </p>
										
											<p>The pessimistic view of the temperature trend could see 4°C of warming over the next 2000 years.</p>
											<p><img src="theme/images/WGI_AR5_Fig13-8.jpg" alt="" /></p>
											<p class="reference">Church, J.A., P.U. Clark, A. Cazenave, J.M. Gregory, S. Jevrejeva, A. Levermann, M.A. Merrifield, G.A. Milne, R.S. Nerem, P.D. Nunn, A.J. Payne, W.T. Pfeffer, D. Stammer and A.S. Unnikrishnan, 2013: Sea Level Change. In: Climate Change 2013: The Physical Science Basis. Contribution of Working Group I to the Fifth Assessment Report of the Intergovernmental Panel on Climate Change [Stocker, T.F., D. Qin, G.-K. Plattner, M. Tignor, S.K. Allen, J. Boschung, A. Nauels, Y. Xia, V. Bex and P.M. Midgley (eds.)]. Cambridge University Press, Cambridge, United Kingdom and New York, NY, USA.</p>
											
											<h4>The Numbers</h4>
											
											<table>
												<thead>
													<tr>
														<th>Time from now</th>
														<th>Optimistic estimate (low)</th>
														<th>Pessimistic estimate (high)</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th>10 years</th>
														<td>+6cm</td>
														<td>+15cm</td>
													</tr>
													<tr>
														<th>100 years</th>
														<td>+28cm</td>
														<td>+98cm</td>
													</tr>
													<tr>
														<th>1,000 years</th>
														<td>+230cm</td>
														<td>+480cm</td>
													</tr>
												</tbody>
											</table>
										</li>
										<li>
											<p>Global sea-level rise in cm by the year 2100 as projected by the IPCC AR5. The values are relative to the mean over 1986-2005, so subtract about a centimetre to get numbers relative to the year 2000.</p>
										</li>
										<li>
											<p>The actual amount of sea level rise is different around the world. We assume that the rise for entire of UK is as predicted by IPCC for global trend. A fair assumption, as about 70% of the coastlines worldwide are projected to experience sea level change within 20% of the global mean sea level change</p>
										</li>
											<li>
												<p>Determining the effect of sea level rise on changes to UK coastline is complex, requiring more sophisticated modelling of terrain than we are going to attempt here. For context, using this method the current lowest point in the UK (Holme Fen, Huntingdonshire) would currently require a boat, being 3m below sea level.</p>
											</li>
									</ol>
								</li>
							</ul>
						</section>
						<section id="facts" class="text">
							<h3>'fun' facts:</h3>
							
							<p>You might find it surprising that the largest contribution to sea level rise isn't melting ice caps, but thermal expansion of existing sea water.</p>
							
							<p>The 'optimistic' sea level rise used in this tool are the low end, with a best estimate of 44 cm rise by 2100. This model assumes a currently unrealistic scenario where we are able to drastically reduce emissions in a few years from now, with the world reaching zero emissions by 2070. The model also assumes that, following reaching 0 net emissions, that we succeed in removal of carbon dioxide from the atmosphere. Even so, the expected sea-level rise will be almost three times as large as that experienced over the 20th Century (17 cm).</p>
						</section>
						<section id="about">
							<h2>about</h2>
							
							<p>This tool was made as part of the <a href="http://bathhacked.bathnes.gov.uk">March 2014 Bath:Hacked</a> weekend by a team from <a href="http://www.theagencyonline.co.uk/">The Agency Integrated Ad Agency, Bath</a></p>
							<p>The GitHub repository for this project is <a href="https://github.com/TheAgencyLtd/HouseBoat">here</a></p>
							<p>This tool uses the <a href="https://developers.google.com/maps/documentation/javascript/geocoding">Google Maps API</a>, and its sea level change trends are based on <a href="http://www.climatechange2013.org/">Intergovernmental Panel on Climate Change's Climate Change 2013 Report</a> and <a href="http://www.pnas.org/content/early/2013/07/10/1219414110.full.pdf">Levermann et al.'s 2013 paper in PNAS [PDF]</a>.</p>
						</section>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>