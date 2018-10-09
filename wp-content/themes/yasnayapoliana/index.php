<?php
/**
 * Template name: Главная страница
 */
get_header();

 $setings_slider_top = get_field('setings_slider_top');
 $setings_block_about_us = get_field('setings_block_about_us');
 $add_video = get_field('add_video');
 $add_adbantet = get_field('add_adbantet');
 $grup_setings_home = get_field('grup_setings_home');
 $gpoup_setings_block_geleri = get_field('gpoup_setings_block_geleri');
 $proup_setings_dogobor = get_field('proup_setings_dogobor');
?>

<!-- banner-text -->
			<div style="background: url(<?php echo $setings_slider_top['Img_fon_slider'] ?>) no-repeat center 0px; background-size: cover ;" class="banner-text">
				<div class="container">
					<div class="flexslider">
						<ul class="slides">
							<?php foreach ($setings_slider_top['add_slider_top'] as $key => $value) { ?>
							<li>
								<div class="banner-w3lstext">
									<h3><?php echo $value['title_slider_top']; ?></h3>
									<p><?php echo $value['text_slider_top']; ?></p>
								</div>
							</li>
						<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<!-- //banner-text -->
		<!-- //banner -->


<!-- about us -->
<div class="about-w3layouts" id="about">
	<div class="container">
		<h5 class="title-w3"><?php echo $setings_block_about_us['title_about_us'];  ?></h5>
		<div class="col-md-12 left-agile">
			<div id="horizontalTab">
					<ul class="resp-tabs-list">
						<li><?php echo $setings_block_about_us['setings_tabs1']['name_taba1'] ?></li>
						<li><?php echo $setings_block_about_us['setings_tabs2']['name_taba2'] ?></li>
						<li><?php echo $setings_block_about_us['setings_tabs3']['name_taba3'] ?></li>
					</ul>
					<div class="resp-tabs-container">
						<div class="tab1">
							<div class="col-lg-6 col-md-12 col-xs-12">
								<h4 class="sub-w3l"><?php echo $setings_block_about_us['setings_tabs1']['title_tabs1'] ?></h4>
								<?php echo $setings_block_about_us['setings_tabs1']['deskription_tabs1'] ?>
								<!-- <h4 class="sub-w3l">Lorem Ipsum</h4> -->
							<!-- 	<p class="subp-w3l in1">Купить коттедж в коттеджном поселке в Минском районе это лучший выбор с точки зрения соотношения цены/качество. </p> -->
							</div >
							<div class="col-lg-6 col-md-12 col-xs-12 about_map">
									<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;width:100%; margin-bottom: 20px;'><div id='gmap_canvas' style='height:338px;width:515px;'></div><div><small><a href="https://embedgooglemaps.com/en/">https://embedgooglemaps.com/en/</a></small></div><div><small><a href="https://mrpromokod.ru/ozon-ru/">https://mrpromokod.ru/ozon-ru/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(55.755826,37.617299900000035),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(55.755826,37.617299900000035)});infowindow = new google.maps.InfoWindow({content:'<strong>Название</strong><br>Moscow, Russia<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
							</div>
						</div>
						<div class="tab2">
							<div class="col-lg-6 col-md-12 col-xs-12">
								<h4 class="sub-w3l"> <?php echo $setings_block_about_us['setings_tabs2']['title_tabs2'] ?></h4>
								<?php echo $setings_block_about_us['setings_tabs2']['deskription_tabs2'] ?>
							</div >
							<div class="col-lg-6 col-md-12 col-xs-12 free_house_img" >
								<img src="<?php echo $setings_block_about_us['setings_tabs2']['img_tabs2'] ?>">
							</div>
						</div>
						<div class="tab3">
							<i class="fa fa-building-o i1" aria-hidden="true"></i>
							<h4 class="sub-w3l"><?php echo $setings_block_about_us['setings_tabs3']['title_tabs3'] ?></h4>
							<?php echo $setings_block_about_us['setings_tabs3']['deskription_tabs3'] ?>
							<!-- <i class="fa fa-envira i1" aria-hidden="true"></i>
							<h4 class="sub-w3l">Lorem Ipsum</h4>

							<p class="subp-w3l">Etiam facilisis, enim eget tempus gravida, odio lectus tempus elit, at efficitur velit nunc ac consectetur. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In non odio elit. Nunc pharetra lorem elit Nunc suscipit, sapien a elementum aliquam.</p> -->
						</div>

							<!-- <p class="subp-w3l">Etiam facilisis, enim eget tempus gravida, odio lectus tempus elit, at efficitur velit nunc ac consectetur. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In non odio elit. Nunc pharetra lorem elit Nunc suscipit, sapien a elementum aliquam.</p> -->
						</div>

					</div>


			</div>

		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 video">
						<video controls="controls">
 							<source src="<?php echo $add_video ?>">
						</video>
					</div>
				</div>
			</div>
		</div>
				<div class="clearfix"> </div>
			</div>
		</div>


<!--grids -->
		<div class="popular-w3">
				<div class="popular-grids">
					<?php foreach( $add_adbantet as $key => $value) { ?>
					<div class="col-md-3 popular-grid">
						<div class="popular-text">
							<?php echo $value['ico_adbanted'] ?>
							<h5><?php echo $value['title_adbanted'] ?></h5>
							<div class="detail-bottom">
								<p><?php echo $value['description_adbanted'] ?></p>
							</div>
						</div>
					</div>
				<?php } ?>
					<div class="clearfix"></div>
				</div>
		</div>
<!-- //grids -->

<!-- blogs -->

<div class="blog-agile" id="team">
	<h3><?php echo $grup_setings_home['title_block_home']; ?></h3>
	<div class="container">

		<div class="main-w3l click_main_w3l">
			<div style="    background: url(<?php echo $grup_setings_home['group_setings_home1']['photo_home1']  ?>)no-repeat; background-size: cover;" class="sub1-w3l">
				<h5><?php echo $grup_setings_home['group_setings_home1']['prise_home1'] ?></h5>
				<h4><?php echo $grup_setings_home['group_setings_home1']['name_home1'] ?></h4>
			</div>
			<div class="sub2-w3l">
				<h4><?php echo $grup_setings_home['group_setings_home1']['title_desk_home1'] ?></h4>
				<p><?php echo $grup_setings_home['group_setings_home1']['desk_home1'] ?></p>
				<a href="#" class="my_click_test" data-toggle="modal" data-target="#myModal1">Подробнее<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
			</div>

			<!-- Modal1 -->
			<div class="modal fade addClassBlock" id="myModal1" role="dialog">
				<div class="modal-dialog">

					<div class="modal-content">
						<div class="modal-header qwer1">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4><?php echo $grup_setings_home['group_setings_home1']['name_home1'] ?></h4>
								<h5>Основные данные</h5>
								<div class="slider-for">
									<?php foreach ($grup_setings_home['group_setings_home1']['slider_photo_home1'] as $key => $value) {?>
									 <img src="<?php echo $value['url'] ?>" alt="image">
								 <?php } ?>
								</div>
								<!-- <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</span> -->
								<div class="wrap_servis_match">
									<ul>
										<?php foreach ($grup_setings_home['group_setings_home1']['setings_home1'] as $key => $value) {?>
										<li><?php echo $value['add_har_home1'] ?></li>
									<?php } ?>
									</ul>
								</div>
						</div>
					</div>

				</div>
	       </div>
		   <!-- //Modal1 -->
		</div>

		<div class="main2-w3l click_main_w3l">
			<div style="    background: url(<?php echo $grup_setings_home['group_setings_home2']['photo_home1']  ?>)no-repeat; background-size: cover;" class="sub1-w3l blog11">
				<h5 class="bd2"><?php echo $grup_setings_home['group_setings_home2']['prise_home1'] ?></h5>
				<h4><?php echo $grup_setings_home['group_setings_home2']['name_home1'] ?></h4>
			</div>
			<div class="sub2-w3l b2">
				<h4><?php echo $grup_setings_home['group_setings_home2']['title_desk_home1'] ?></h4>
				<p><?php echo $grup_setings_home['group_setings_home2']['desk_home1'] ?></p>

				<a href="#" class="my_click_test" data-toggle="modal" data-target="#myModal2">Подробнее<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>

			</div>
			<!-- Modal2 -->
									<div class="modal fade addClassBlock" id="myModal2" role="dialog">
										<div class="modal-dialog">
										<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header qwer2">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4><?php echo $grup_setings_home['group_setings_home2']['name_home1'] ?></h4>
												 <h5>Основные данные</h5>
												 <!-- <div class="wrap_imgdelit">
													 <img class="delit_nax" src="images/modelimg.jpg" alt="image">
												 </div> -->
												 <div class="slider-for">
													 <?php foreach ($grup_setings_home['group_setings_home2']['slider_photo_home1'] as $key => $value) {?>
														<img src="<?php echo $value['url'] ?>" alt="image">
													<?php } ?>
												 </div>

														<!-- <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</span> -->
														<div class="wrap_servis_match">
														 <ul>
															 <?php foreach ($grup_setings_home['group_setings_home2']['setings_home1'] as $key => $value) {?>
					 										<li><?php echo $value['add_har_home1'] ?></li>
					 									<?php } ?>
														 </ul>
													 </div>
												</div>
											</div>

										</div>
										 </div>
									 <!-- //Modal2 -->
		</div>




		<div class="clearfix"> </div>
		<div class="main-w3l click_main_w3l">
			<div style="    background: url(<?php echo $grup_setings_home['group_setings_home3']['photo_home1']  ?>)no-repeat; background-size: cover;" class="sub1-w3l">
				<h5><?php echo $grup_setings_home['group_setings_home3']['prise_home1'] ?></h5>
				<h4><?php echo $grup_setings_home['group_setings_home3']['name_home1'] ?></h4>
			</div>
			<div class="sub2-w3l b2">
				<h4><?php echo $grup_setings_home['group_setings_home3']['title_desk_home1'] ?></h4>
				<p><?php echo $grup_setings_home['group_setings_home3']['desk_home1'] ?></p>
				<a href="#" class="my_click_test" data-toggle="modal" data-target="#myModal3">Подробнее<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
			</div>
			<!-- Modal3 -->


			<div class="modal fade addClassBlock" id="myModal3" role="dialog">
				<div class="modal-dialog">

					<div class="modal-content">
						<div class="modal-header qwer1">
							<button type="button" class="close" data-dismiss="moda3">&times;</button>
							<h4><?php echo $grup_setings_home['group_setings_home3']['name_home1'] ?></h4>
						 <h5>Основные данные</h5>
								<!-- <div class="wrap_imgdelit">
									<img class="delit_nax" src="images/modelimg.jpg" alt="image">
								</div> -->
								<div class="slider-for">
									<?php foreach ($grup_setings_home['group_setings_home3']['slider_photo_home1'] as $key => $value) {?>
									 <img src="<?php echo $value['url'] ?>" alt="image">
								 <?php } ?>
								</div>
								<!-- <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</span> -->
								<div class="wrap_servis_match">
									<ul>
										<?php foreach ($grup_setings_home['group_setings_home3']['setings_home1'] as $key => $value) {?>
									 <li><?php echo $value['add_har_home1'] ?></li>
								 <?php } ?>
									</ul>
								</div>
						</div>
					</div>

				</div>
				 </div>




									 <!-- //Modal3 -->
		</div>
		<div class="main2-w3l click_main_w3l">
			<div style="    background: url(<?php echo $grup_setings_home['group_setings_home4']['photo_home1']  ?>)no-repeat; background-size: cover;" class="sub1-w3l blog11">
				<h5 class="bd2"><?php echo $grup_setings_home['group_setings_home4']['prise_home1'] ?></h5>
				<h4><?php echo $grup_setings_home['group_setings_home4']['name_home1'] ?></h4>
			</div>
			<div class="sub2-w3l">
				<h4><?php echo $grup_setings_home['group_setings_home4']['title_desk_home1'] ?></h4>
				<p><?php echo $grup_setings_home['group_setings_home4']['desk_home1'] ?></p>
				<a href="#" class="my_click_test" data-toggle="modal" data-target="#myModal4">Подробнее<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
			</div>
			<!-- Modal4 -->
									<div class="modal fade addClassBlock" id="myModal4" role="dialog">
										<div class="modal-dialog">
										<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header qwer5">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4><?php echo $grup_setings_home['group_setings_home4']['name_home1'] ?></h4>
												 <h5>Основные данные</h5>
												 <div class="slider-for">
													 <?php foreach ($grup_setings_home['group_setings_home4']['slider_photo_home1'] as $key => $value) {?>
				 									 <img src="<?php echo $value['url'] ?>" alt="image">
				 								 <?php } ?>
												</div>
														<!-- <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</span> -->
														<div class="wrap_servis_match">
														 <ul>
															 <?php foreach ($grup_setings_home['group_setings_home4']['setings_home1'] as $key => $value) {?>
					 										<li><?php echo $value['add_har_home1'] ?></li>
					 									<?php } ?>
														 </ul>
													 </div>
												</div>
											</div>

										</div>
										 </div>
									 <!-- //Modal4 -->
		</div>
		<div class="main2-w3l myclak click_main_w3l">
			<div style="    background: url(<?php echo $grup_setings_home['group_setings_home4']['photo_home1']  ?>)no-repeat; background-size: cover;" class="sub1-w3l blog11My ">
				<h5 class="bd3"><?php echo $grup_setings_home['group_setings_home5']['prise_home1'] ?></h5>
				<h4><?php echo $grup_setings_home['group_setings_home5']['name_home1'] ?></h4>
			</div>
			<div class="sub2-w3l">
				<h4><?php echo $grup_setings_home['group_setings_home5']['title_desk_home1'] ?></h4>
				<p><?php echo $grup_setings_home['group_setings_home5']['desk_home1'] ?></p>
				<a href="#" class="my_click_test" data-toggle="modal" data-target="#myModal5">Подробнее<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
			</div>
			<!-- Modal5 -->
									<div class="modal fade addClassBlock" id="myModal5" role="dialog">
										<div class="modal-dialog">
										<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header qwer5">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4>Коттедж №6</h4>
												 <h5>Основные данные</h5>
												 <div class="slider-for">
													 <?php foreach ($grup_setings_home['group_setings_home5']['slider_photo_home1'] as $key => $value) {?>
													<img src="<?php echo $value['url'] ?>" alt="image">
												<?php } ?>
												 </div>
														<!-- <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</span> -->
														<div class="wrap_servis_match">
														 <ul>
															 <?php foreach ($grup_setings_home['group_setings_home4']['setings_home1'] as $key => $value) {?>
					 										<li><?php echo $value['add_har_home1'] ?></li>
					 									<?php } ?>
														 </ul>
													 </div>
												</div>
											</div>

										</div>
										 </div>
									 <!-- //Modal5 -->
		</div>
		<div class="clearfix"> </div>
	</div>
</div>

<!-- //blogs -->

<!-- Gallery -->
	<div class="gallery" id="properties">

		<h3><?php echo $gpoup_setings_block_geleri['name_block_gelegi']  ?></h3>

		<div class="gallery-items">
			<?php foreach ($gpoup_setings_block_geleri['add_geleri']  as $key => $value) { ?>
			<div class="gallery-item gallery-item-1">
				<a class="example-image-link" href="<?php echo $value['url'] ?>" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="<?php echo $value['url'] ?>" alt="Asset"/>
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
		<?php } ?>

			<div class="clearfix"></div>
		</div>

	</div>

	<div class="gallery" id="blogs">

		<h3><?php echo $proup_setings_dogobor['name_block_dogobor']; ?></h3>
		<div class="container">
			<div class="row">
        <?php echo $proup_setings_dogobor['desc_block_dogobor']; ?>
				<div class="col-xs-12 text_center">
					<a href="#contact" class="hvr-overline-from-center scroll footer-btn">Получить подробную информацию </a>
				</div>
			</div>
		</div>

	</div>
	<!-- //Gallery -->

	<!-- contact -->
<div class="contact" id="contact">
	<div class="contact-top">
		<h3>Контакты</h3>
	</div>
	<div class="container">
		<div class="contact-main w3agile">
			<div class="col-md-7 contact-left">
			  <div class="contact-bottom">
			  	<form action="#" method="post">
			  		<input type="text" placeholder="Имя" name="Name" required="">
			  		<input type="email" class="no-mar" placeholder="Email" name="Email">
			  		<textarea placeholder="Сообщение" name="Message"></textarea>
			  		<input type="submit" value="Отправить">
			  	</form>
			  </div>
			 </div>
			 <div class="col-md-5 map">
			 	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84008838347!2d-74.25818880297903!3d40.705831640339994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1465278069158"> </iframe>
			 </div>
		   <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--find-->
<div class="footer agileinfo">
	<div class="container">
		<div class="footre-main">
			   <div class="footer-top">
			   	<h3>Как нас найти</h3>
			   </div>
			   <div class="footer-bottom">
			   	 <div class="col-md-4 ftr-grid">
			   	 	<span class="ftr-address-icons"><img src="images/f1.png" alt=""></span>
			   	 	 <div class="ftr-text">
				   		<?php dynamic_sidebar( 'footer_info_phone' ); ?>
			   	     </div>
			   	     <div class="clearfix"> </div>
			   	 </div>
			   	 <div class="col-md-4 ftr-grid">
			   	 	<span class="ftr-address-icons"><img src="images/f3.png" alt=""></span>
			   	 	<div class="ftr-text">
			   		  <?php dynamic_sidebar( 'footer_info_adres' ); ?>
			   		</div>
			   		 <div class="clearfix"> </div>
			   	 </div>
			   	 <div class="col-md-4 ftr-grid">
			   	 	<span class="ftr-address-icons"><img src="images/f2.png" alt=""></span>
			   	 	<div class="ftr-text">
			   		  <?php dynamic_sidebar( 'footer_info_email' ); ?>
			   		</div>
			   		 <div class="clearfix"> </div>
			   	 </div>
			   	 <div class="clearfix"> </div>
		     </div>
		</div>
	</div>
</div>
<!-- //find -->

<!-- footer -->

<?php
get_footer();
?>
