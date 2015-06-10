<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="viewport" content="width=device-width" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="main">
	<div class="head">
			<center><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></center>
			<center class="head2"><?php  bloginfo('description'); ?></center>
	</div>
	<div class="content-main">