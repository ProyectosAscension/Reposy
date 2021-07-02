
<!DOCTYPE HTML>
<html>
<head>
<title>Explora Tlaxiaco | Inicio</title>


<!--SCRIPT AR's-->
	<script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
<!--end slider -->

</head>
<body>
	
			   <a-scene embedded arjs>
					<a-entity scale=".2 .2 .2">
						<a-entity gltf-model="fosil.glb" scale=".600 .600 .600" crossOrigin="anonymous">
							<a-animation attribute="rotation" begin="click" repeat="indefinite" to="0 360 0"></a-animation>
							<a-event name="mouseenter" scale="4 6 1"></a-event>
						</a-entity>
					</a-entity>
					<!--<a-box width="1"
					       height="1"
						   depth="1"
					       position="0 0 0"
						   rotation="45 45 45"
						   scale="1 1.25 1"
						   color="#EF2D5E">
							<a-animation attribute="rotation" begin="click" repeat="indefinite" to="0 360 0"></a-animation>
							<a-event name="mouseenter" scale="4 6 1"></a-event>
					</a-box>-->
					<a-camera position="-2 0 15">
						<a-cursor color="#FF0000"/>
					</a-camera>
					<a-marker-camera preset='hiro'></a-marker-camera>
				</a-scene>


</body>	
</html>