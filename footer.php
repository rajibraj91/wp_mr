
	<?php
		$option = get_option('my_framework');
	?>
	
	<!-- ==========================  Footer Section Start ================== -->
	<footer class="footer-section">
		<div class="container">
			<div class="row">
				<p><?php echo $option['copyright']?></p>
				<div class="social social3">
					<ul>
						<?php 
							foreach($option['social_lists'] as $social_list):
						?>  
							<li><a href="<?php echo $social_list['site_link']?>"><i class="<?php echo $social_list['icon_name']?>"></i></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div id="back-to-top" class="scroll-top back-to-top">
					<i class="fa fa-angle-up"></i>
				</div>
			</div>
		</div>
	</footer>




	<!-- Google Map -->
	<script type="text/javascript" src="<?php echo $option['google_map']?>"></script>

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