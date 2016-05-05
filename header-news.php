<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">
	<?php // force Internet Explorer to use the latest rendering engine available ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title></title>
    
    <meta name="Description" content="" />

	<?php // mobile meta (hooray!) ?>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<![endif]-->
	<?php // or, set /favicon.ico for IE10 win ?>
	<meta name="msapplication-TileColor" content="#f01d4f">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
    <meta name="theme-color" content="#121212">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/style.css" type="text/css" media="all" />
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:600italic" rel="stylesheet" type="text/css">

	<?php // wordpress head functions ?>
	<?php wp_head(); ?>
	<?php // end of wordpress head ?>

	<?php // drop Google Analytics Here ?>
    
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-71635458-1', 'auto');
	  ga('send', 'pageview');
	
	</script>
    
	<?php // end analytics ?>

</head>
<body>
	<div id="wrapper">
    	<div class="nav">
			<button class="btn-nav">
				<span class="icon-bar top"></span>
				<span class="icon-bar middle"></span>
				<span class="icon-bar bottom"></span>
			</button>
		</div>
		<nav class="nav-content hideNav hidden">
			<ul class="nav-list flex_row">
				<li class="nav-item">
					<a href="<?php echo get_option('home'); ?>" class="item-anchor">Home</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo get_option('home'); ?>/about/" class="item-anchor">About US</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo get_option('home'); ?>/member/" class="item-anchor">Member</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo get_option('home'); ?>/business/" class="item-anchor">Business</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo get_option('home'); ?>/news/" class="item-anchor">News</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo get_option('home'); ?>/works/" class="item-anchor">Works</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo get_option('home'); ?>/company/" class="item-anchor">Company</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo get_option('home'); ?>/contact/" class="item-anchor">Contact</a>
				</li>
			</ul>
		</nav>
		<header id="header" class="child_header_wrap header_none">
			<div class="child_header child_header_img">
				<div>
					<a href="<?php echo get_option('home'); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.svg" alt="Gisuco Inc">
					</a>
				</div>
				<h1>News</h1>
			</div>
		</header><!-- ヘッダーここまで -->
