<?php
add_action( 'after_setup_theme', 'whitepaper_setup' );
if ( ! isset( $content_width ) )
$content_width = 960;
function whitepaper_setup() {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size(166, 124, TRUE);
	add_theme_support( 'automatic-feed-links' );
}
function whitepaper_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'sidebar-left', 'whitepaper' ),
	) );
	register_sidebar( array(
		'name'          => __( 'sidebar-center', 'whitepaper' ),
	) );
	register_sidebar( array(
		'name'          => __( 'sidebar-right', 'whitepaper' ),
	) );
}
add_action( 'widgets_init', 'whitepaper_widgets_init' );
function true_style_frontend() { wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css?' . filemtime(get_stylesheet_directory() . '/style.css'));}
add_action( 'wp_enqueue_scripts', 'true_style_frontend' );
function whitepaper_wp_title( $title, $sep ) {
	global $paged, $page;
	if ( is_feed() )
		return $title;
	$title .= get_bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'whitepaper' ), max( $paged, $page ) );
	return $title;
}
add_filter( 'wp_title', 'whitepaper_wp_title', 10, 2 );
if ( is_singular() ) wp_enqueue_script( "comment-reply" );
$args = array(
	'before'           => '<p>' . __('Pages:'),
	'after'            => '</p>',
	'link_before'      => '',
	'link_after'       => '',
	'next_or_number'   => 'number',
	'nextpagelink'     => __('Next page'),
	'previouspagelink' => __('Previous page'),
	'pagelink'         => '%',
	'echo'             => 1
);

add_action('init', function() {
	remove_filter('the_excerpt', 'wpautop');
	remove_filter('the_content', 'wpautop');
});

add_filter('tiny_mce_before_init', function($init) {
	$init['wpautop'] = false;
	$init['apply_source_formatting'] = ture;
	return $init;
});

/* for markdown plugins*/
remove_filter('the_content','wpautop');
add_filter('the_content','wpautop_nobr');
function wpautop_nobr($txt) {
    return wpautop($txt, false);
}

?>
