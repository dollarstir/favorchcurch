<?php

include 'core.php'
?>
<!DOCTYPE html>
<!-- 
Template Name: Grace Church
Version: 1.0.0
Author: 
Website: 
Purchase: 
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Favor Chapel International</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta name="description"  content="Grace Church"/>
	<meta name="keywords" content="Grace Church, Marriage, Event, Temple, function" />
	<meta name="author"  content=""/>
	<meta name="MobileOptimized" content="320" />
	<!--srart theme style -->
	<link rel="stylesheet" type="text/css" href="css/animate.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css"/>
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css"/>
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css"/>
	<link rel="stylesheet" type="text/css" href="css/fonts.css"/>
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="css/style2.css"/>
	<!-- favicon links -->
	<link rel="shortcut icon" type="image/x-icon" href="images/header/favicon.ico" />
</head>
<body>
<!-- preloader Start -->
<div id="preloader">
	<div id="status"><img src="images/header/preloader.gif" id="preloader_image" alt="loader">
	</div>
</div>
<!-- Top Scroll Start -->
<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
<!-- Top Scroll End -->
<!-- Top Header Wrapper Start -->
<?php hbar();?>
<!-- Header Wrapper End -->
<!-- plumb Slider Wrapper Start -->
<div class="gc_slider_wrapper">
	<div class="gc_slider_img_section">
			<div class="owl-carousel owl-theme">
				<div class="item gc_main_slide1">
					<div class="gc_slider_overlay"></div>
					<div class="gc_slider_cont1_wrapper">
						<div class="gc_slider_cont1">
							<h2 data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutDown"><img src="images/header/slider_logo.png" alt="logo"/></h2>
							<!-- <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOutDown">We Always <span>Believe</span></h1>
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOutDown">God Is <span>Above</span> All Thing’s</h1> -->
							<p data-animation-in="zoomIn" data-animation-out="animate-out zoomIn">We  Come To Serving & Believing God's Word and Spirit. </p>
							<ul>
								<li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="https://paystack.com/pay/3cc3u-3o6a">DONATE</a></li>
								<li data-animation-in="bounceInRight" data-animation-out="animate-out bounceOutRight"><a href="about.php">ABOUT US</a></li>
							</ul>
						</div>
					</div>
				</div>
			<div class="item gc_main_slide2">
			  <div class="gc_slider_overlay"></div>
			  <div class="gc_slider_cont1_wrapper">
					<div class="gc_slider_cont1">
						<h2 data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutDown"><img src="images/header/slider_logo.png" alt="logo"/></h2>
						<!-- <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOutDown">We Always <span>Believe</span></h1>
						<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOutDown">God Is <span>Above</span> All Thing’s</h1> -->
						<p data-animation-in="zoomIn" data-animation-out="animate-out zoomIn">We  Come To Serving & Believing God's Word and Spirit. </p>
						<ul>
							<li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="https://paystack.com/pay/3cc3u-3o6a">DONATE</a></li>
								<li data-animation-in="bounceInRight" data-animation-out="animate-out bounceOutRight"><a href="about.php">ABOUT US</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="item gc_main_slide3">
				<div class="gc_slider_overlay"></div>
				<div class="gc_slider_cont1_wrapper">
					<div class="gc_slider_cont1">
						<h2 data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutDown"><img src="images/header/slider_logo.png" alt="logo"/></h2>
						<!-- <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOutDown">We Always <span>Believe</span></h1>
						<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOutDown">God Is <span>Above</span> All Thing’s</h1> -->
						<p data-animation-in="zoomIn" data-animation-out="animate-out zoomIn">We  Come To Serving & Believing God's Word and Spirit. </p>
						<ul>
							<li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="https://paystack.com/pay/3cc3u-3o6a">DONATE</a></li>
								<li data-animation-in="bounceInRight" data-animation-out="animate-out bounceOutRight"><a href="about.php">ABOUT US</a></li>
						</ul>
					</div>
				</div>
			</div>
		 </div>
	</div>  
