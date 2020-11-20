<?php

/**
 * ACF Init Hook
 */
function my_acf_init() {
	/**
	 * Option Page
	 */
    if ( function_exists('acf_add_options_page') ) {
		acf_add_options_page([
			'menu_title' => esc_html__( 'Opzioni Tema', 'thomasDev' ),
			'page_title' => esc_html__( 'Opzioni Tema', 'thomasDev' ),
			'menu_slug' => 'theme-options',
			'post_id' => 'theme-options',
			'capability' => 'edit_theme_options',
			'redirect' => false,
			'position' => 2
		]);
	}
}
add_action('acf/init', 'my_acf_init');

function remove_admin_menus() {
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_init', 'remove_admin_menus' );


