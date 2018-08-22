<?php 

function resgister_enqueue_style(){
	$theme_data = wp_get_theme();


wp_register_style('bootstrap-css', get_theme_file_uri ('vendor/bootstrap/css/bootstrap.min.css'), null, $theme_data->get('Version'), 'screen');

wp_register_style('portfolio-css', get_theme_file_uri ('css/portfolio-item.css'), null, $theme_data->get('Version'), 'screen');

wp_enqueue_style('bootstrap-css');
wp_enqueue_style('portfolio-css');

}

add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );





function resgister_enqueue_scripts(){
	$theme_data = wp_get_theme();

wp_deregister_script('jquery');
wp_deregister_script('jquery-migrate');


wp_register_script('jquery-css', get_parent_theme_file_uri('vendor/jquery/jquery.min.js'), array('jQuery_migrate'), null, true);

wp_register_script('bootstrap-css', get_parent_theme_file_uri('vendor/bootstrap/js/bootstrap.bundle.min.js'), array('jQuery_migrate'), null, true);

wp_enqueue_script('jquery-css');
wp_enqueue_script('bootstrap-css');

}
add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );

?>

<?php 
if (function_exists('register_nav_menus')) {
	register_nav_menus (array('superior' => 'menú principal superior'));
}

if (function_exists('add_theme_support') ) {
	add_theme_support('post-thumbnails');
}
 

 ?>

