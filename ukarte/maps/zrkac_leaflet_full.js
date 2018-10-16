
var map = L.map( 'map', {
  center: [56.6489, 23.7198],
  minZoom: 12,
  zoom: 15
})

L.tileLayer( 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> | &copy; <a href="http://www.zrkac.lv">ZRKAC</a>',
  subdomains: ['a', 'b', 'c']
}).addTo( map )


var myURL = jQuery( 'script[src$="zrkac_leaflet_full.js"]' ).attr( 'src' ).replace( 'zrkac_leaflet_full.js', '' )

var edinatajs = L.icon({
  iconUrl: myURL + 'images/food1.png',
  iconRetinaUrl: myURL + 'images/food1.png',
  iconSize: [35, 46],
  iconAnchor: [17,46],
  popupAnchor: [0, -35]
})


for ( var i=0; i < markers.length; ++i )
{
	
		 L.marker( [markers[i].lat, markers[i].lng], {icon: edinatajs} )
		  .bindPopup('Kafejnīca <a href="' + markers[i].url + '" target="_blank">"' + markers[i].name + '"</a>' )
		  .addTo( map );
	
}