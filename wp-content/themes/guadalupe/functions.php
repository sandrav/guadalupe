<?php

automatic_feed_links();

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		//'before_widget' => '<li id="%1$s" class="widget %2$s">',
		//'before_widget' => '<li>',
		//'after_widget' => '</li>',
		//'before_title' => '<h1>',
		//'after_title' => '</h1>',
	));
	register_sidebar(array('name'=>'sidebar2',
		//'before_widget' => '<ul>',
		//'after_widget' => '</ul>',
		//'before_title' => '<h4>',
		//'after_title' => '</h4>',
	));

if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );




// custom admin login logo
function custom_login_logo() {
	echo '<style type="text/css">
	h1 a { background-image: url('.get_bloginfo('template_directory').'/images/login.png) !important; }
	</style>';
}
add_action('login_head', 'custom_login_logo');


// Eliminar widgets del escritorio de inicio
function example_remove_dashboard_widgets() {	
 	global $wp_meta_boxes;

	// Elimina el widget de "incomming links"
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);

	// Elimina el widget "right now
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
}
add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets' );

//widget personalizado
function guadalupe_dashboard_widget_function() {	
	echo "Bienvenido al panel de control de Maria Guadalupe";
} 
function guadalupe_add_dashboard_widgets() {
	wp_add_dashboard_widget('guadalupe_dashboard_widget', 'Maria Guadalupe - Escritorio', 'guadalupe_dashboard_widget_function');
}
add_action('wp_dashboard_setup', 'guadalupe_add_dashboard_widgets' );


//admin footer
function remove_footer_admin () {
echo 'Colegio Maria de guadalupe';
}
add_filter('admin_footer_text', 'remove_footer_admin');

//tab ayuda
function hide_help() {
    echo '<style type="text/css">
            #contextual-help-link-wrap { display: none !important; }
          </style>';
}
// traducción tema
function my_theme_setup(){
    load_theme_textdomain('Guadalupe', get_template_directory() . '/languages');
}
add_action('admin_head', 'hide_help');//css para ocultar cosas del adminfunction custom_admin_style(){		wp_register_style('admin_style', get_template_directory_uri().'/admin.css');        	wp_enqueue_style('admin_style');	}add_action('admin_init', 'custom_admin_style');
add_action('after_setup_theme', 'my_theme_setup');

//Acivar resumen para paginas
add_post_type_support('page', 'excerpt');
?>
