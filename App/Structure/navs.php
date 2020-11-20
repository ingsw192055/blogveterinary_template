<?php

/**
 * Registro i menu
 * 
 * @return void
 */
function register_navigation_areas()
{
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Menu Primario', 'primario' ),
				'chi-siamo' => esc_html__( 'Menu Secondario', 'secondario' ),
			)
		);
}
add_action( 'after_setup_theme', 'register_navigation_areas' );