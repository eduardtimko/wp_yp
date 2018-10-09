<div class="footer-agile">
	<div class="container">
		<div class="col-md-5 footer-main1">
			<a class="hvr-overline-from-center scroll footer-btn" href="#contact">Написать</a>
		</div>
		<div class="col-md-7 footer-main2">
			<?php dynamic_sidebar( 'footer_info_text' ); ?>
		</div>
		 <div class="clearfix"> </div>
		<div class="copyright-agile">
			<?php dynamic_sidebar( 'footer_info_copi' ); ?>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
<!-- //footer -->

<!-- js-scripts -->

			<!-- FlexSlider -->
						<script type="text/javascript">

						jQuery(window).load(function(){
						  jQuery('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							  jQuery('body').removeClass('loading');
							}
						  });
						});

					  </script>
			<!-- End-slider-script -->

<!-- start-smoth-scrolling -->
<script type="text/javascript">

	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- start-smoth-scrolling -->

<!--responsive tabs -->

<script>
jQuery(document).ready(function () {
jQuery('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});

});
</script>
<!-- // responsive tabs -->

 <script type="text/javascript">
							jQuery(window).load(function() {
								jQuery("#flexiselDemo1").flexisel({
									visibleItems:3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: {
										portrait: {
											changePoint:480,
											visibleItems: 1
										},
										landscape: {
											changePoint:640,
											visibleItems:2
										},
										tablet: {
											changePoint:768,
											visibleItems: 3
										}
									}
								});

							});

					</script>


 <!-- Popup-Box-JavaScript -->


		<script type="text/javascript">
			jQuery(function() {
				jQuery('.gallery-item a').Chocolat();
			});
		</script>
		<!-- //Popup-Box-JavaScript -->
	<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
		<script type="text/javascript">
			jQuery(document).ready(function() {
				var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 100,
					easingType: 'linear'
				};
			});
		</script>
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
		<!-- //Slide-To-Top JavaScript -->


	<!-- smooth scrolling -->
	<script type="text/javascript">
		jQuery(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
			};
		*/
		jQuery().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
<!-- //smooth scrolling -->
<!-- slick js  -->

<!-- end slick js  -->
	<!-- //js-scripts -->
</body>
</html>
