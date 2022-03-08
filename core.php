<?php
include 'conn.php';
// copyright 2021 Dollarsoft
// contact : +233556676471
// Email : kpin463@gmail.com
// Website : www.dollarstir.com

function fbar () {
    include 'conn.php';
    echo '
        <div class="gc_footer_main_wrapper gc_about_footer_wrapper">
            <div class="gc_footer_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="gc_footer_logo_wrapper">
                            <div class="gc_footer_logo">
                                <img src="images/header/logo.png" class="img-responsive" alt="footer logo"/>
                            </div>	
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="gc_footer_social_icon_wrapper">
                            <div class="gc_footer_social_icon">
                                <ul>
                                    ';

                                    $sql = mysqli_query($conn, "SELECT * FROM social_accounts");

                                    while($social = mysqli_fetch_object($sql)) {
                                        echo '<li style="width: 33.33%" class="col-lg-4"><a href="'. $social->link .'"><i class="fa fa-'. strtolower($social->title) .'"></i> '. $social->title .'</a></li>';
                                    }

                                    echo '
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="gc_footer_news_wrapper">
                            <div class="gc_footer_news">
                                <h3>Newsletter</h3>
                               <!-- <p>Nam nec tellus a odio tincidunt a auctor a nare odio sed. This is Pshop\'s version  Offer.</p>-->
                            </div>
                            <div class="gc_footer_news_email">
                                <h3>Get Our Newletter</h3>
                                <input type="email" placeholder="Email"><i class="fa fa-envelope"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="gc_footer_letestnews_wrapper">
                            <div class="gc_footer_news">
                                <h3>Latest Events</h3>
                            </div>';
                            
                                $sql = mysqli_query($conn, "SELECT * FROM events ORDER BY datetime DESC LIMIT 2");

                                while ($_event = mysqli_fetch_object($sql)) {
                                    echo '
                                        <div class="gc_footer_ln_main_wrapper">
                                            <div class="gc_footer_ln_img_wrapper">
                                                <img src="upload/' . $_event->image . '" class="img-responsive" alt="ln_img"/>
                                            </div>
                                            <div class="gc_footer_ln_cont_wrapper">
                                                <h4>' . $_event->title . '</h4>
                                                <p>' . strtoupper((new DateTime($_event->datetime))->format("d M Y")) . '</p>
                                            </div>
                                        </div>							
                                    ';
                                }
                            
                        echo '				
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="gc_footer_ul_wrapper">
                            <div class="gc_footer_news">
                                <h3>Useful Links</h3>
                            </div>
                            <div class="gc_footer_ul_main_wrapper">
                                <div class="gc_footer_ul_wrapper">
                                    <ul>
                                        <li><i class="fa fa-hand-o-right"></i> <a href="about.php">Who we are?</a></li>
                                        <li><i class="fa fa-hand-o-right"></i> <a href="contact.php">Support and FAQ’s</a></li>
                                        <!--<li><i class="fa fa-hand-o-right"></i> <a href="index2.html#">Payments</a></li>-->
                                        <li><i class="fa fa-hand-o-right"></i> <a href="https://paystack.com/pay/3cc3u-3o6a" target="blank">Donations</a></li>
                                        <li><i class="fa fa-hand-o-right"></i> <a href="contact.php">Volunteer</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="gc_footer_insta_wrapper">
                            <div class="gc_footer_news">
                                <h3>Pictures</h3>
                            </div>
                            <div class="gc_footer_insta_main_wrapper">
                                <div class="gc_footer_insta_wrapper">
                                    <div class="row">
                                        ';
                                            $sql = mysqli_query($conn, "SELECT * FROM gallery ORDER BY dateadded DESC LIMIT 6");

                                            $_count = 1;
                                            while ($_gallery = mysqli_fetch_object($sql)) {
                                                echo '
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ' . (($_count > 3) ? "gc_padding_top" : ""). '">
                                                        <div class="gc_footer_insta_img_wrapper">
                                                            <img style="width: 80px; height: 80px" src="upload/' . $_gallery->image . '" class="" alt="insta_img">
                                                        </div>
                                                    </div>										
                                                ';
                                                $_count++;
                                            }
                                        echo '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gc_bottom_footer_main_wrapper">
            <div class="container-fluid">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="gc_bottom_footer_copy_wrapper">
                        <p>Copyright © '.date("Y").' <a href="#">Favor Chapel</a>. All rights reserved. Design by <a href="#">Dollarsoft</a></p>
                    </div>	
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="gc_bottom_footer_right_wrapper">
                        
                    </div>	
                </div>
            </div>
        </div>
    ';
}