</div>
<!-- GC Slider Wrapper End -->
<!-- GC upcoming event Wrapper Start -->
<?php
// error_reporting(0);
	$sql = mysqli_query($conn, "SELECT * FROM events WHERE datetime > '" . date('Y-m-d H:i:s') . "' ORDER BY datetime DESC LIMIT 1");
	$next_event = mysqli_fetch_object($sql);

	echo'
	<div class="gc_upcoming_event_main_wrapper">
	<div class="gc_upcoming_event_left_wrapper">
		<div class="gc_event_icon_wrapper">	
			<img src="images/header/event_icon.png" alt="icon"/>
		</div>
		<div class="gc_index2_event_heading_wrapper">	
			<h3>Next Upcoming Event</h3>	
		</div>
		
		<div class="gc_event_heading_cont_wrapper">
			<h4>';
			if(empty($next_event)) {
				echo 'No Upcoming Events';
			} 
			else{
			echo 	$next_event->title.'</h4>';
			} 
			echo '
		</div>
		<div class="gc_event_heading_cont_time_wrapper">
			<div style="display: none" id="time_holder">';
			if(empty($next_event)) {
				echo '';
			} 
			else{
			echo 	$next_event->datetime.'</h4>';
			} 
			echo '</div>
			<p><i class="fa fa-calendar"></i>' ;

			if(empty($next_event)) {
				echo '';
			} 
			else{
			echo 	(new DateTime($next_event->datetime))->format('d F Y'); 
			} 
			
			
			echo '</p>
			<p class="event_time"><i class="fa fa-clock-o"></i> ';

			if(empty($next_event)) {
				echo '';
			} 
			else{
			echo '@'.(new DateTime($next_event->datetime))->format('h:i A'); 
			} 
			
			echo' </p>
		</div>
	</div>
</div>
	
	
	';
?>

<div class="gc_upcoming_event_timer_main_wrapper">
	<div class="gc_upcoming_event_timer_wrapper">
		<div id="clockdiv">
			<div><span class="days"></span><div class="smalltext">Days</div></div>
			<div><span class="hours"></span><div class="smalltext">hrs</div></div>
			<div><span class="minutes"></span><div class="smalltext">Min</div></div>
			<div><span class="seconds"></span><div class="smalltext">Sec</div></div>
		</div>
		<div class="gc_event_timer_btn">
				<ul>
					<li><a href="#">JOIN US!</a></li>
				</ul>
			</div>
	</div>
</div>
<!-- GC upcoming event Wrapper End -->

<!-- GC about story Wrapper Start -->
<div class="gc_about_story_main_wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="gc_about_img_wrapper">
					<img src="images/my/ps1.jpg" alt="about_img" class="zoom image img-responsive">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="gc_about_heading_wrapper">
					<div class="gc_about_heading">
						<h2>About Our Story</h2>
						<h1>Welcome to Favor Chapel</h1>
						<div class="gc_dot_wrapper">
							<div class="gc_dot">
								<a href="index2.html#"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
					<p>Favor Chapel International founded International Chapel of Favor is Charismatic Church with 1st Century spirit filled service experience. Founded in 2018 and registered in April 2010 in Kumasi Ghana. We are commissioned to raise generations full of the Holy Spirit, Obedient to God and Zealous of Good Works.<a href="about.php">Read More</a></p>
				</div>
				<!-- <div class="row">
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
						<div class="gc_about_cont_wrapper">
							<div class="gc_about_icons_wrapper">
								<i class="fa fa-arrows"></i>
							</div>
							<div class="gc_about_icons_cont_wrapper">
								<h3><a href="index2.html#">Glorify God</a></h3>
							</div>
						</div>
						<div class="gc_about_bottom_cont_wrapper">
							<p>Aenean sollicitudin, lorem uis bibendum auctor, nisi elit uat ipsum, nec sagittis .</p>
						</div>
					</div>
					<div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-12 col-xs-12">
						<div class="gc_about_cont_wrapper">
							<div class="gc_about_icons_wrapper">
								<i class="fa fa-book"></i>
							</div>
							<div class="gc_about_icons_cont_wrapper">
								<h3><a href="index2.html#">Believe Bible</a></h3>
							</div>
						</div>
						<div class="gc_about_bottom_cont_wrapper">
							<p>Aenean sollicitudin, lorem uis bibendum auctor, nisi elit uat ipsum, nec sagittis .</p>
						</div>
					</div>
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
						<div class="gc_about_cont_wrapper">
							<div class="gc_about_icons_wrapper">
								<i class="fa fa-heart"></i>
							</div>
							<div class="gc_about_icons_cont_wrapper">
								<h3><a href="index2.html#">Love Community</a></h3>
							</div>
						</div>
						<div class="gc_about_bottom_cont_wrapper">
							<p>Aenean sollicitudin, lorem uis bibendum auctor, nisi elit uat ipsum, nec sagittis .</p>
						</div>
					</div>
					<div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-12 col-xs-12">
						<div class="gc_about_cont_wrapper">
							<div class="gc_about_icons_wrapper">
								<i class="fa fa-user"></i>
							</div>
							<div class="gc_about_icons_cont_wrapper">
								<h3><a href="index2.html#">Love People</a></h3>
							</div>
						</div>
						<div class="gc_about_bottom_cont_wrapper">
							<p>Aenean sollicitudin, lorem uis bibendum auctor, nisi elit uat ipsum, nec sagittis .</p>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</div>
