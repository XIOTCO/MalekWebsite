  $(window).on('load',function () {  
	
	//Open street  Map
	var mapcanvas = document.getElementById("map-canvas");
	if(mapcanvas){
		//Open street  Map
		var coord = [25.2178, 55.2819,]; // <--- coordinates here

		var map = L.map('map-canvas', { scrollWheelZoom:false}).setView(coord, 19);

		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 22,
		attribution: '&copy; <a href="https://maps.app.goo.gl/rQKGVyRySHS7pC2z5">Emirates Towers</a>'
		}).addTo(map);

		// custom icon
		var customIcon = L.icon({
		iconUrl: 'img/mapmarker.png',
		iconSize:     [64, 64], // size of the icon
		iconAnchor:   [32, 63] // point of the icon which will correspond to marker's location
		});

		// marker object, pass custom icon as option, add to map         
		var marker = L.marker(coord, {icon: customIcon}).addTo(map);
		 }
});