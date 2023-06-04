var map;
function initMap() {
	map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: 40.182956, lng: 44.520329},
		zoom: 16,
	});
	marker = new google.maps.Marker({
	    position: {lat: 40.182956, lng: 44.520329},
	    map: map,
	    title: 'BooM-credit',
	    icon: 'img/map_icon12.png'
	});
}