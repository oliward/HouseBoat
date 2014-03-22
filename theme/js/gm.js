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
				geoResultCallback(result);
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