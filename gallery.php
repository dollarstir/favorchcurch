<!DOCTYPE html>
<?php include 'core.php';?>
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
	<title>Gallery-IV</title>
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
			<h2>Our Gallery</h2>
		</div>
	</div>	
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding_zero">
		<div class="gc_main_tittle_side_nav">
			<ul>
				<li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;&nbsp;></li>
				<li>Gallery</li>
			</ul>
		</div>
	</div>
</div>
<!-- gc Tittle Wrapper End -->
<!-- GC filter Wrapper Start -->
<div class="gc_fliter_main_wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="gc_filter_heading_wrapper">
					<div class="gc_filter_heading">
						<h2>Discover the church</h2>
						<h1>Favor Chapel  Photo Gallery</h1>
					</div>
				</div>
			</div>
			<div class="portfolio-area ptb-100">
                  <div class="container">
                    <div class="portfolio-filter clearfix text-center">
                      <ul class="list-inline" id="filter">
                          <li><a class="active" data-group="all">All</a></li>
                          <li><a data-group="image">Picures</a></li>
                          <li><a data-group="event">Events</a></li>
                          <li><a data-group="sermon">Sermons</a></li>
                      </ul>
                    </div>
                    <div class="row three-column">
                      <div id="gridWrapper" class="clearfix">
					  	<?php
							 $sql = mysqli_query($conn, "SELECT * FROM gallery");
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
				</div> <!-- /.container -->
			</div> <!--/.portfolio-area-->
		</div>
	</div>
</div>
<!-- GC filter Wrapper End -->
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
<script type="text/javascript" src="js/custom.js"></script>
<!--main js file end-->
</body>
</html>