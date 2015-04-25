<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<title><?php wp_title; ?></title>

<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>;
charset=<?php bloginfo('charset'); ?>">

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<script src="<?php echo get_template_directory_uri(); ?>/scripts/functions.js" type="text/javascript"></script>
</head>

<header>
<div class="logo">
<img src="http://www.sdunnmcad.me/midprogram/wp-content/uploads/2015/04/SDunn-Logo1.jpg" width="100" height="85" />
</div>

<nav id="navmenu">
<ul>
<li><a href="http://www.sdunnmcad.me/midprogram">home</a></li>
<li><a href="http://www.sdunnmcad.me/midprogram/?p=157">mcad projects</a></li>
<li><a href="http://www.sdunnmcad.me/midprogram/about ">about Sonya</a></li>
<li><a href="http://www.sdunnmcad.me/midprogram/say-hello">say hello</a></li>
</ul>
</nav>

<body<?php body_class('container'); ?>>

</header>