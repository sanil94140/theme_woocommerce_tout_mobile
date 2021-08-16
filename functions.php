<?php


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/ressource/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

require_once get_template_directory() . '/ressource/customizer.php';


function tout_mobile_scripts()
{
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/ressource/bootstrap.min.js', array('jquery'), '4.3.1', true);
    wp_enqueue_style('bootstrap.css', get_template_directory_uri().'/ressource/bootstrap.min.css'
    , array(), '4.3.1', 'all' );
    wp_enqueue_style( 'tout-mobile-style', 
    get_stylesheet_uri(), array(), filemtime(get_template_directory().'/style.css'), 'all' );
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600&display=swap');

    	// Flexlider javascript and CSS files
	wp_enqueue_script( 'flexslider-min-js', get_template_directory_uri() . '/woocommerce/flexslider/jquery.flexslider-min.js', array( 'jquery' ), '', true );
	wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/woocommerce/flexslider/flexslider.css', array(), '', 'all' );
	wp_enqueue_script( 'flexslider-js', get_template_directory_uri() . '/woocommerce/flexslider/flexslider.js', array( 'jquery' ), '', true );	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'tout_mobile_scripts');


function tout_mobile_config()
{
    register_nav_menus(
        array(
            'tout_mobile_main_menu' => 'Tout Mobile Menu Principal',
            'tout_mobile_footer_menu' => 'Tout Mobile Footer Menu',
            'seconde'               => 'Deuxième menu'
        )
    );
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' =>255,
        'single_image_width'    =>255,
        'product_grid'          =>array(
            'default_rows'     =>10,
            'min_rows'         =>5,
            'max_rows'         =>10,
            'default_columns'  =>1,
            'min_columns'      =>1,
            'max_columns'      =>1
        )
    ));
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    add_theme_support('custom-logo', array(
        'height'        =>85,
        'width'         =>160,
        'flex_height'   =>true,
        'flex_width'    =>true
    ));

    add_image_size('tout-mobile-slider', 1920, 800, array('center', 'center'));

    if(!isset($content_width)){
        $content_width=600;
    }
}
add_action('after_setup_theme', 'tout_mobile_config', 0);

if(class_exists('woocommerce')){
    require get_template_directory(). '/woocommerce/wp-modification.php';    
}
