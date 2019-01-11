
var map = L.map( 'map', {
  center: [56.6489, 23.7198],
  minZoom: 11,
  zoom: 14
})

L.tileLayer( 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> | &copy; <a href="http://www.zrkac.lv">ZRKAC</a>',
  subdomains: ['a', 'b', 'c']
}).addTo( map )

var myURL = jQuery( 'script[src$="zrkac_leaflet.js"]' ).attr( 'src' ).replace( 'zrkac_leaflet.js', '' )

var edinatajs = L.icon({
  iconUrl: myURL + 'images/food1.png',
  iconRetinaUrl: myURL + 'images/food1.png',
  iconSize: [35, 46],
  iconAnchor: [17,46],
  popupAnchor: [0, -35]
})


for ( var i=0; i < markers.length; ++i )
{

		 L.marker( [markers[i].uz_lat, markers[i].uz_lng], {icon: edinatajs} )
		  .bindPopup('<span style="font-size:9px;cursor:pointer" onclick=\"openNav(this.id)\" id=\"' + markers[i].id_uznemums + '\">' + markers[i].id_uznemums + '.</span> <span style="font-size:18px;"><strong>' + markers[i].uznosaukums  + '</strong></span><br>' + markers[i].uzadrese + '<br><span style="font-weight:bolder;cursor:pointer;" onclick=\"openNav(this.id)\" id=\"' + markers[i].id_uznemums + '\"> Vairāk informācijas uzņēmuma profilā</span>')
		  .addTo( map );

}
