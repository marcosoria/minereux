<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">
$(function () {
	var infowindow;
    
    var mapCenter = new google.maps.LatLng(29.48461, -98.5310865);

    // options for the map
    var mapOptions = {
        center: mapCenter,
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.MAP,
        streetViewControl: true
    };
    // create a new map object to be shown in the map_canvas1 div elements and with the options that were set
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
	
	PlotMarker(1, 29.48461, -98.5310865, '', 'image.jpg', 'US Office');
	
	
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
<link rel="stylesheet" href="/assets/css/form.css" />
<section id="content">         
    <div class="container_12">
        <div class="wrapper">
            <div class="grid_12">
            <h3 class="bot-3">Contact</h3>
            </div>
            <div class="grid_4 suffix_1">
                            
                            <p>
                            Please fill out this form with a short description of your request. We will get in touch with you shortly.</p>
                            <form id="form">
                                <div class="success_wrapper">
                                    <div class="success">Form sent succesfully!<br>
                                     </div></div>
                                <fieldset>
                                    <label class="name">
                                        <input type="text" value="" placeholder="Name:">
                                        <br class="clear">
                                        <span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label> <label class="phone">
                                        <input type="tel" value="" placeholder="Phone:">
                                        <br class="clear">
                                        <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                                    <label class="email">
                                        <input type="text" value="" placeholder="Email:">
                                        <br class="clear">
                                        <span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>
            
                                    <label class="message">
                                        <textarea name="message" placeholder="Message:"></textarea>
                                        <br class="clear">
                                        <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
                                    <div class="clear"></div>
                                    <div class="btns"><a class="button" data-type="reset" href="#">Clear</a><a class="button" data-type="submit" href="#">Send</a>
            
                                        <div class="clear"></div>
                                    </div></fieldset></form>
                        </div>
                        
            <div class="grid_7">
                <div id="map_canvas" style="width: 100%; height: 500px;">
                
                </div>
                
                <div class="grid_7 omega">
                    <div class="title1">
                    	City View 10999 W IH 10 Ste. 305<br /> 
                    	San Antonio TX <br />
                    	78230 USA <br />
                    	Tel. (210) 558 0722
                    	
                        
                         
                    </div>

                </div>
                
                <div class="clear"></div>
            </div>

            

        </div><!--the end of wrapper-->

    </div>
</section>