<?php
/**
 * Post Slider Setup
 *
 * Enqueues scripts and styles for the slideshow
 * Sets slideshow excerpt length and slider animation parameter
 *
 * The template for displaying the slideshow can be found under /template-parts/post-slider.php
 *
 * @package Palm Beach
 */

/**
 * Enqueue slider scripts and styles.
 */
function palm_beach_slider_scripts() {

	// Get theme options from database.
	$theme_options = palm_beach_theme_options();

	// Register and enqueue FlexSlider JS and CSS if necessary.
	if ( true === $theme_options['slider_blog'] or true === $theme_options['slider_magazine'] or is_page_template( 'template-slider.php' ) ) :

		// FlexSlider JS.
		wp_enqueue_script( 'jquery-flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array( 'jquery' ), '2.6.0' );

		// Register and enqueue slider setup.
		wp_enqueue_script( 'palm-beach-slider', get_template_directory_uri() . '/js/slider.js', array( 'jquery-flexslider' ), '20170421' );

		// Register and enqueue slider CSS.
		wp_enqueue_style( 'palm-beach-slider', get_template_directory_uri() . '/css/flexslider.css', array(), '20170421' );

	endif;

}
add_action( 'wp_enqueue_scripts', 'palm_beach_slider_scripts' );


/**
 * Function to change excerpt length for post slider
 *
 * @param int $length Length of excerpt in number of words.
 * @return int
 */
function palm_beach_slider_excerpt_length( $length ) {
	return 25;
}


/**
 * Sets slider animation effect
 *
 * Passes parameters from theme options to the javascript files (js/slider.js)
 */
function palm_beach_slider_options() {

	// Get theme options from database.
	$theme_options = palm_beach_theme_options();

	// Set parameters array.
	$params = array();

	// Set slider animation.
	$params['animation'] = ( 'fade' === $theme_options['slider_animation'] ) ? 'fade' : 'slide';

	// Set slider speed.
	$params['speed'] = absint( $theme_options['slider_speed'] );

	// Passing parameters to Flexslider.
	wp_localize_script( 'palm-beach-slider', 'palm_beach_slider_params', $params );

}
add_action( 'wp_enqueue_scripts', 'palm_beach_slider_options' );


/**
 * Display Post Slider
 */
function palm_beach_slider() {

	// Get theme options from database.
	$theme_options = palm_beach_theme_options();

	// Display post slider only if activated.
	if ( is_page_template( 'template-slider.php' )
		or ( true === $theme_options['slider_blog'] and is_home() )
		or ( true === $theme_options['slider_magazine'] and is_page_template( 'template-magazine.php' ) )
	) {

		get_template_part( 'template-parts/slider/post-slider-container' );

	}

}
