<?php

echo ' 
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto"><a class="navbar-brand" href="home.php">
              <div class="brand-logo"><img class="logo" src="app-assets/images/logo/logo.png"/></div>
              <h2 class="brand-text mb-0"></h2></a></li>
          <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="bx-disc"></i></a></li>
        </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">
          <li class=" nav-item"><a href="home.php"><i class="bx bx-home-alt"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
            <ul class="menu-content">
              <li><a href="home.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="eCommerce">Home</span></a>
              </li>
              
              </li>
            </ul>
          </li>
          
          <!--<li class=" navigation-header"><span>Forms &amp; Tables</span>-->
          </li>
          <li class=" nav-item"><a href="form-layout.html#"><i class="bx bx-check"></i><span class="menu-title" data-i18n="Form Elements"> Events</span></a>
            <ul class="menu-content">
              <li><a href="add-activities.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Input">Add Event</span></a>
              </li>
              <li><a href="view-activities.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Input Groups">View Events</span></a>
              </li>
              
            </ul>
          </li>
        
          
          <li class=" nav-item"><a href="#"><i class="bx bx-user-plus"></i><span class="menu-title" data-i18n="User">Testimony</span></a>
            <ul class="menu-content">
              <li><a href="add-testimony.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="List">Add Testimony</span></a>
              </li>
              <li><a href="view-testimony.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="View">View Testimony</span></a>
              </li>
              
            </ul>
          </li>
          <li class=" nav-item"><a href="form-layout.html#"><i class="bx bx-building"></i><span class="menu-title" data-i18n="Starter kit">Sermons</span></a>
            <ul class="menu-content">
            <li><a href="add-tour.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="1 column">Add Sermons</span></a>
              </li>
              <li><a href="view-tour.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="2 columns">View Sermons</span></a>
              </li>
            
            </ul>
          </li>
          <li class=" nav-item"><a href="form-layout.html#"><i class="bx bx-file"></i><span class="menu-title" data-i18n="Authentication">Messages</span></a>
            <ul class="menu-content">
              <!--<li><a href="add-accomodation.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Login">Add Accommodation</span></a>
              </li>-->
              <li><a href="view-accomodation.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Register">View-Messages</span></a>
              </li>
              
            </ul>
          </li>

          <li class=" nav-item"><a href="logout.php"><i class="bx bx-power-off mr-50"></i>Logout</a>
            
          </li>
          
        </ul>
      </div>
    </div>
  ';

?>