<?php
/**
*template name: custom page template
*/

get_custom_header(); ?>

  <head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width">
			<title><?php wp_title( '|', true, 'right' ); ?></title>
			<link rel="profile" href="http://gmpg.org/xfn/11">
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
			<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
			<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >
	<script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
</head>
<body>
		<header>
			<div class="logo"><img src="http://www.sdunnmcad.me/midprogram/wp-content/uploads/2015/04/SDunn-Logo1.jpg" width="125" height="85"/>
			</div>
			<h1><?php bloginfo('name'); ?></h1>
				<?php wp_nav_menu( array( 'menu' => 'navmenu') ); ?>


<?php body_class(); ?>><script type="text/javascript" charset="utf-8">

get_footer('custom');
	
?>