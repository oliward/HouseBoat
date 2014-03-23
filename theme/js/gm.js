var geocoder;
var map;
var elevator;
var loc;

function setVars(m, g, e) {
	map = m;
	gecoder = g;
	elevator = e;
}

function geocodePostcode(pc) {
	var postcode = pc;
	var result;
	geocoder.geocode({ 'address': postcode },
		function(results, status) {
			if (results.length > 0) {
				if (results.length == 1) {
					result = results[0];
				} else {
					// Just use the first
					result = results[0];
				}
				
				if (result.partial_match != true) {
					geoResultCallback(result);
				} else {
					alert("Sorry, we couldn't find that postcode");
				}
			}
		});
}

function getElevation(geoRes) {
	var locations = [];
	locations.push(geoRes);
	var positionalRequest = {'locations': locations};
	elevator.getElevationForLocations(positionalRequest, 
		function(results, status) {
			if (status == google.maps.ElevationStatus.OK) {
				// Retrieve the first result
				if (results[0] != null) {
					//output_f.push((results[0].elevation*3.2808399).toFixed(3));
					//output_m.push(results[0].elevation.toFixed(3));
					eleResultCallback(results[0].elevation);
				}
			} 
		});
}

function getSinkOrSwim(elevation, outlook, years) {
	var futureElevation = 0;
	if (outlook != "denial") {
		switch (years) {
		case 1:
			if (outlook == "optimist") {
				futureElevation = (elevation - 0.006);
			} else {
				futureElevation = (elevation - 0.015);
			}
			break;
		case 10:
			if (outlook == "optimist") {
				futureElevation = (elevation - 0.06);
			} else {
				futureElevation = (elevation - 0.15);
			}
			break;
		case 100:
			if (outlook == "optimist") {
				futureElevation = (elevation - 0.28);
			} else {
				futureElevation = (elevation - 0.98);
			}
			break;
		case 1000:
			if (outlook == "optimist") {
				futureElevation = (elevation - 0.5);
			} else {
				futureElevation = (elevation - 6.05);
			}
			break;
		default:
			if (outlook == "optimist") {
				futureElevation = (elevation - 0.06);
			} else {
				futureElevation = (elevation - 0.15);
			}
			break;
		}
		
		//alert("Current elevation: " + elevation + " Future elevation: " + futureElevation);
		if (futureElevation <= 0) {
			// Sink
			showResult("sink", years, elevation, futureElevation);
		} else {
			// Swim
			showResult("swim", years, elevation, futureElevation);
		}
	} else {
		// Denial 
		showResult("deny", years, elevation, elevation);
	}
	
}