<!-- GC about story Wrapper End -->
<!-- GC filter Wrapper Start -->
<div class="gc_fliter_main_wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="gc_filter_heading_wrapper">
					<div class="gc_filter_heading">
						<h2>Discover the church</h2>
						<h1>Favor Chapel Photo Gallery</h1>
					</div>
				</div>
			</div>
			<div class="portfolio-area ptb-100">
                  <div class="container">
                    <div class="portfolio-filter clearfix text-center">
                      <ul class="list-inline" id="filter">
                          <li><a class="active" data-group="all">All</a></li>
                          <li><a data-group="image">Image</a></li>
                          <li><a data-group="event">Events</a></li>
                          <li><a data-group="sermon"> Sermons </a></li>
                      </ul>
                    </div>
                    <div class="row three-column">
                      <div id="gridWrapper" class="clearfix">
						  <?php
							 $sql = mysqli_query($conn, "SELECT * FROM gallery LIMIT 8");
							 while($gallery = mysqli_fetch_object($sql)) {
								 echo '
									<div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups=\'["all", "' . strtolower($gallery->type) . '"]\'>
										<div class="portfolio-thumb">
			
										<div class="gc_filter_cont_overlay_wrapper">
											<img style="height: 250px;" src="upload/' . $gallery->image . '" class="zoom image img-responsive" alt="service_img"/>
											<div class="gc_filter_cont_overlay">
												<div class="gc_filter_text"><a href="upload/' . $gallery->image . '"><i class="fa fa-plus"></i></a></div>
											</div>
										</div>
										</div>
									</div>
								 ';
							 } 
						  ?>

                      </div><!--/#gridWrapper-->
                    </div><!-- /.row -->
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="gc_filter_btn">
								<ul>
									<li><a href="index2.html#">View All</a></li>
								</ul>
							</div>
						</div>
					</div>
                  </div> <!-- /.container -->
                </div> <!--/.portfolio-area-->
		</div>
	</div>
