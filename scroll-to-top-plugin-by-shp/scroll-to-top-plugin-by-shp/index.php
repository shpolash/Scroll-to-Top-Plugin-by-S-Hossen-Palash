<?php

/*
Plugin Name: Simple Scroll 2 Top;
Plugin URI: http://shpolashbd.com;
Author: SH Polash;
Author URI: http://shpolashbd.com;
Description: This is a simple scroll to top plugin by SH Polash, so much user friendly;
Version: 1.0.1

*/
add_action('wp_footer','post_type');
function post_type() {
	?>
	<div class="scroll-to-top">
		<a href="#"><i class="fa fa-chevron-up"></i></a>
	</div>

	<?php
}

add_action('wp_enqueue_scripts','notun_script');
function notun_script() {
	wp_enqueue_style('plugin-font-awesome',PLUGINS_URL('css/font-awesome.min.css',__FILE__));
	wp_enqueue_style('plugin-custom-css',PLUGINS_URL('css/custom.css',__FILE__));
	wp_enqueue_script('prothom-custom-js',PLUGINS_URL('scripts/custom.js',__FILE__),array('jquery'),'',false);
}


