<div class="footer-agile">
	<div class="container">
		<div class="col-md-5 footer-main1">
			<a class="hvr-overline-from-center scroll footer-btn" href="#contact">Написать</a>
		</div>
		<div class="col-md-7 footer-main2">
			<h4>Остались вопросы?</h4>
			<p>Оставьте свой номер телефона и наши менеджеры свяжутся с вами для уточнения любых нюансов</p>
			<!-- <ul>
				<li><a href="#home" class="scroll">Home</a></li>
				<li><a href="#about" class="scroll">About Us</a></li>
				<li><a href="#team" class="scroll">Our Team</a></li>
				<li><a href="#blogs" class="scroll">Blogs</a></li>
				<li><a href="#properties" class="scroll">Properties</a></li>
				<li><a href="#contact" class="scroll">contact Us</a></li>
			</ul> -->
		</div>
		 <div class="clearfix"> </div>
		<div class="copyright-agile">
			<p>&copy; <a href="https://barsukov.by" >Агентство интернет-маркетинга</a> «Барсуков Медиа»</p>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
<!-- //footer -->

<!-- js-scripts -->

			<!-- js -->
				<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
				<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
				<script src="magnific-popup/dist/jquery.magnific-popup.js"></script>
				<script src="slick/slick.js"></script>
				<script src="js/script.js"></script>
			<!-- //js -->



			<!-- FlexSlider -->
						<script defer src="js/jquery.flexslider.js"></script>
						<script type="text/javascript">

						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});

					  </script>
			<!-- End-slider-script -->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
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

							 <script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
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
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
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
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>


 <!-- Popup-Box-JavaScript -->
		<script src="js/modernizr.custom.97074.js"></script>
		<script src="js/jquery.chocolat.js"></script>

		<script type="text/javascript">
			$(function() {
				$('.gallery-item a').Chocolat();
			});
		</script>
		<!-- //Popup-Box-JavaScript -->
	<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
		<script type="text/javascript">
			$(document).ready(function() {
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
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
			};
		*/
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
<!-- //smooth scrolling -->
<!-- slick js  -->

<!-- end slick js  -->
	<!-- //js-scripts -->
</body>
</html>