</div>
<!-- GC filter Wrapper End -->
<!-- GC program Wrapper Start -->
<div class="gc_program_event_main_wrapper">
	<div class="container">
		<div class="row gc_program_margin">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="gc_program_main_heading">
							<h3>Programs & Events</h3>
						</div>
					</div>
					<?php
						$sql = mysqli_query($conn, "SELECT * FROM events ORDER BY datetime DESC LIMIT 4");
						while($_event = mysqli_fetch_object($sql)) {
							echo '
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 gc_event_margin">
									<div class="gc_upcom_slider_wrapper">
										<div class="gc_com_slider_img_wrapper" style="width: 300px; height: 354px">
											<img style="height: 100%" src="upload/' . $_event->image . '" alt="slider_img" class="zoom image img-responsive"/>
										</div>
										<div class="gc_com_slider_cont_wrapper">
											<div class="gc_com_slider_cont">
												<div class="gc_event_time_main_wrapper gc_com_slider_time_wrapper">
													<div class="gc_event_time_wrapper">
														<div class="gc_event_time">
														</div>
														<div class="gc_event_time_cont">
															<i class="fa fa-circle"></i>
															<p>@ ' . (new DateTime($_event->datetime))->format("h:i A") . '</p>
														</div>
													</div>
												</div>
												<div class="gc_event_bottom_cont gc_com_bottom_cont_wrapper">
													<h2>' . $_event->title . '</h2>
													<div class="gc_user_icon_wrapper">
														<i class="fa fa-user"></i>
													</div>
													<div class="gc_location_icon_wrapper">
														<i class="fa fa-map-marker"></i>
													</div>
													<h4>Location : ' . $_event->venue . '.</h4>
												</div>
												<div class="gc_event_btn gc_com_slider_btn">
													<ul>
														<li><a href="#">JOIN US!</a></li>
													</ul>
												</div>
												<div class="gc_event_date_wrapper gc_upcom_date_wrapper gc_event_index_wrapper">
													<h1>' . (new DateTime($_event->datetime))->format("d") . '</h1>
													<p>' . strtoupper((new DateTime($_event->datetime))->format("M")) . ' <br>' . (new DateTime($_event->datetime))->format("Y") . '</p>
												</div>
											</div>
										</div>
									</div>
								</div>							
							
							';
						}
					?>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 gc_accor_margin">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="gc_program_accor_main_heading">
							<h3>Our Latest Sermons</h3>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="trucking_faq_wrapeer">
							<div class="accordionFifteen">
								<div class="panel-group" id="accordionFifteenLeft" role="tablist">
									<?php
										$sql = mysqli_query($conn, "SELECT * FROM sermons ORDER BY datetime DESC LIMIT 6");

										$_count = 0;
										while($_sermon = mysqli_fetch_object($sql)) {
											echo '
												<div class="panel panel-default truck_pannel">
													<div class="panel-heading desktop">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordionFifteenLeft" href="index2.html#' . $_sermon->id . '" aria-expanded="true"> ' . $_sermon->title . '</a>
														</h4>
													</div>
													<div id="' . $_sermon->id . '" class="panel-collapse collapse ' .( $_count ? '' : 'in' ). '" aria-expanded="' .( $_count ? 'false' : 'true' ). '" role="tabpanel">
														<div class="panel-body">
															<div class="panel_img">
																<img src="upload/' . $_sermon->image . '" class="img-responsive" alt="panel_img"/>
															</div>
															<div class="panel_cont">
																<p>' . $_sermon->description . '. <a href="index2.html#">Read More</a></p>
																<h4>- by <span>' . $_sermon->author . '</span></h4>
																<ul>
																	<li><a href="index2.html#"><i class="fa fa-microphone"></i></a></li>
																	<li><a href="index2.html#"><i class="fa fa-youtube-play"></i></a></li>
																	<li><a href="upload/' . $_sermon->media . '" download><i class="fa fa-cloud-download"></i></a></li>
																	<li><a href="index2.html#"><i class="fa fa-file-text-o"></i></a></li>
																	<li><a href="index2.html#"><i class="fa fa-share-alt"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											';
											$_count++;			
										}
									?>
								</div><!--end of /.panel-group-->
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>
<!-- GC program Wrapper End -->
<!-- Tweet Feed Wrapper Start -->
<div class="container">
<div class="tc_twtfd_wrapper">
	
		<div class="row">
			<div id="myCarousel" class="vertical-slider carousel vertical slide col-md-12" data-ride="carousel">
				<div class="row">
					<div class="col-md-12 hidden-xs">
						<span data-slide="next" class="btn-vertical-slider fa fa-angle-up tc_up_btn" style="font-size: 28px; top: 0px;"></span>  
					</div>
				</div>
				<br>
				<!-- Carousel items -->
				<div class="carousel-inner">
					<div class="item">
						<div class="row">
							<div class="col-xs-12 col-sm-1 col-md-1">
								<div class="tc_twitter_img_wrapper">
									<img src="images/content/twitter_icon.png" class="twitter icon" alt="twitter icon">
								</div>	
							</div>
							<div class="col-xs-12 col-sm-9 col-md-9">
								<small>- @favorchapel </small>
								<p>Good is good.</p>
								<span class="tc_date_wrapper">29 March 2021</span>
							</div>
						</div>
					</div>
					<div class="item active">
						<div class="row">
							<div class="col-xs-12 col-sm-1 col-md-1">
								<div class="tc_twitter_img_wrapper">
									<img src="images/content/twitter_icon.png" class="twitter icon" alt="twitter icon">
								</div>
							</div>
							<div class="col-xs-12 col-sm-9 col-md-9">
							<small>- @favorchapel </small>
								<p>Good is good.</p>
								<span class="tc_date_wrapper">29 March 2021</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 hidden-xs">
						<span data-slide="prev" class="btn-vertical-slider fa fa-angle-down tc_down_btn" style="font-size: 28px; top: 0px;"></span>  
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 visible-xs">
						<span data-slide="next" class="btn-vertical-slider fa  fa-angle-right tc_up_btn" style="font-size: 28px; top: 0px;"></span>  
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 visible-xs">
						<span data-slide="prev" class="btn-vertical-slider fa fa-angle-left tc_down_btn" style="font-size: 28px; top: 0px;"></span>  
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Tweet Feed Wrapper End -->
<!-- GC footer Wrapper Start -->
<?php fbar()?>
<!-- GC footer Wrapper End -->
<!--main js file start--> 
<script type="text/javascript" src="js/jquery_min.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.menu-aim.js"></script> 
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/jquery.shuffle.min.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/jquery.inview.min.js"></script>
<script type="text/javascript" src="js/custom2.js"></script>
<!--main js file end-->
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>