<?php
wp_register_style( 'GRTNGS_style', GRTNGS_URL.'assets/css/style.css' );
wp_enqueue_style( 'GRTNGS_style' );

wp_enqueue_script( 'GRTNGS_js', GRTNGS_URL.'assets/js/script.js', array( 'jquery' ));
wp_localize_script( 'GRTNGS_js', 'GRTNGS_js', array(  'ajaxUrl' => admin_url( 'admin-ajax.php' ) ) );


if(is_admin())
{
	wp_register_style( 'GRTNGS_backend_style', GRTNGS_URL.'assets/css/backend.css' );
	wp_enqueue_style( 'GRTNGS_backend_style' );
	
	wp_enqueue_script( 'GRTNGS_backend_js', GRTNGS_URL.'assets/js/backend.js', array( 'jquery' ));	
	wp_localize_script( 'GRTNGS_backend_js', 'GRTNGS_backend_js', array(  'ajaxUrl' => admin_url( 'admin-ajax.php' ) ) );

}
else if(!is_admin())
{
	wp_register_style( 'GRTNGS_front_style', GRTNGS_URL.'assets/css/front.css' );
	wp_enqueue_style( 'GRTNGS_front_style' );
	
	wp_enqueue_script( 'GRTNGS_front_js', GRTNGS_URL.'assets/js/front.js', array( 'jquery' ));	
	wp_localize_script( 'GRTNGS_front_js', 'GRTNGS_front_js', array(  'ajaxUrl' => admin_url( 'wp-admin/admin-ajax.php' ) ) );

}