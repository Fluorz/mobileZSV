<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon" href="favicon.ico" />
<link href="favicon.ico" media="(device-width: 320px)" rel="apple-touch-startup-image">
<link href="favicon.ico" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
<title>{{ $title }}</title>
<link rel="stylesheet" href="public/css/framework7.css">
<link rel="stylesheet" href="public/css/style.css">
<link type="text/css" rel="stylesheet" href="public/css/swipebox.css" />
<link href='https://fonts.googleapis.com/css?family=Montserrat%3A400italic%2C400%2C600%2C700%2C300&subset=latin%2Clatin-ext&ver=697e5a93ad6e909d2d7645bb07f44c35' rel='stylesheet' type='text/css'>
</head>
<body id="mobile_wrap">

    <div class="statusbar-overlay"></div>

    <div class="panel-overlay"></div>

    <div class="panel panel-left panel-reveal">
	<div class="view view-subnav">
	<div class="pages">

		<div data-page="panel-leftmenu" class="page pagepanel">
	    <!-- Search Bar -->
    <form class="searchbar">
        <div class="searchbar-input">
            <input type="search" placeholder="Search">
            <a href="#" class="searchbar-clear"></a>
        </div>
        <a href="#" class="searchbar-cancel">Cancel</a>
    </form>

    <!-- Search Bar overlay-->
    <div class="searchbar-overlay"></div>

    <!-- Page content -->
            <div class="page-content">

			<nav class="main-nav icons_inline">
			<ul>
			    <li><a href="/" class="close-panel" data-view=".view-main"><img src="public/images/icons/white/home.png" alt="" title="" /><span>{{ trans('application.home') }}</span></a></li>
			    <li><a href="about" class="close-panel" data-view=".view-main"><img src="public/images/icons/white/mobile.png" alt="" title="" /><span>{{ trans('application.about') }}</span></a></li>

                <li><a href="products" class="close-panel" data-view=".view-main"><img src="public/images/icons/white/categories.png" alt="" title="" /><span>{{ trans('application.products') }}</span></a></li>

                <li><a href="team" class="close-panel" data-view=".view-main"><img src="public/images/icons/white/users.png" alt="" title="" /><span>{{ trans('application.culture') }}</span></a></li>
                <li><a href="blog" class="close-panel" data-view=".view-main"><img src="public/images/icons/white/blog.png" alt="" title="" /><span>{{ trans('application.blog') }}</span></a></li>

                <li><a href="gallery" class="close-panel" data-view=".view-main"><img src="public/images/icons/white/photos.png" alt="" title="" /><span>{{ trans('application.gallery') }}</span></a></li>
                <li><a href="videos" class="close-panel" data-view=".view-main"><img src="public/images/icons/white/video.png" alt="" title="" /><span>{{ trans('application.videos') }}</span></a></li>


			    <li><a href="contact" class="close-panel" data-view=".view-main"><img src="public/images/icons/white/contact.png" alt="" title="" /><span>{{ trans('application.contact') }}</span></a></li>
			</ul>
			</nav>
                     </div>
		</div>
	  </div>
	</div>
    </div>
    <div class="views">

      <div class="view view-main">
    @yield('content')
    <script type="text/javascript" src="public/js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="public/js/jquery.validate.min.js" ></script>
<script type="text/javascript" src="public/js/framework7.js"></script>
<script type="text/javascript" src="public/js/jquery.swipebox.js"></script>
<script type="text/javascript" src="public/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="public/js/email.js"></script>
<script type="text/javascript" src="public/js/circlemenu.js"></script>
<script type="text/javascript" src="public/js/audio.min.js"></script>
<script type="text/javascript" src="public/js/my-app.js"></script>
  </body>
</html>
