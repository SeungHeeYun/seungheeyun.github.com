<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Generic - Projection by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/sidebar.css" />
	</head>
	<body class="subpage">
		<?php
			include('header.php');
		?>

			<!--search menu-->
			<div id='cssmenu'>
				<?php
					include('side_menu.php');
				?>
			</div>

			<!--Map-->
			<div id="map" style="width: 80%; height: 700px; background-color: grey; float: left; margin-left: 20px;"></div>

			<?php
				include('footer.php');
			?>

			<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=180d2e430f8c74b4658a7801bb9c8ee7&libraries=services,clusterer,drawing"></script>
			<script>
				var mapContainer = document.getElementById('map'),
					mapOption = {
						center : new daum.maps.LatLng(37.2408109, 127.0820761),
						level : 4
					};

				var map = new daum.maps.Map(mapContainer, mapOption);

				if(navigator.geolocation){
					navigator.geolocation.getCurrentPosition(function(position){
						var lat = position.coords.latitude,
								lon = position.coords.longitude;

						var locPosition = new daum.maps.LatLng(lat, lon);
					});
				}
				else{
						alert("Sorry, you can not use geolocation in this browser");
				}

				function displayMarker(locPosition){
					var marker = new daum.maps.Marker({
						map : map,
						position : locPosition
					});
					map.setCenter(locPosition);
				}

				/*
				var geocoder = new daum.maps.services.Geocoder();
				geocoder.addressSearch('경기도 용인시 기흥구 덕영대로 1732', function(result, status){
					if(status === daum.maps.services.Status.OK){
						var coords = new daum.maps.LatLng(result[0].y, result[0].x);

						var marker = new daum.maps.Marker({
							map : map,
							position : coords
						});

						var infoWindow = new daum.maps.InfoWindow({
							content : '<div style="width:150px;text-align:center;padding:6px 0;">경희대학교</div>'
						});
						infoWindow.open(map, marker);
						map.setCenter(coords);
					}
				});
				*/
			</script>

		<!-- Scripts -->
			<!--<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/sidebar.js"></script>
		-->
	</body>
</html>
