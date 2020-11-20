<?php

/**
 * Enqueue scripts and styles.
 */
function thomasdev_scripts() {


  
  wp_enqueue_style( 'icofont', get_asset( 'vendor', 'bootstrap/css/bootstrap.min.css' ), array(), _S_VERSION );
  wp_enqueue_style( 'bootstrap', get_asset( 'vendor', 'fontawesome-free/css/all.min.css' ), [], _S_VERSION );
  wp_enqueue_style( 'clean-blog', get_asset( 'css', 'clean-blog.min' ), array(), _S_VERSION );
  

  
  wp_enqueue_script( 'jquery', get_asset( 'vendor', 'jquery/jquery.min.js' ), [], null, true );
  wp_enqueue_script( 'bootstrap-bandle', get_asset( 'vendor', 'bootstrap/js/bootstrap.bundle.min.js' ), [], null, true );
  wp_enqueue_script( 'jquery-form' );
  wp_enqueue_script( 'BootstrapValidation', get_asset( 'js', 'jqBootstrapValidation' ), [], null, true );
  wp_enqueue_script( 'contact', get_asset( 'js', 'contact_me' ), [], null, true );
  wp_enqueue_script( 'clean-blog', get_asset( 'js', 'clean-blog.min' ), [], null, true );

}
add_action( 'wp_enqueue_scripts', 'thomasdev_scripts' );