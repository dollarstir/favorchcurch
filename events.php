<!DOCTYPE html>
<?php include 'core.php'?>
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
	<title>Upcoming-Event</title>
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
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<!-- favicon links -->
	<link rel="shortcut icon" type="image/png" href="images/header/favicon.png" />
<script src='../../google_analytics_auto.js'></script></head>
<body>
<!-- preloader Start -->
<div id="preloader">
	<div id="status"><img src="images/header/preloader.gif" id="preloader_image" alt="loader">
	</div>
</div>
<!-- Header Wrapper Start -->
<!-- Top Scroll Start -->
<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
<!-- Top Scroll End -->
<?php hbar();?>	
<!-- Header Wrapper End -->
<!-- gc Tittle Wrapper Start -->
<div class="gc_tittle_main_wrapper">
	<div class="gc_tittle_img_overlay"></div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="gc_main_tittle_heading">
			<h2>Upcoming Events</h2>
		</div>
	</div>	
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding_zero">
		<div class="gc_main_tittle_side_nav">
			<ul>
				<li><a href="upcoming.php#">Home</a> &nbsp;&nbsp;&nbsp;&nbsp;></li>
				<li>Events</li>
			</ul>
		</div>
	</div>
</div>
<!-- gc Tittle Wrapper End -->
<!-- gc event gallery Start -->
<div class="gc_event_index_main_wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="gc_event_index_heading_wrapper">
					<div class="gc_event_index_heading">
						<h2>Join Us Events</h2>
						<h1>Upcoming Events</h1>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 gc_event_index_content">
				<div class="row">
					<?php
						$sql = mysqli_query($conn, "SELECT * FROM events WHERE datetime > '" . date('Y-m-d H:i:s') . "' ORDER BY datetime DESC");

						while($event = mysqli_fetch_object($sql)) {
							echo '
								<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 width_50 gc_event_index_content_sec">
									<div class="gc_upcom_slider_wrapper">
										<div class="gc_com_slider_img_wrapper" style="width: 200px">
											<img style="height: 300px" src="upload/' . ($event->image) . '" alt="slider_img" class="zoom image img-responsive"/>
										</div>
										<div class="gc_com_slider_cont_wrapper">
											<div class="gc_com_slider_cont">
												<div class="gc_event_time_main_wrapper gc_com_slider_time_wrapper">
													<div class="gc_event_time_wrapper">
														<div class="gc_event_time">
														</div>
														<div class="gc_event_time_cont">
															<i class="fa fa-circle"></i>
															<p>@ ' . (new DateTime($event->datetime))->format("h:i A") . '</p>
														</div>
													</div>
												</div>
												<div class="gc_event_bottom_cont gc_com_bottom_cont_wrapper">
													<h2>' . $event->title . '</h2>
													<div class="gc_user_icon_wrapper">
														<i class="fa fa-user"></i>
													</div>
													<div class="gc_location_icon_wrapper">
														<i class="fa fa-map-marker"></i>
													</div>
													<h4>Location : ' . $event->venue . '.</h4>
												</div>
												<div class="gc_event_btn gc_com_slider_btn">
													<ul>
														.<li><a href="#">JOIN US!</a></li>
													</ul>
												</div>
												<div class="gc_event_date_wrapper gc_upcom_date_wrapper gc_event_index_wrapper">
													<h1>' . (new DateTime($event->datetime))->format("d") . '</h1>
													<p>' . strtoupper((new DateTime($event->datetime))->format("M")) . ' <br>' . (new DateTime($event->datetime))->format("Y") . '</p>
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
		</div>
	</div>
</div>	
<div class="gc_event_index_main_wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="gc_event_index_heading_wrapper">
					<div class="gc_event_index_heading">
						<h1>Past Events</h1>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 gc_event_index_content">
				<div class="row">
					<?php
						$sql = mysqli_query($conn, "SELECT * FROM events WHERE datetime <= '" . date('Y-m-d H:i:s') . "' ORDER BY datetime DESC");

						while($event = mysqli_fetch_object($sql)) {
							echo '
								<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 width_50 gc_event_index_content_sec">
									<div class="gc_upcom_slider_wrapper">
										<div class="gc_com_slider_img_wrapper" style="width: 200px">
											<img style="height: 300px" src="upload/' . ($event->image) . '" alt="slider_img" class="zoom image img-responsive"/>
										</div>
										<div class="gc_com_slider_cont_wrapper">
											<div class="gc_com_slider_cont">
												<div class="gc_event_time_main_wrapper gc_com_slider_time_wrapper">
													<div class="gc_event_time_wrapper">
														<div class="gc_event_time">
														</div>
														<div class="gc_event_time_cont">
															<i class="fa fa-circle"></i>
															<p>@ ' . (new DateTime($event->datetime))->format("h:i A") . '</p>
														</div>
													</div>
												</div>
												<div class="gc_event_bottom_cont gc_com_bottom_cont_wrapper">
													<h2>' . $event->title . '</h2>
													<div class="gc_user_icon_wrapper">
														<i class="fa fa-user"></i>
													</div>
													<div class="gc_location_icon_wrapper">
														<i class="fa fa-map-marker"></i>
													</div>
													<h4>Location : ' . $event->venue . '.</h4>
												</div>
												<div class="gc_event_btn gc_com_slider_btn">
													<ul>
														.<li><a href="#">JOIN US!</a></li>
													</ul>
												</div>
												<div class="gc_event_date_wrapper gc_upcom_date_wrapper gc_event_index_wrapper">
													<h1>' . (new DateTime($event->datetime))->format("d") . '</h1>
													<p>' . strtoupper((new DateTime($event->datetime))->format("M")) . ' <br>' . (new DateTime($event->datetime))->format("Y") . '</p>
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
		</div>
	</div>
</div>	
<!-- gc event gallery End -->
<!-- GC sermons Wrapper Start -->
<!--<div class="gc_sermons_main_wrapper">
	<div class="gc_sermons_img_overlay"></div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="gc_serm_heading_wrapper">
					<div class="gc_serm_heading">
						<h2>Watch and Listen</h2>
						<h1>Our Latest Sermons</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="gc_serm_slider_section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="gc_serm_slider_wrapper">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<div class="gc_serm_item1_width">
								<div class="gc_serm_cont_main_wrapper">
									<h5>- May 10 - 11, 2017</h5>
									<h6>Spritual Growth</h6>
									<h4>Steps for Spiritual Renewal</h4>
									<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="upcoming.php#">Read More</a></p>
									<ul>
										<li><a href="upcoming.php#"><i class="fa fa-microphone"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-youtube-play"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-cloud-download"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-file-text-o"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-share-alt"></i></a></li>
									</ul>
									<div class="gc_serm_img_wrapper">
										<img src="images/content/serm_img1.jpg" class="img-responsive" alt="serm_img"/>
										<h2>- by <span>Clinith Luis</span></h2>
									</div>
								</div>
							</div>
							<div class="gc_serm_item2_width">
								<div class="gc_serm_cont_main_wrapper">
									<h5>- May 10 - 11, 2017</h5>
									<h6>Spritual Growth</h6>
									<h4>Steps for Spiritual Renewal</h4>
									<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="upcoming.php#">Read More</a></p>
									<ul>
										<li><a href="upcoming.php#"><i class="fa fa-microphone"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-youtube-play"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-cloud-download"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-file-text-o"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-share-alt"></i></a></li>
									</ul>
									<div class="gc_serm_img_wrapper">
										<img src="images/content/serm_img2.jpg" class="img-responsive" alt="serm_img"/>
										<h2>- by <span>Clinith Luis</span></h2>
									</div>
								</div>
							</div>
							<div class="gc_serm_item3_width">
								<div class="gc_serm_cont_main_wrapper">
									<h5>- May 10 - 11, 2017</h5>
									<h6>Spritual Growth</h6>
									<h4>Steps for Spiritual Renewal</h4>
									<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="upcoming.php#">Read More</a></p>
									<ul>
										<li><a href="upcoming.php#"><i class="fa fa-microphone"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-youtube-play"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-cloud-download"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-file-text-o"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-share-alt"></i></a></li>
									</ul>
									<div class="gc_serm_img_wrapper">
										<img src="images/content/serm_img3.jpg" class="img-responsive" alt="serm_img"/>
										<h2>- by <span>Clinith Luis</span></h2>
									</div>
								</div>
							</div>
							<div class="gc_serm_item4_width">
								<div class="gc_serm_cont_main_wrapper">
									<h5>- May 10 - 11, 2017</h5>
									<h6>Spritual Growth</h6>
									<h4>Steps for Spiritual Renewal</h4>
									<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="upcoming.php#">Read More</a></p>
									<ul>
										<li><a href="upcoming.php#"><i class="fa fa-microphone"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-youtube-play"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-cloud-download"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-file-text-o"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-share-alt"></i></a></li>
									</ul>
									<div class="gc_serm_img_wrapper">
										<img src="images/content/serm_img4.jpg" class="img-responsive" alt="serm_img"/>
										<h2>- by <span>Clinith Luis</span></h2>
									</div>
								</div>
							</div>
							<div class="gc_serm_item5_width">
								<div class="gc_serm_cont_main_wrapper">
									<h5>- May 10 - 11, 2017</h5>
									<h6>Spritual Growth</h6>
									<h4>Steps for Spiritual Renewal</h4>
									<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="upcoming.php#">Read More</a></p>
									<ul>
										<li><a href="upcoming.php#"><i class="fa fa-microphone"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-youtube-play"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-cloud-download"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-file-text-o"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-share-alt"></i></a></li>
									</ul>
									<div class="gc_serm_img_wrapper">
										<img src="images/content/serm_img5.jpg" class="img-responsive" alt="serm_img"/>
										<h2>- by <span>Clinith Luis</span></h2>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="gc_serm_item1_width">
								<div class="gc_serm_cont_main_wrapper">
									<h5>- May 10 - 11, 2017</h5>
									<h6>Spritual Growth</h6>
									<h4>Steps for Spiritual Renewal</h4>
									<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="upcoming.php#">Read More</a></p>
									<ul>
										<li><a href="upcoming.php#"><i class="fa fa-microphone"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-youtube-play"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-cloud-download"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-file-text-o"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-share-alt"></i></a></li>
									</ul>
									<div class="gc_serm_img_wrapper">
										<img src="images/content/serm_img1.jpg" class="img-responsive" alt="serm_img"/>
										<h2>- by <span>Clinith Luis</span></h2>
									</div>
								</div>
							</div>
							<div class="gc_serm_item2_width">
								<div class="gc_serm_cont_main_wrapper">
									<h5>- May 10 - 11, 2017</h5>
									<h6>Spritual Growth</h6>
									<h4>Steps for Spiritual Renewal</h4>
									<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="upcoming.php#">Read More</a></p>
									<ul>
										<li><a href="upcoming.php#"><i class="fa fa-microphone"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-youtube-play"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-cloud-download"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-file-text-o"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-share-alt"></i></a></li>
									</ul>
									<div class="gc_serm_img_wrapper">
										<img src="images/content/serm_img2.jpg" class="img-responsive" alt="serm_img"/>
										<h2>- by <span>Clinith Luis</span></h2>
									</div>
								</div>
							</div>
							<div class="gc_serm_item3_width">
								<div class="gc_serm_cont_main_wrapper">
									<h5>- May 10 - 11, 2017</h5>
									<h6>Spritual Growth</h6>
									<h4>Steps for Spiritual Renewal</h4>
									<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="upcoming.php#">Read More</a></p>
									<ul>
										<li><a href="upcoming.php#"><i class="fa fa-microphone"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-youtube-play"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-cloud-download"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-file-text-o"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-share-alt"></i></a></li>
									</ul>
									<div class="gc_serm_img_wrapper">
										<img src="images/content/serm_img3.jpg" class="img-responsive" alt="serm_img"/>
										<h2>- by <span>Clinith Luis</span></h2>
									</div>
								</div>
							</div>
							<div class="gc_serm_item4_width">
								<div class="gc_serm_cont_main_wrapper">
									<h5>- May 10 - 11, 2017</h5>
									<h6>Spritual Growth</h6>
									<h4>Steps for Spiritual Renewal</h4>
									<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="upcoming.php#">Read More</a></p>
									<ul>
										<li><a href="upcoming.php#"><i class="fa fa-microphone"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-youtube-play"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-cloud-download"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-file-text-o"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-share-alt"></i></a></li>
									</ul>
									<div class="gc_serm_img_wrapper">
										<img src="images/content/serm_img4.jpg" class="img-responsive" alt="serm_img"/>
										<h2>- by <span>Clinith Luis</span></h2>
									</div>
								</div>
							</div>
							<div class="gc_serm_item5_width">
								<div class="gc_serm_cont_main_wrapper">
									<h5>- May 10 - 11, 2017</h5>
									<h6>Spritual Growth</h6>
									<h4>Steps for Spiritual Renewal</h4>
									<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="upcoming.php#">Read More</a></p>
									<ul>
										<li><a href="upcoming.php#"><i class="fa fa-microphone"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-youtube-play"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-cloud-download"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-file-text-o"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-share-alt"></i></a></li>
									</ul>
									<div class="gc_serm_img_wrapper">
										<img src="images/content/serm_img5.jpg" class="img-responsive" alt="serm_img"/>
										<h2>- by <span>Clinith Luis</span></h2>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="gc_serm_item1_width">
								<div class="gc_serm_cont_main_wrapper">
									<h5>- May 10 - 11, 2017</h5>
									<h6>Spritual Growth</h6>
									<h4>Steps for Spiritual Renewal</h4>
									<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="upcoming.php#">Read More</a></p>
									<ul>
										<li><a href="upcoming.php#"><i class="fa fa-microphone"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-youtube-play"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-cloud-download"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-file-text-o"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-share-alt"></i></a></li>
									</ul>
									<div class="gc_serm_img_wrapper">
										<img src="images/content/serm_img1.jpg" class="img-responsive" alt="serm_img"/>
										<h2>- by <span>Clinith Luis</span></h2>
									</div>
								</div>
							</div>
							<div class="gc_serm_item2_width">
								<div class="gc_serm_cont_main_wrapper">
									<h5>- May 10 - 11, 2017</h5>
									<h6>Spritual Growth</h6>
									<h4>Steps for Spiritual Renewal</h4>
									<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="upcoming.php#">Read More</a></p>
									<ul>
										<li><a href="upcoming.php#"><i class="fa fa-microphone"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-youtube-play"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-cloud-download"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-file-text-o"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-share-alt"></i></a></li>
									</ul>
									<div class="gc_serm_img_wrapper">
										<img src="images/content/serm_img2.jpg" class="img-responsive" alt="serm_img"/>
										<h2>- by <span>Clinith Luis</span></h2>
									</div>
								</div>
							</div>
							<div class="gc_serm_item3_width">
								<div class="gc_serm_cont_main_wrapper">
									<h5>- May 10 - 11, 2017</h5>
									<h6>Spritual Growth</h6>
									<h4>Steps for Spiritual Renewal</h4>
									<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="upcoming.php#">Read More</a></p>
									<ul>
										<li><a href="upcoming.php#"><i class="fa fa-microphone"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-youtube-play"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-cloud-download"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-file-text-o"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-share-alt"></i></a></li>
									</ul>
									<div class="gc_serm_img_wrapper">
										<img src="images/content/serm_img3.jpg" class="img-responsive" alt="serm_img"/>
										<h2>- by <span>Clinith Luis</span></h2>
									</div>
								</div>
							</div>
							<div class="gc_serm_item4_width">
								<div class="gc_serm_cont_main_wrapper">
									<h5>- May 10 - 11, 2017</h5>
									<h6>Spritual Growth</h6>
									<h4>Steps for Spiritual Renewal</h4>
									<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="upcoming.php#">Read More</a></p>
									<ul>
										<li><a href="upcoming.php#"><i class="fa fa-microphone"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-youtube-play"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-cloud-download"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-file-text-o"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-share-alt"></i></a></li>
									</ul>
									<div class="gc_serm_img_wrapper">
										<img src="images/content/serm_img4.jpg" class="img-responsive" alt="serm_img"/>
										<h2>- by <span>Clinith Luis</span></h2>
									</div>
								</div>
							</div>
							<div class="gc_serm_item5_width">
								<div class="gc_serm_cont_main_wrapper">
									<h5>- May 10 - 11, 2017</h5>
									<h6>Spritual Growth</h6>
									<h4>Steps for Spiritual Renewal</h4>
									<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="upcoming.php#">Read More</a></p>
									<ul>
										<li><a href="upcoming.php#"><i class="fa fa-microphone"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-youtube-play"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-cloud-download"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-file-text-o"></i></a></li>
										<li><a href="upcoming.php#"><i class="fa fa-share-alt"></i></a></li>
									</ul>
									<div class="gc_serm_img_wrapper">
										<img src="images/content/serm_img5.jpg" class="img-responsive" alt="serm_img"/>
										<h2>- by <span>Clinith Luis</span></h2>
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div>				
			</div>
		</div>
	</div>
</div> -->
<!-- GC sermons Wrapper End -->
<!-- Tweet Feed Wrapper Start -->
<div class="container">
<div class="tc_twtfd_wrapper gc_twitter_upcoming_wrapper gc_twitter_upcoming_wrapper2">
	
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
<?php fbar();?>
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
<script type="text/javascript" src="js/custom.js"></script>
<!--main js file end-->
</body>
</html>