<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

require_once( get_template_directory() . '/App/Setup/actions.php' );
require_once( get_template_directory() . '/App/Setup/services.php' );
require_once( get_template_directory() . '/App/Setup/filters.php' );

require_once( get_template_directory() . '/App/Structure/navs.php' );
require_once( get_template_directory() . '/App/Structure/taxonomies.php' );

require_once( get_template_directory() . '/App/Http/assets.php' );
require_once( get_template_directory() . '/App/Http/ajaxes.php' );

require_once( get_template_directory() . '/App/helpers.php' );