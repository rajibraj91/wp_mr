
	<!-- ==========================  Footer Section Start ================== -->
	<footer class="footer-section">
		<div class="container">
			<div class="row">
				<p>&copy; 2017.All rights<a href="#">CodexCoder</a></p>
				<div class="social social3">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
				<div id="back-to-top" class="scroll-top back-to-top">
					<i class="fa fa-angle-up"></i>
				</div>
			</div>
		</div>
	</footer>




	<!-- Google Map -->
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDkA3g92_4G-b4SpzUPA41QCL_r9naN1mM"></script>

	<script type="text/javascript">

		//Home Page map
		var styleArray = [
			{
				"featureType": "water",
				"elementType": "geometry.fill",
				"stylers": [
					{
						"color": "#65ac4c"
					}
				]
			}
		];

		var mapOptions = {
			center: new google.maps.LatLng(55.864237, -4.251806),
			zoom: 09,
			styles: styleArray,
			scrollwheel: false,
			backgroundColor: 'transparent',
			mapTypeControl: false,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById("home-map"),
			mapOptions);
		var myLatlng = new google.maps.LatLng(55.864237, -4.251806);
		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			icon: 'assets/images/location.png'
		});

	</script>


    <?php wp_footer(); ?>
</body>
</html>