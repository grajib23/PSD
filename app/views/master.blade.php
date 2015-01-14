<!DOCTYPE html>
<html class="hungry">
   <head>
      <!-- Meta Tags -->
      <meta charset="utf-8">
      <!-- Viewport Metatag -->
      <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <!-- Title -->
      <title>PWD.com</title>
      <!-- Fonts -->
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,900,700italic,500italic' rel='stylesheet' type='text/css'>
      {{ HTML::style('assets/css/bootstrap.min.css') }}
      {{ HTML::style('/assets/css/stylesheet.css') }}
      {{ HTML::style('/assets/css/style.css')}}
      {{ HTML::style('/assets/css/login.css')}}
      {{ HTML::style('/assets/css/mws-theme.css')}}
      {{ HTML::style('/assets/css/colorpicker.css')}}
      {{ HTML::style('/assets/css/wizard.css')}}
      {{ HTML::style('/assets/css/mws-style.css')}}
      {{ HTML::style('/assets/css/icol16.css')}}
      {{ HTML::style('/assets/css/icol32.css')}}
      {{ HTML::style('/assets/css/demo.css')}}
      {{ HTML::style('/assets/css/jquery.ui.all.css')}}
      {{ HTML::style('/assets/css/jquery-ui.custom.css')}}
      {{ HTML::style('/assets/css/mws-theme.css')}}
      {{ HTML::style('/assets/css/themer.css')}}
      {{ HTML::style('/assets/css/select2.css')}}

      <!-- END CORE CSS FRAMEWORK -->
   </head>
   <!-- END HEAD -->
   <!-- BEGIN BODY -->
   <body class="">
      <!-- Container -->
      <!-- Themer (Remove if not needed) -->  
      <div id="mws-themer">
         <div id="mws-themer-content">
            <div id="mws-themer-ribbon"></div>
            <div id="mws-themer-toggle">
               <i class="icon-bended-arrow-left"></i> 
               <i class="icon-bended-arrow-right"></i>
            </div>
            <div id="mws-theme-presets-container" class="mws-themer-section">
               <label for="mws-theme-presets">Color Presets</label>
            </div>
            <div class="mws-themer-separator"></div>
            <div id="mws-theme-pattern-container" class="mws-themer-section">
               <label for="mws-theme-patterns">Background</label>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
               <ul>
                  <li class="clearfix">
                     <span>Base Color</span> 
                     <div id="mws-base-cp" class="mws-cp-trigger"></div>
                  </li>
                  <li class="clearfix">
                     <span>Highlight Color</span> 
                     <div id="mws-highlight-cp" class="mws-cp-trigger"></div>
                  </li>
                  <li class="clearfix">
                     <span>Text Color</span> 
                     <div id="mws-text-cp" class="mws-cp-trigger"></div>
                  </li>
                  <li class="clearfix">
                     <span>Text Glow Color</span> 
                     <div id="mws-textglow-cp" class="mws-cp-trigger"></div>
                  </li>
                  <li class="clearfix">
                     <span>Text Glow Opacity</span> 
                     <div id="mws-textglow-op"></div>
                  </li>
               </ul>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
               <button class="btn btn-danger small" id="mws-themer-getcss">Get CSS</button>
            </div>
         </div>
         <div id="mws-themer-css-dialog">
            <form class="mws-form">
               <div class="mws-form-row">
                  <div class="mws-form-item">
                     <textarea cols="auto" rows="auto" readonly="readonly"></textarea>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <!-- Themer End -->
      <!-- Header -->
      <div id="mws-header" class="clearfix">
         <!-- Logo Container -->
         <div id="mws-logo-container">
            <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
            <div id="mws-logo-wrap">
               <img src="images/mws-logo.png" alt="mws admin">
            </div>
         </div>
         <!-- User Tools (notifications, logout, profile, change password) -->
         <div id="mws-user-tools" class="clearfix">
            <!-- Notifications -->
            <div id="mws-user-notif" class="mws-dropdown-menu">
               <a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>
               <!-- Unread notification count -->
               <span class="mws-dropdown-notif">35</span>
               <!-- Notifications dropdown -->
               <div class="mws-dropdown-box">
                  <div class="mws-dropdown-content">
                     <ul class="mws-notifications">
                        <li class="read">
                           <a href="#">
                           <span class="message">
                           Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                           </span>
                           <span class="time">
                           January 21, 2012
                           </span>
                           </a>
                        </li>
                        <li class="read">
                           <a href="#">
                           <span class="message">
                           Lorem ipsum dolor sit amet
                           </span>
                           <span class="time">
                           January 21, 2012
                           </span>
                           </a>
                        </li>
                        <li class="unread">
                           <a href="#">
                           <span class="message">
                           Lorem ipsum dolor sit amet
                           </span>
                           <span class="time">
                           January 21, 2012
                           </span>
                           </a>
                        </li>
                        <li class="unread">
                           <a href="#">
                           <span class="message">
                           Lorem ipsum dolor sit amet
                           </span>
                           <span class="time">
                           January 21, 2012
                           </span>
                           </a>
                        </li>
                     </ul>
                     <div class="mws-dropdown-viewall">
                        <a href="#">View All Notifications</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
               <a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
               <!-- Unred messages count -->
               <span class="mws-dropdown-notif">35</span>
               <!-- Messages dropdown -->
               <div class="mws-dropdown-box">
                  <div class="mws-dropdown-content">
                     <ul class="mws-messages">
                        <li class="read">
                           <a href="#">
                           <span class="sender">John Doe</span>
                           <span class="message">
                           Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                           </span>
                           <span class="time">
                           January 21, 2012
                           </span>
                           </a>
                        </li>
                        <li class="read">
                           <a href="#">
                           <span class="sender">John Doe</span>
                           <span class="message">
                           Lorem ipsum dolor sit amet
                           </span>
                           <span class="time">
                           January 21, 2012
                           </span>
                           </a>
                        </li>
                        <li class="unread">
                           <a href="#">
                           <span class="sender">John Doe</span>
                           <span class="message">
                           Lorem ipsum dolor sit amet
                           </span>
                           <span class="time">
                           January 21, 2012
                           </span>
                           </a>
                        </li>
                        <li class="unread">
                           <a href="#">
                           <span class="sender">John Doe</span>
                           <span class="message">
                           Lorem ipsum dolor sit amet
                           </span>
                           <span class="time">
                           January 21, 2012
                           </span>
                           </a>
                        </li>
                     </ul>
                     <div class="mws-dropdown-viewall">
                        <a href="#">View All Messages</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
               <!-- User Photo -->
               <div id="mws-user-photo">
                  <img src="example/profile.jpg" alt="User Photo">
               </div>
               <!-- Username and Functions -->
               <div id="mws-user-functions">
                  <div id="mws-username">
                     Hello, John Doe
                  </div>
                  <ul>
                     <li><a href="#">Profile</a></li>
                     <li><a href="#">Change Password</a></li>
                     <li><a href="index.html">Logout</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- Start Main Wrapper -->
      <div id="mws-wrapper">
         <!-- Necessary markup, do not remove -->
         <div id="mws-sidebar-stitch"></div>
         <div id="mws-sidebar-bg"></div>
         <!-- Sidebar Wrapper -->
         <div id="mws-sidebar">
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
               <span></span>
               <span></span>
               <span></span>
            </div>
            <!-- Searchbox -->
            <div id="mws-searchbox" class="mws-inset">
               <form action="typography.html">
                  <input type="text" class="mws-search-input" placeholder="Search...">
                  <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
               </form>
            </div>
            <!-- Main Navigation -->
            <div id="mws-navigation">
               <ul>
                  <li class="active"><a href="/dashboard"><i class="icon-home"></i> Dashboard</a></li>
                  <li><a href="/registration"><i class="icon-graph"></i> Registration</a></li>
                  <li>
                     <a href="#"><i class="icon-tools"></i> Setting Maneger</a>
                     <ul>
                        <li><a href="">Create Role</a></li>
                        <li><a href="">Assain Role</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#"><i class="icon-list"></i>Employee List</a>
                     <ul>
                        <li><a href="/registrationlist">User Information List</a></li>
                        <li><a href="">General Information List</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#"><i class="icon-list"></i>Employee Update</a>
                     <ul>
                        <li><a href="">GENERAL INFORMATION</a></li>
                        <li><a href="">SPOUSE INFOMATION</a></li>
                        <li><a href="">PERMANENT ADDRESS</a></li>
                        <li><a href="">PRESENT  ADDRESS</a></li>
                        <li><a href="">CHILDREN INFORMATION</a></li>
                        <li><a href="">VESTING OF MAGISTERIAL POWER</a></li>
                        <li><a href="">EDUCATONAL QUALIFICATION</a></li>
                        <li><a href="">LOCAL TRAINING</a></li>
                        <li><a href="">FOREIGN TRAINING</a></li>
                        <li><a href="">FOREIGN TRAVEL</a></li>
                        <li><a href="">POSTING ABROD</a></li>
                        
                     </ul>
                  </li>
                  <li>
                     <a href="#"><i class="icon-list"></i>Report</a>
                     <ul>
                        <li><a href="">Report 1</a></li>
                        <li><a href="">Report 2</a></li>
                     </ul>
                  </li>
                  
                  <li><a href=""><i class="icon-cogs"></i> Logout</a></li>
                  
               </ul>
            </div>
         </div>
         <!-- Main Container Start -->
         <div id="mws-container" class="clearfix">
            <!-- Inner Container Start -->
            <div class="container">
               @yield('bodycontent')
            </div>
            <!-- Inner Container End -->
            <!-- Footer -->
            <div id="mws-footer">
               Copyright Your Website 2012. All Rights Reserved.
            </div>
         </div>
         <!-- Main Container End -->
      </div>
      <!-- Container -->
      {{ HTML::script('/assets/js/jquery-1.8.3.min.js') }}
      {{ HTML::script('/assets/js/jquery-ui-1.9.2.min.js') }}
      <!-- jQuery-UI Dependent Scripts -->
      {{ HTML::script('/assets/js/jquery-ui-effects.min.js') }}
      <!-- Plugin Scripts -->
      {{ HTML::script('/assets/js/jquery.validate-min.js') }}
      <!-- Login Script -->
      {{ HTML::script('/assets/js/login.js') }}
      <!-- JavaScript Plugins -->
      {{ HTML::script('/assets/js/jquery.mousewheel.min.js') }}
      {{ HTML::script('/assets/js/jquery.placeholder.min.js') }}
      {{ HTML::script('/assets/js/fileinput.js') }}
      <!-- jQuery-UI Dependent Scripts -->
      {{ HTML::script('/assets/js/jquery-ui.custom.min.js') }}
      {{ HTML::script('/assets/js/jquery.ui.touch-punch.js') }}
      <!-- Plugin Scripts -->
      {{ HTML::script('/assets/js/colorpicker-min.js') }}
      {{ HTML::script('/assets/js/jquery.validate-min.js') }}
      {{ HTML::script('/assets/js/jquery.dataTables.min.js') }}
      {{ HTML::script('/assets/js/jquery.flot.min.js') }}
      {{ HTML::script('/assets/js/jquery.flot.tooltip.min.js') }}
      {{ HTML::script('/assets/js/jquery.flot.pie.min.js') }}
      {{ HTML::script('/assets/js/jquery.flot.stack.min.js') }}
      {{ HTML::script('/assets/js/jquery.flot.resize.min.js') }}
       {{ HTML::script('/assets/js/select2.js') }}
      <!-- Wizard Plugin -->
      {{ HTML::script('/assets/js/wizard.min.js') }}
      {{ HTML::script('/assets/js/jquery.form.min.js') }}
      <!-- Core Script -->
      {{ HTML::script('/assets/js/bootstrap.min.js') }}
      {{ HTML::script('/assets/js/mws.js') }}
      <!-- Themer Script (Remove if not needed) -->
      {{ HTML::script('/assets/js/themer.js') }}
      {{ HTML::script('/assets/js/sorkarikormocari.js') }}
      {{ HTML::script('/assets/js/postmonster.js')}}

   </body>

</html>