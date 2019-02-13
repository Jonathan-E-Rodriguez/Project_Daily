php
$conn = mysqli_connect('localhost','root','','inventory');
//$db = mysqli_select_db('inventory');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>
			Kyobo
		</title>
		<!-- Leaflet -->
		<link rel="stylesheet" href="lib/leaflet/leaflet.css" />
		<link rel="stylesheet" href="lib/leaflet/leaflet.label.css" />
        
        <!--Style CSS-->
        <link rel="stylesheet" href="assets/demo.css">
        <link rel="stylesheet" href="assets/header-search.css">
        <link rel="stylesheet" href="style.css">
        
        <!--Leaflet -->
		<script src="lib/leaflet/leaflet.js"></script>
		<script src="lib/leaflet/leaflet.label.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyABHRp5rvc6ZuiTT_pVlIkkwGP2AljcZ7k
&sensor=false"></script>
		<script src="lib/leaflet/Google.js"></script>
      
	</head>
	<body>
    <div class="sidebar"> 
    
    <header class="header-search">
	<div class="header-limiter">
		<h1><a href="indexmain.php">Kyo<span>bo</span></a></h1>
    </div>   
    <div class="search_bar">
		<form name="login">
            Cambiar Locacion
            <input type="text" placeholder="Locacion" name="loc"><br>
            ------------------------
            <input type="button" onclick="" value="Buscar">
            </form>
    </div>
        </header>
        <table>
        <tr>
            <div id="map"></div>
        </tr>
        <td class="buscar">
        Opciones
        </td>
       
        </table>
        <hr>
        <table>
            
            <td class="resultados">
        Chat
        </td>
        <td></td>
        </table>
        
        <div class="chatbox">
***************************************
<div>
            <iframe src="proto.php"></iframe>
            <iframe src="messages.php"></iframe>
            <iframe src="new_message.php"></iframe>
*************************************** 
            </div> 
        </div>
        
		<script language="javascript">
            
            var map = L.map('map').setView([25.8697638090296, -97.50235636775726], 12);
            
        
			function resetHighlight(e){
				countriesLayer.resetStyle(e.target);
			}
			
			function zoomToFeature(e){
				map.fitBounds(e.target.getBounds());
			}
			         
			var markers = new Array();
			function countriesOnEachFeature(feature, layer){
				markers.push(
					L.circleMarker(
						layer.getBounds().getCenter(),
						{
							radius : 0.0,
							opacity : 0,
							fillOpacity : 0
						}
					)
				);
				
				markers[markersCount - 1].addTo(map);
				markers[markersCount - 1].hideLabel();
				
				layer.on(
					{
						mouseover : highlightFeature,
						mouseout : resetHighlight,
						click : zoomToFeature
					}
				);
			}
			
			var googleRoadmapLayer = new L.Google('ROADMAP');
			map.addLayer(googleRoadmapLayer);

		</script>
	</body>
</html>
