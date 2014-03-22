<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="theme/images/favicon.ico">
		
		<title>Cover Template for Bootstrap</title>
		
		<!-- Bootstrap core CSS -->
		<link href="theme/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Custom styles for this template -->
		<link href="theme/css/cover.css" rel="stylesheet">
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
							<h3 class="masthead-brand">house/boat</h3>
							
							<ul class="nav masthead-nav">
								<li class="active"><a href="#query">House or Boat?</a></li>
								<li><a href="#climate-change">Climate Change</a></li>
								<li><a href="#about">About</a></li>
							</ul>
						</div>
					</div>
					
					<div class="inner cover">
						<section>
							<h1 id="query" class="cover-heading">Do you need a <em>House</em> or a <em>Boat</em>?.</h1>
							
							<p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
							
							<form action="" method="post">
							    <fieldset>
							    	<label for="postcode">I live</label><input type="text" id="postcode" name="postcode" placeholder="{enter postcode}" />
							    </fieldset>
							    
							    <fieldset>
							    	<label for="outlook">I am ���</label>
							    	
							    	<select id="outlook" name="outlook">
							    		<option value="optimist">an optimist</option>
							    		<option value="pessimist" selected="selected">a pessimist</option>
							    		<option value="denial">a climate change denier</option>
							    	</select>
							    	
							    	<label for="years">I want to live here for</label>
							    	
							    	<select id="years" name="years">
							    		<option value="1">1 year</option>
							    		<option value="10">10 years</option>
							    		<option value="100" selected="selected">100 years</option>
							    		<option value="1000">1000 years</option>
							    	</select>
							    </fieldset>
							</form>
							<p id="submit-btn" class="lead"><a href="#climate-change" class="btn btn-lg btn-default">Learn more</a></p>
						</section>
						<section>
							<h2 id="climate-change">Factors considered in your future housing solution</h2>
							
							<ol>
								<li>
									<h3>flooding</h3>
									<p>short-term weather conditions can��� We make </p>
								</li>
								<li>
									<h3>sea level rise</h3>
									<p>longer-term change to sea level, leading to potential of permanent dampness at your place of residence</p>
									
									<p>Sea level rise is complicated, so this tool makes a few assumptions.</p>
									<ol>
										<li>
											<p>Future sea level rise is based on estimations, since it's not possible (yet) to know the future. Our estimation, up to 2100, is based on the <a href="http://www.ipcc.ch/pdf/unfccc/cop19/3_gregory13sbsta.pdf">results of modelling sea level rise</a>, as reported in the Intergovernmental Panel on Climate Change's <a href="http://www.climatechange2013.org/">Climate Change 2013 Report</a>.</p>
										</li>
										<li>
											<p>Our estimations up to 1000 years in the future are based on <a href="http://www.pnas.org/content/early/2013/07/10/1219414110">Levermann et al.'s 2013 paper in PNAS</a>, predicts that 1��C of warming would result in a global sea level rise of 2.3m within 2000 years, with 2��C of warming 2��C leading to 4.8 m within 2000 years.</p>
										
											<p>of warming over the next 2000 years is an often used optimistic goal. The pessimistic view of the temperature trend could see 4��C of warming over the next 2000 years.</p>
											
											
											Global sea-level rise in cm by the year 2100 as projected by the IPCC AR5. The values are relative to the mean over 1986-2005, so subtract about a centimetre to get numbers relative to the year 2000.
											
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
											
											10 years
											
											
											100 years
											Most optimistic estimate is low end of IPCC's RCP2.6 model. Most pessimistic is high end of RCP8.5 model.
											See more at: http://www.realclimate.org/index.php/archives/2013/10/sea-level-in-the-5th-ipcc-report/#sthash.ltcqZBm9.dpuf
											
											
											1000 years:
											
											Most optimistic estimate, from Levermann et al, is temperature change of 1��C over next century, leading to +230cm change. Most pessimistic is temperature change of 2��C over next century, leading to +480cm change.
											
											</li>
											
											<li>The actual amount of sea level rise is different around the world. We assume that the rise for entire of UK is as predicted by IPCC for global trend. A fair assumption, as about 70% of the coastlines worldwide are projected to experience sea level change within 20% of the global mean sea level change</li>
											<li>determining the effect of sea level rise on changes to UK coastline is complex, requiring more sophisticated modelling of terrain than we are going to attempt here. For context, using this method the current lowest point in the UK (Holme Fen, Huntingdonshire) would currently require a boat, being 3m below sea level.</li>
											
											
											</li>
									</ol>
									
									<p>Fact:
											
											the largest contribution to sea level rise isn't melting ice caps, but thermal expansion of existing sea water.
											
											On the low end, the range for the RCP2.6 scenario is 28-61 cm rise by 2100, with a best estimate of 44 cm. Now that is very remarkable, given that this is a scenario with drastic emissions reductions starting in a few years from now, with the world reaching zero emissions by 2070 and after that succeeding in active carbon dioxide removal from the atmosphere. Even so, the expected sea-level rise will be almost three times as large as that experienced over the 20th Century (17 cm). - See more at: http://www.realclimate.org/index.php/archives/2013/10/sea-level-in-the-5th-ipcc-report/#sthash.ltcqZBm9.dpuf
											</p>
						</section>
						<section>
							<h2 id="about">about</h2>
						</section>
					</div>
					<div class="mastfoot">
						<div class="inner">
							<p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="theme/bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="theme/js/gm.js"></script>
    	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-AbJabQ7T1f0vcfN3tQibeZ_BkXzf1Tg&sensor=true"></script>
		<script type="text/javascript">

			function init(map) {
				var mapOptions = {
					center: new google.maps.LatLng(-34.397, 150.644),
					zoom: 8
		    	};
				if (map != null) {
					map = new google.maps.Map(document.getElementById(map), mapOptions);
				} 
		    	geocoder = new google.maps.Geocoder();
				google.maps.event.addDomListener(document.getElementById('submit-btn'), 'click', getLoc);
				elevator = new google.maps.ElevationService();
				setVars(map, geocoder, elevator);
			}

			function geoResultCallback(geoResult) {
				if (geoResult != null) {
	    			// Get lat/long
	            	lat = geoResult.geometry.location.lat();
	            	lng = geoResult.geometry.location.lng();
	            	alert("Latitude: " + lat + " Longitude: " + lng);
	            	getElevation(geoResult.geometry.location);
	            }
			}

			function eleResultCallback(eleResult) {
				if (eleResult != null) {
	    			// Get elevation
	            	alert("Elevation: " + eleResult);
	            }
			}

			function getLoc() {
    			var pc = $("#postcode").val();
    			if (pc.trim() != "" && pc.trim() != null) {
    				geocodePostcode(pc);
        		} else {
					alert("Please enter a postcode");
    			}
    		}
		
			google.maps.event.addDomListener(window, 'load', init);
    		init();
    	</script>
	</body>
</html>