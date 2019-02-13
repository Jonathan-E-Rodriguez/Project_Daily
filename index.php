<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>
			Daily
		</title>
		<!-- Leaflet -->
		<link rel="stylesheet" href="leaflet/leaflet.css" />
		<script src="leaflet/leaflet.js" async></script>

		
        <!--Site Style CSS-->
        <link rel="stylesheet" href="assets/demo.css">
        <link rel="stylesheet" href="assets/header-search.css">
        <link rel="stylesheet" href="stylemain.css">
        <link rel="stylesheet" href="stylebar.css" />
        
        <!--Jquery and Google -->
        	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABHRp5rvc6ZuiTT_pVlIkkwGP2AljcZ7k&sensor=false"></script>
			<script src='https://unpkg.com/leaflet.gridlayer.googlemutant@latest/Leaflet.GoogleMutant.js' ></script>

		   	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript" ></script>
		
        <!--Geocoding Google-->
        <script src="leaflet-control-osm-geocoder-master/Control.OSMGeocoder.js" ></script>
        <script src="leaflet-control-osm-geocoder-master/Control.OSMGeocoder.css" ></script>
		<!---Bootstrap ---->
		<link rel="stylesheet" href="css/bootstrap.css" >
		
		<script src="../Integradora/popper.min.js"></script>
		<script src="../Integradora/jquery-3.3.1.min.js"></script>
		<script src="../Integradora/js/bootstrap.js"></script>
		<script src="../Integradora/css/bootstrap.css"></script>
		
	</head>
	<body>
	<div class="container">
    <header class="header-search">
	<div class="header-limiter">
		<h1><a href="indexmain.php">:Dai<span>ly</span></a></h1>
         <div class="b-loc">
		      Search...
            <input type="text" placeholder="Search" name="loc"><br>
    </div>
        </div>
        </header>
		
		<table class="tab1">
		<tr>
        <td class="bar12">
        <button class="linkHo" onclick="go(loc)">Home</button>
        <button class="linkTr" onclick="go(loc2)">Trending</button>
        <button class="linkCh" onclick="go(loc3)">Chat</button>	
        </td>
        </tr>
			
     	<tr>
			
			<!--------SideBar------------->
		<td>
        	<div class="chatbox">       
			<iframe id="left-w" name="left-w" src="home.php"></iframe>    
			</div>
		</td>
		<!----------------------------->
		
		<td>
			
            <div id="map" class="map"></div>
        		</td>
			</tr>
		</table>
		
			<script language="javascript">
	      
            //Code Map
            var map = L.map('map').setView([35.20607492223198, -80.86074829101562], 13);

			var roadMutant = L.gridLayer.googleMutant({
				maxZoom: 24,
				type:'roadmap'
			}).addTo(map);
			
			//Markers
				//Circle1
			var circle1 = L.circle([35.20607492223198, -80.86074829101562], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 500
			}).addTo(map);
				
			circle1.bindPopup("<form method='post' action='chat.php' target='left-w'><input type='hidden' name='trgchat' value='messages'><input type='submit'>Enter Chat</button></form>");
				
			function onMapClick(e) {circle1.setLatLng(e.latlng)
			.openOn(map);
			}
			
				
			//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
				
			//Other Functions
			//Test Location
			//map.on('click', function (e) {coords= e.latlng.lat + ", " + e.latlng.lng;alert(coords);});
			//Map Boundaries
			//var lx, rx, uy, dy;
			
			
			//Start POSTs
			postToIframe({data_post:'null'}, 'home.php', 'left-w')	;
			map.on('mouseup', function (e){
				//Testing
				//alert(map.getBounds());
				//uy = map.getBounds().getNorth();
				//dy = map.getBounds().getSouth();
				//lx = map.getBounds().getWest();
				//rx = map.getBounds().getEast();
				//console.log(uy + " " + dy);
				//console.log(lx + " " + rx);
			
				if(map.getBounds().contains(circle1.getBounds())){
					console.log("Inside");
					postToIframe({data_post:'circle1'}, 'home.php', 'left-w');
				}
				else{
					postToIframe({data_post:'null'}, 'home.php', 'left-w');
				}
			});
			
				
			//Function for Marker POST to Iframe
			function postToIframe(data,url,target){
			$('body').append('<form action="'+url+'" method="post" target="'+target+'" id="postToIframe"></form>');
			$.each(data,function(n,v){
				$('#postToIframe').append('<input type="hidden" name="'+n+'" value="'+v+'" />');
			});
			$('#postToIframe').submit().remove();
			}
			
			
			
		</script>
        </div>
	</body>
</html>
