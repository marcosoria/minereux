<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">

$(function () {
	var infowindow;
    
    var mapCenter = new google.maps.LatLng(17.957917, -102.1907245);

    // options for the map
    var mapOptions = {
        center: mapCenter,
        zoom: 1,
        mapTypeId: google.maps.MapTypeId.HYBRID,
        streetViewControl: true
    };
    // create a new map object to be shown in the map_canvas1 div elements and with the options that were set
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
	
	PlotMarker(1, -30.0736415, -71.379146, '', 'image.jpg', 'Totoralillo, Chile');
	PlotMarker(2, -29.9642015, -71.360706, '', 'image.jpg', 'Guayacan, Chile');
	PlotMarker(3, -17.6518995, -71.3439596, '', 'image.jpg', 'Ilo, Perú');
	PlotMarker(4, -17.0027033, -72.0999638, '', 'image.jpg', 'Matarani, Perú');
	PlotMarker(5, -13.8331175, -75.9321355, '', 'image.jpg', 'Pisco, Perú');
	PlotMarker(6, 19.0777207, -104.3377092, '', 'image.jpg', 'Manzanillo, México');
	PlotMarker(7, 17.957917, -102.1907245, '', 'image.jpg', 'Lazaro Cárdenas, México');
	PlotMarker(8, 41.4319504, -88.2262972, '', 'image.jpg', 'Wenona, EE. UU.');
	PlotMarker(9, 31.2243489, 121.4767528, '', 'image.jpg', 'Shanghái, China');
	PlotMarker(10, 28.7654208, -96.5022805, '', 'image.jpg', 'Port Lavaca, Texas');
	
	function PlotMarker(id, lat, lon, description, image, title) {
		var iconBase = '/assets/images/minereux_shape.png';
		
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(lat, lon),
            map: map,
            draggable: false,
            icon: iconBase,
            animation: google.maps.Animation.DROP
        });

        var htmlInfo = '<table class="infowindow"><tr><td style="vertical-align:top"></td><td style="padding-left:10px"><h3 style="margin-top:0; font-size:14px; line-height:16px">' + title + '</h3>' + description + '<p></p></td></tr></table>';
                
        addInfoWindow(marker, htmlInfo);

    }

    function addInfoWindow(marker, message) {
        google.maps.event.addListener(marker, 'click', function() {
            if (infowindow) {
                infowindow.close();
            }
            infowindow = new google.maps.InfoWindow({
                content: message
            });
            
            infowindow.open(map, marker);
        });
    }
});
</script>
<!--==============================content================================-->
<section id="content">         
    <div class="container_12">

        <div class="wrapper">
            <div class="grid_12">
                <h3 class="bot-3">Rutas de Transporte de Mineral</h3>
            </div><!--end of wrapper-->
        </div>      	        

        <div class="wrapper">

            <div class="grid_8">
                
                <div id="map_canvas" style="width: 100%;height: 500px;">
                
                </div>

            </div>

            <div class="grid_4">
                <p>En el mapa presentado a continuación se muestra la ubicación de los puertos en los que descargamos y cargamos material. </p>
            </div>

        </div> 
      
		<div class="wrapper" style="margin-top: 12px; padding-top: 12px; border-top: 1px dashed #333;">
			<p><a href="#">Solicitar mayor informacion</a><br />
			<a href="#">Marcar como favorito</a></p>
		
		</div>
    </div>
</section>