function hbar(){
    include 'conn.php';
    echo '
        <div class="gc_top_header_wrapper hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="gc_left_side_warpper">
                            <div class="gc_top_contect">
                            <p><i class="fa fa-phone"></i> &nbsp;+233244044013</p>
                                <p class=""><i class="fa fa-envelope"></i> &nbsp;<a href="#">support@favorchapel.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="et_right_side_main_warpper">
                            <div class="gc_right_side_warpper">
                                <ul>
                                    <li>
                                        <div class="gc_top_socialicon">
                                            <ul>
                                                <li>Connect with Favor Chapel :</li>
                                                <li><a href="https://web.facebook.com/favor.chapel/"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="https://twitter.com/favorchapel"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="https://www.instagram.com/favorchapel/"><i class="fa fa-instagram"></i></a></li>
                                                <!--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="gc_top_donet_btn">
                                            <ul>
                                                <li><a href="https://paystack.com/pay/3cc3u-3o6a" target="blank">DONATE</a></li>
                                            </ul>
                                        </div>
                                    </li>		
                                </ul>	
                            </div>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Wrapper End -->
        <!-- Header Wrapper Start -->
        <div class="gc_main_menu_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-xs hidden-sm">
                        <div class="gc_header_wrapper">
                            <div class="gc_logo">
                                <a href="index.html"><img src="images/header/logo.png" alt="Logo" title="Favor Chapel"  class="img-responsive"></a>
                            </div>
                        </div>	
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">			
                        <div class="header-area hidden-menu-bar stick" id="sticker">
                            <!-- mainmenu start -->
                            <div class="gc_right_menu hidden-xs hidden-sm">
                                <ul>
                                    <li id="search_button">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_2" x="0px" y="0px" viewBox="0 0 451 451" style="enable-background:new 0 0 451 451;" xml:space="preserve"><g><path id="search" d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3   s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4   C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3   s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z" fill="#00468c"/></g></svg>
                                    </li>
                                    <li>
                                        <div id="search_open" class="gc_search_box">
                                            <input type="text" placeholder="Search here">
                                            <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="mainmenu">
                                <ul>
                                    <li class="has-mega gc_main_navigation"><a href="index.php" class="gc_main_navigation">  Home</a>
                                        <!-- mega menu start -->
                                        
                                    </li>
                                    <li class="has-mega gc_main_navigation"><a href="about.php" class="gc_main_navigation">  About</a>
                                        <!-- mega menu start -->
                                        
                                    </li>
                                    <li class="has-mega gc_main_navigation"><a href="events.php" class="gc_main_navigation">  event</a>
                                        <!-- mega menu start -->
                                        
                                    </li>
                                    <li class="has-mega gc_main_navigation"><a href="sermons.php" class="gc_main_navigation">  sermons</a>
                                        <!-- mega menu start -->
                                        
                                    </li>
                                    <li class="has-mega gc_main_navigation"><a href="gallery.php" class="gc_main_navigation">  Gallery</a>
                                        <!-- mega menu start -->
                                        
                                    </li>
                                <!--<li class="has-mega gc_main_navigation"><a href="index2.html#" class="gc_main_navigation">  Blog</a>
                                    
                                        <ul>
                                            <li class="parent"><a href="blog_categories.html">Blog-Category</a></li>
                                            <li class="parent"><a href="blog_single.html">Blog-Single</a></li>
                                            
                                        </ul>
                                    </li>-->
                                    <li class="gc_main_navigation parent"><a href="contact.php" class="gc_main_navigation">Contact Us</a></li>
                                </ul>
                            </div>
                            <!-- mainmenu end -->
                            <!-- mobile menu area start -->
                            <header class="mobail_menu">
                                    <div class="container-fluid">
                                        <div class="row">	
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="gc_logo">
                                                    <a href="index.html"><img src="images/header/logo.png" alt="Logo" title="Grace Church"></a>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                        <div class="cd-dropdown-wrapper">
                                                            <a class="house_toggle" href="index.php#0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px"><g><g><path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#00468c"/></g><g><path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#00468c"/></g><g><path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#00468c"/></g><g><path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#00468c"/></g><g><path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#00468c"/></g></g></svg>
                                                            </a>
                                                        <nav class="cd-dropdown">
                                                    <h2><a href="index.php#">Favor  <span>Chapel</span></a></h2>
                                                    <a href="index.php#0" class="cd-close">Close</a>
                                                    <ul class="cd-dropdown-content">
                                                       
                                                        <li>
                                                            <a href="index.php">Home</a>

                                                            
                                                        </li> <!-- .has-children -->
                                                        
                                                        
                                                        <li>
                                                            <a href="about.php">About</a>

                                                            
                                                        </li> <!-- .has-children -->
                                                        <li>
                                                            <a href="events.php">Events </a>

                                                           
                                                        </li> <!-- .has-children -->
                                                        
                                                        <li>
                                                            <a href="sermons.php">sermons </a>

                                                            
                                                        </li> <!-- .has-children -->
                                                        <li>
                                                            <a href="gallery.php">Gallery</a>

                                                            
                                                        </li> <!-- .has-children -->
                                                        
                                                        <li>
                                                            <a href="contact.php">Contact Us</a>
                                                        </li>
                                                        
                                                    </ul> <!-- .cd-dropdown-content -->
                
                                                        

                                                </nav> <!-- .cd-dropdown -->
                                                
                                            </div>
                                        </div>	
                                    </div>		
                                </div><!-- .cd-dropdown-wrapper -->	
                            </header>
                        </div>	
                    </div>	
                    <!-- mobile menu area end -->
                </div>
            </div>
        </div>	
    ';
}





?>